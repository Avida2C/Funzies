<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';

$isLoggedIn = false;
$cartItems = null;
$subtotal = 0;
$delivery = 0;
$total = 0;
$addresses = null;
$user = null;
$selectedAddress = null;
$userExists = false; 

// Calculate subtotal from cart items if they exist
if(isset($_SESSION['CART_ITEMS']) && !empty($_SESSION['CART_ITEMS'])) {
    $cartItems = $_SESSION['CART_ITEMS'];
    foreach($cartItems as $key => $item) {
        $subtotal += $item['Price'] * $item['Quantity'];
    }
    $delivery = 5;
    $total = $subtotal + $delivery;
}

// If the user is logged in, retrieve their information and default address.
if(isset($_SESSION['USER'])) {
    $isLoggedIn = true;
    $user = $_SESSION['USER'];
    $addresses = GetAddressesByUser($con, $user['ID']);
    foreach($addresses as $address) {
        if($address["Def"] == 1) {
            $selectedAddress = $address;
            break;
        }
    }
}

// Handle form submissions for address selection and order completion
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Allow the user to select an existing address or enter a new one.
    if(isset($_POST["selectAddress"])) {
        if($_POST["selectAddress"] == "NEW") {
            $selectedAddress = null;
        } else {
            foreach($addresses as $address) {
                if($address["ID"] == $_POST["selectAddress"]) {
                    $selectedAddress = $address;
                    break;
                }
            }
        }
        // Process the customer details and create an order if a valid address is selected or entered.
    } else if(isset($_POST["customerDetailsForm"])) {
        if($_POST['newAddressSelected'] == "true") {

            $selectedAddress = null;
        }
        if($selectedAddress != null) {
            // Create an order using the user's selected address and cart items.
            $result = createOrder($con, $user, $selectedAddress, $cartItems);
            if($result) {
                // If the order is successful, clear the cart and redirect to the order confirmation page.
                $_SESSION["ORDER_SUMMARY"]["ITEMS"] = $cartItems;
                $_SESSION["ORDER_SUMMARY"]["ADDRESS"] = $selectedAddress;
                $_SESSION["CART_ITEMS"] = [];
                echo '<script type="text/javascript"> window.location.href="orderconfirmed.php" </script>';
            }
        } else {
            // If the user is logged in, handle creating a new address and order.
            if($isLoggedIn) {
                $selectedAddress = [];
                $selectedAddress["Name"] = htmlspecialchars(addslashes($_POST["firstname"]));
                $selectedAddress["Surname"] = htmlspecialchars(addslashes($_POST["lastname"])); 
                $selectedAddress["Street"] = htmlspecialchars(addslashes($_POST["address"])); 
                $selectedAddress["City"] = htmlspecialchars(addslashes($_POST["city"])); 
                $selectedAddress["ZipCode"] = htmlspecialchars(addslashes($_POST["zipcode"])); 
                $selectedAddress["Region"] =$_POST["region"]; 
                $selectedAddress["User"] = $user["ID"];
                $selectedAddress["Default"] = $addresses->num_rows == 0 ? true : false;
                $selectedAddress["Mobile"] = htmlspecialchars(addslashes($_POST["addrphone"])); 
                $selectedAddress["ID"] = createAddress($con, $user["ID"], $selectedAddress);
                $result = createOrder($con, $user, $selectedAddress, $cartItems);
                if($result) {
                    $_SESSION["ORDER_SUMMARY"]["ITEMS"] = $cartItems;
                    $_SESSION["ORDER_SUMMARY"]["ADDRESS"] = $selectedAddress;
                    $_SESSION["CART_ITEMS"] = [];
                    echo '<script type="text/javascript"> window.location.href="orderconfirmed.php" </script>';
                }
            } else {
                // If the user is not logged in, check if they already exist and either create a new user or set an error message.
                $user = [];
                $user['Name'] = htmlspecialchars(addslashes($_POST['userfirstname']));
                $user['Surname'] = htmlspecialchars(addslashes($_POST['userlastname']));
                $user['Email'] = htmlspecialchars(addslashes($_POST['email']));
                $user['Password'] = sha1($_POST['password']);
                $user['ContactNumber'] = htmlspecialchars(addslashes($_POST['userphone']));
                if(!CheckUserExists($con, $user['Email'])) {
                    $user['ID'] = createUser($con, $user);
                    if($user['ID'] > 0) {
                        $userCreated = true;
                        $selectedAddress = [];
                        $selectedAddress["Name"] = htmlspecialchars(addslashes($_POST["firstname"]));
                        $selectedAddress["Surname"] = htmlspecialchars(addslashes($_POST["lastname"])); 
                        $selectedAddress["Street"] = htmlspecialchars(addslashes($_POST["address"])); 
                        $selectedAddress["City"] = htmlspecialchars(addslashes($_POST["city"])); 
                        $selectedAddress["ZipCode"] = htmlspecialchars(addslashes($_POST["zipcode"])); 
                        $selectedAddress["Region"] = $_POST["region"]; 
                        $selectedAddress["User"] = $user["ID"];
                        $selectedAddress["Default"] = $addresses->num_rows == 0 ? true : false;
                        $selectedAddress["Mobile"] = htmlspecialchars(addslashes($_POST["addrphone"])); 
                        $selectedAddress["ID"] = createAddress($con, $user["ID"], $selectedAddress);
                        $result = createOrder($con, $user, $selectedAddress, $cartItems);
                        if($result) {
                            $_SESSION["ORDER_SUMMARY"]["ITEMS"] = $cartItems;
                            $_SESSION["ORDER_SUMMARY"]["ADDRESS"] = $selectedAddress;
                            $_SESSION["CART_ITEMS"] = [];
                            echo '<script type="text/javascript"> window.location.href="orderconfirmed.php" </script>';
                        }
                    }
                }
                else{
                    // If the user already exists, set userExists to true and user to null.
                    $userExists = true;
                    $user = null;
                }
            }
        }
    }
}?>

<?php
$pagetitle = 'checkout';
require_once 'include/header.php';
require_once 'include/navbar.php';
?>

<!-- Page Title -->
<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-mt mb-4">
    <h3 class="fs-3 text-center">Check Out</h3>
</div>

<!-- Main Checkout Container -->
<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-mb">
    <div class="row justify-content-center">
        <!-- Customer Details and Delivery Information Form -->
        <div id="loginMessage" class="col-sm-12 col-md-12 col-lg-5 col-xl-5 mx-4">
            <!-- Check if the user is not logged in and display a message to log in for faster checkout. -->
            <?php if(!$isLoggedIn) : ?>
            <p class="product-card-font bg-danger p-2 fs-6 text-white w-100 mb-4">Already have an account? <a
                    href="createAccount.php" class="text-decoration-none text-dark">Log In</a> for faster checkout!</p>
            <?php else : ?>

            <form method="POST" name="formSelectAddress">
                <select name="selectAddress" id="selectAddress" class="form rounded-0 p-1 mb-3" style="width: 100%;"
                    required autocomplete="region" onchange="document.formSelectAddress.submit()">
                    <!-- Dynamically list all addresses associated with the user. -->
                    <?php foreach($addresses as $address): ?>
                    <option value="<?php echo $address['ID']; if($selectedAddress != null && $address["Def"] == $selectedAddress["ID"]) { echo 'selected';
                                   }?>">
                        <?php echo $address['Name'] . ' ' . $address['Surname'] . ', ' . $address['Street'] .', ' . $address['City'] . ', ' . $address['ZipCode'] . ', ' . $address['Region'] ?>
                    </option>
                    <?php endforeach; ?>
                    <option value="NEW" <?php if($selectedAddress == null) { echo "selected";
                                        } ?>>
                        Add new address...
                    </option>
                </select>
            </form>

            <?php endif; ?>

            <!-- Customer Details Form -->
            <form id="customerDetailsForm" class="form" method="POST" name="customerDetailsForm">
                <input type="hidden" name="customerDetailsForm">
                <input type="hidden" name="newAddressSelected"
                    value="<?php echo $selectedAddress == null ? 'true' : 'false' ?>">
                <h3 class="product-card-font fs-4 mb-3">Customer Details</h3>

                <!-- Conditional display based on user's login status -->
                <?php if($user != null) : ?>
                <!-- Prefill the form with user data if logged in -->
                <label for="firstname-input">First Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="userfirstname-input" name="userfirstname"
                    value="<?php echo $user["Name"]?>" required disabled>

                <label for="lastname-input">Last Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="userlastname-input" name="userlastname"
                    value="<?php echo $user["Surname"]?>" required disabled>

                <label for="email-input">E-Mail:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="email-input" name="email"
                    value="<?php echo $user["Email"]?>" required disabled autocomplete="email">

                <label for="phone-input">Mobile Number:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="user-phone-input" name="userphone"
                    value="<?php echo $user["ContactNumber"]?>" required disabled autocomplete="tel">

                <?php else : ?>
                <!-- Display empty input fields for guest users -->
                <label for="firstname-input">First Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="user-firstname-input" name="userfirstname" required>

                <label for="lastname-input">Last Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="user-lastname-input" name="userlastname" required>

                <label for="phone-input">Mobile Number:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="user-phone-input" name="userphone" required
                    autocomplete="tel">

                <label for="email-input">E-Mail:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="email-input" name="email" required autocomplete="email">

                <label for="email-input">Password:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="password" id="password-input" name="password" required
                    autocomplete="email">
                <?php endif; ?>

                <h3 class="product-card-font fs-4 my-3">Delivery Details</h3>

                <!-- Conditional display based on selectedAddress -->
                <?php if($selectedAddress != null) : ?>
                <!-- Prefill the form with selected address if exists -->
                <label for="firstname-input">First Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="firstname-input" name="firstname"
                    value="<?php echo $selectedAddress["Name"]?>" required disabled>

                <label for="lastname-input">Last Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="lastname-input" name="lastname"
                    value="<?php echo $selectedAddress["Surname"]?>" required disabled>

                <select name="region" id="region-select" class="form rounded-0 p-1 mb-3" style="width: 100%;" required
                    autocomplete="region" required disabled>
                    <option value="Malta" <?php if($selectedAddress["Region"] == "Malta") { echo "selected";
                                          } ?>>Malta</option>
                    <option value="Gozo" <?php if($selectedAddress["Region"] == "Gozo") { echo "selected";
                                         } ?>>Gozo</option>
                </select>

                <label for="address-input">Address:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="address-input" name="address" required disabled
                    autocomplete="street-address" value="<?php echo $selectedAddress["Street"]?>">

                <label for="city-input">City:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="city-input" name="city" required disabled
                    value="<?php echo $selectedAddress["City"]?>">

                <label for="zipcode-input">ZIP Code:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="zipcode-input" name="zipcode" required disabled
                    value="<?php echo $selectedAddress["ZipCode"]?>">

                <label for="phone-input">Mobile Number:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="user-phone-input" name="userphone" required disabled
                    value="<?php echo $selectedAddress["Mobile"]?>" autocomplete="tel">


                <?php else : ?>
                <!-- Display empty address input fields for new address -->
                <label for="firstname-input">First Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="firstname-input" name="firstname" required>

                <label for="lastname-input">Last Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="lastname-input" name="lastname" required>

                <select name="region" id="region-select" class="form rounded-0 p-1 mb-3" style="width: 100%;" required
                    autocomplete="region" required>
                    <option value="Malta" selected>Malta</option>
                    <option value="Gozo">Gozo</option>
                </select>

                <label for="address-input">Address:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="address-input" name="address" required
                    autocomplete="street-address">

                <label for="city-input">City:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="city-input" name="city" required>

                <label for="zipcode-input">ZIP Code:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" id="zipcode-input" name="zipcode" required>

                <label for="phone-input">Mobile Number:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="tel" id="user-phone-input" name="addrphone" required
                    autocomplete="tel">
                <?php endif; ?>
                <!-- Check if user Exists -->
                <?php if($userExists) : ?>
                <!-- If User exists: Display Error -->
                <h3>A user with this email already exists, nahseb.</h3>
                <?php endif; ?>
                <button type="submit" class="btn w-100 btn-danger rounded-0">
                    Complete Order
                </button>
            </form>
            <!-- Secure Checkout -->
            <p class="product-card-font fs-6 py-3">
                <ion-icon class="align-middle" name="lock-closed"></ion-icon> Secure Checkout
            </p>
        </div>

        <!-- Order Summary Section -->
        <div id="orderSummary" class="col-sm-12 col-md-12 col-lg-4 col-xl-4 px-3">
            <div class="row">
                <div class="col-6 ">
                    <h3 class="fs-5">Order Summary</h3>
                </div>
                <div class="col-6">
                    <p class="text-end"><a class="text-decoration-none text-danger " href="viewcart.php">Edit Order</a>
                    </p>
                </div>
            </div>

            <div class="container overflow-auto" style="height:350px;">
                <!-- Product List -->
                <table class="table">
                    <!-- Product -->
                    <?php foreach($cartItems as $key => $item) { ?>
                    <tr class="align-middle">
                        <td>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img style="height: 70px;" src="<?php echo $item['Image'] ?>" alt="">
                                </div>
                                <div class="col-8 text-start">
                                    <p class="fs-6"><?php echo $item['Name'] ?>
                                        <span class="product-card-font fs-6">X<?php echo $item['Quantity'] ?></span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="product-card-font fs-5 text-danger">
                                &euro;<?php echo number_format(((float)$item['Price'] * (float)$item['Quantity']), 2, '.', '');?>
                            </p>
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- End of Products List -->
                </table>
            </div>

            <!-- Subtotal, Delivery Charges, Total, and Payment Information -->
            <table class="table table-borderless text-center">
                <tr>
                    <td class="py-2">
                        Subtotal
                    </td>
                    <td class="py-2">
                        &euro;<?php echo number_format($subtotal, 2, '.', ',') ?>
                    </td>
                </tr>
                <tr>
                    <td class="py-2">
                        Delivery
                    </td>
                    <td class="py-2">
                        &euro;<?php echo number_format($delivery, 2, '.', ',') ?>
                    </td>
                </tr>
                <tr class="border-top">
                    <th class="py-2">
                        <p class="product-card-font fs-5">
                            Total
                        </p>
                    </th>
                    <td class="py-2">
                        <p class="product-card-font text-danger fs-5">
                            &euro;<?php echo number_format($total, 2, '.', ',') ?>
                        </p>
                    </td>
                </tr>
            </table>

            <!-- Delivery and Payment Details -->
            <div class="container mt-4 bg-danger text-white p-3 text-center">
                <h3 class="product-card-font fs-5">Delivery</h3>
                <p>Monday to Friday</p>
                <h3 class="product-card-font fs-5">Payment on Delivery</h3>
                <p>Cash, Revolut or BOV Pay Only</p>
            </div>

        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
