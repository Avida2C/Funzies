<?php 
require 'functions.php'; // General functions used throughout the site.
require 'dbfunctions.php'; // Database interaction functions.

/**
 * Deletes a specific item from the cart if the request method is POST and the 'deleteCartItem' parameter is not empty.
 *
 * @param array $_SERVER
 * @param array $_POST
 * @param array $_SESSION
 * @return void
 */
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['deleteCartItem'])) {
    foreach($_SESSION['CART_ITEMS'] as $key => $itm) {
        if ($itm['ID'] == $_POST['deleteCartItem']) {
            unset($_SESSION['CART_ITEMS'][$key]);
        }
    }
}

$cartItems = null; // Cart items.
$subtotal = 0; // Total cost of items before adding extra fees.
$delivery = 0; // Delivery fee.
$total = 0; // Total cost including delivery.


/**
 * Calculates the total cost of items in the cart, including subtotal and delivery charges.
 * 
 * @return float The total cost of items in the cart.
 */
if(isset($_SESSION['CART_ITEMS'])) {
    $cartItems = $_SESSION['CART_ITEMS']; // Load items from session.
    // Calculate subtotal from item prices and quantities.
    foreach($cartItems as $key => $item) {
        $subtotal += $item['Price'] * $item['Quantity'];
    }
    $delivery = 5; // Delivery Fee.
    $total = $subtotal + $delivery; // Total cost calculation.
}?>

<?php
$pagetitle = 'view cart';
require_once 'include/header.php'; // Site header.
require_once 'include/navbar.php'; // Navigation bar.
?>

<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-mt">
    <h3 class="fs-4">Shopping Cart</h3>
</div>

<!-- Shopping Cart Content -->
<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-mb text-center">
    <!-- Check if there are items in the cart and display them -->
    <?php if(isset($cartItems) && !empty($cartItems)) : ?>
    
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 overflow-auto me-4" style="height: 475px;">
            <!-- Cart Items Table -->
            <table class="table">
                <!-- Table Headers for Product, Quantity, and Price -->
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                <!-- Loop through each cart item and display details -->
                <?php foreach($cartItems as $item) : ?>
                <tr class="align-middle">
                    <td class="px-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <form method="POST">
                                    <!-- On submit of the close button, it will remove the item with the product's ID number -->
                                    <input type="hidden" name="deleteCartItem" value="<?php echo $item['ID']; ?>">
                                    <button type="submit" class="btn-close"></button>
                                </form>
                            </div>
                            <div class="col-3">
                                <img style="height: 70px;" src="<?php echo $item["Image"] ?>">
                            </div>
                            <div class="col-8 text-start">
                                <!-- Displays item name -->
                                <p class="fs-6"><?php echo $item['Name']; ?></p>
                                <p class="product-card-font fs-6">
                                    <!-- Displays price of item to two decimal points -->
                                    &euro;<?php echo number_format((float) $item["Price"], 2, '.', '');?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="quantity-selector">
                            <!-- Buttons to decrease and increase quantity and display current quantity -->
                            <button class="quantity-button decrement-btn" value="<?php echo $item["ID"]?>">-</button>
                            <input type="text" class="quantity quantity-input quantity-input<?php echo $item["ID"]?>"
                                name="quantity" value="<?php echo $item["Quantity"] ?>" readonly>
                            <button class="quantity-button increment-btn" value="<?php echo $item["ID"]?>">+</button>
                            <!-- Hidden input to hold the maximum stock available for the item -->
                            <input type="hidden" id="maxStock<?php echo $item["ID"]?>"
                                value="<?php echo $item["Stock"] ?>">
                        </div>
                    </td>
                    <!-- Column to display the total price for the item's quantity -->
                    <td class="px-4">
                        <!-- Hidden input to hold the item's price -->
                        <input type="hidden" id="prodPrice<?php echo $item["ID"] ?>"
                            value="<?php echo $item["Price"] ?>">
                        <p class="product-card-font fs-5 text-danger subtotalprice<?php echo $item["ID"] ?>">
                            <!-- Display subtotal for the item (price * quantity) formatted to two decimal places -->
                            &euro;<?php echo number_format((float) ($item["Price"] * $item["Quantity"]), 2, '.', '');?>
                        </p>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!-- End of Products List -->
            </table>
        </div>

        <!-- Order Summary Section -->
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <h3 class="fs-5">Order Summary</h3>
            <table class="table table-borderless">
                <!-- Displaying subtotal, delivery charges, and total amount -->
                <tr>
                    <td class="py-3">Subtotal</td>
                    <td class="py-3">
                        <!-- Displays sub total price to two decimal places -->
                        <div class="subTotalPrice">&euro;<?php echo number_format((float) $subtotal, 2, '.', '');?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-3">Delivery</td>
                    <td class="py-3">
                        <input type="hidden" id="deliveryPrice" value="<?php echo $delivery ?>">
                        <!-- Displays delivery price to two decimal places -->
                        &euro;<?php echo number_format((float) $delivery, 2, '.', '');?>
                    </td>
                </tr>
                <tr class="border-top">
                    <th class="py-">
                        <p class="product-card-font fs-5">Total</p>
                    </th>
                    <td class="py-2">
                        <p id="totalPrice" class="product-card-font text-danger fs-5">
                            <!-- Displays the total price to two decimal places -->
                            &euro;<?php echo number_format((float) $total, 2, '.', '');?></p>
                    </td>
                </tr>
            </table>
            <!-- Button to proceed to checkout -->
            <button onclick="document.location='checkout.php'" class="btn w-100 btn-danger rounded-0">
                Proceed to Checkout </button>
            <!-- Display message: Secure Checkout -->
            <p class="product-card-font fs-6 py-3">
                <ion-icon class="align-middle" name="lock-closed"></ion-icon> Secure Checkout
            </p>
        </div>
    </div>
    <!-- Else if there is no items in the cart: -->
    <?php else : ?>
    <div class="row">
        <!-- Display this -->
        <h2>You have no items in your cart!</h2>
    </div>
    <?php endif; ?>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
