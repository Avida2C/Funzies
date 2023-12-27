<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';
require_once 'include/navbar.php';

// Retrieve order details from the session
$address = $_SESSION["ORDER_SUMMARY"]["ADDRESS"];
$items = $_SESSION["ORDER_SUMMARY"]["ITEMS"];

// Initialize variables for calculating totals
$subtotal = 0;
$delivery = 5;

$total = $delivery;
?>

<!-- Order Confirmation Section -->
<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-my">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <h3 class="product-card-font fs-4 text-danger">Order confirmed! </h3>
            <p class="fs-6 mb-4">The adventure starts now! Your order has arrived in our
                world, poised for a thrilling journey to your doorstep. Brace yourself for a delivery team touchdown –
                we'll be ringing you soon to make your day extra special!</p>

            <!-- Customer Address and Details -->
            <h3 class="fs-5">Delivery Details</h3>
            <p>
                <?php echo $address["Name"] . ' ' . $address['Surname']; ?>
                <br><?php echo $address["Street"]; ?>
                <br><?php echo $address["City"]; ?>
                <br><?php echo $address["ZipCode"]; ?>
                <br><?php echo $address["Region"]; ?>
            </p>
        </div>

        <!-- Order Summary -->
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <h3 class="product-card-font fs-6 text-center">Order Summary</h3>
            </p>
            <div class="container overflow-auto" style="height:150px;">
            
            <!-- Table of Ordered Items -->
                <table class="table table-borderless">
                    <?php foreach ($items as $item) : ?>
                        <!-- Calculate and display each item -->
                        <?php $total += $item["Price"]; ?>
                        <tr>
                            <td>
                                <p class="clearMP"><?php echo $item["Name"]; ?>
                                    <span class="product-card-font fs-6">X<?php echo $item["Quantity"]; ?></span></p>
                            </td>
                            <td>
                                <p class="clearMP">&euro;<?php echo number_format($item["Price"], 2, '.', ','); ?></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <!-- Total Price and Action Buttons -->
            <table class="table table-borderless text-center">
                <tr class="border-top">
                    <th class="py-2">
                        <p>
                            Total
                        </p>
                    </th>
                    <td class="py-2">
                        <p class="text-danger product-card-font fs-6">
                            &euro;<?php echo number_format($total, 2, '.', ','); ?>
                        </p>
                    </td>
                </tr>
            </table>

            <!-- Action Buttons -->
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Return home button -->
                    <button onclick="document.location='index.php'" class="btn btn-danger rounded-0"
                        style="width: 190px;">
                        Home
                    </button>
                    <!-- Check my order button (visible only if the user is logged in) -->
                    <?php if (isset($_SESSION['USER'])):?>
                    <button onclick="navigateToOrders()" class="btn btn-danger rounded-0" style="width: 190px;">
                        Check my order
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>