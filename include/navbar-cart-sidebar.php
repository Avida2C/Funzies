<?php 
// Check if the request is a POST and if the 'deleteCartItem' button was pressed.
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['deleteCartItem'])) {
    // Loop through the cart items in the session.
    foreach($_SESSION['CART_ITEMS'] as $key => $itm) {
        // Check if the current item is the one to be deleted.
        if ($itm['ID'] == $_POST['deleteCartItem']) {
            // Remove the item from the cart.
            unset($_SESSION['CART_ITEMS'][$key]);
        }
    }
}

$cartItems = null;
$subtotal = 0;
$delivery = 0;
$total = 0;

// Check if there are items in the cart.
if(isset($_SESSION['CART_ITEMS'])) {
    $cartItems = $_SESSION['CART_ITEMS'];
    // Calculate the subtotal by looping through each item and adding its cost.
    foreach($cartItems as $key => $item) {
        $subtotal += $item['Price'] * $item['Quantity'];
    }
    // Set a fixed delivery fee.
    $delivery = 5;
    // Calculate the total cost.
    $total = $subtotal + $delivery;
}

function includeItem($item)
{
    include 'include/product-card-slider.php';
}?>

<div class="offcanvas offcanvas-end h-100" tabindex="-1" id="ShoppingCart" aria-labelledby="ShoppingCartLabel">
    <!-- Shopping Cart Panel -->
    <div class="offcanvas-header border-bottom border-3 border-danger">
        <h5 class="offcanvas-title" id="ShoppingCartLabel">Shopping Cart</h5>
        <!-- Close Button -->
        <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <!-- Content -->
    <div class="offcanvas-body w-100 h-100">
        <div class="row h-100">
            <div class="col-12 overflow-auto" style="height: 85%;">
                <!-- Product Cards Section -->
                <?php 
                if($cartItems) {
                    // Loop through each item and include its product card.
                    foreach ($cartItems as $key => $item) {
                        includeItem($item);
                    }
                }?>
            </div>
            <!-- Cart Summary and View Cart Button -->
            <div class="col align-self-end">
                <div class="row d-flex justify-content-between py-2 h-100">
                    <div class="col">
                        <h3 class="fs-6 text-start mt-2">Subtotal:</h3>
                    </div>
                    <div class="col">
                        <!-- Subtotal -->
                        <!-- Display the subtotal formatted to two decimal places -->
                        <p class="product-card-font subTotalPrice">
                            &euro;<?php echo number_format((float) $subtotal, 2, '.', '');?></p>
                    </div>
                </div>
                <!-- Button to view the full cart -->
                <button onclick="document.location='viewcart.php'" class="btn btn-danger rounded-0 w-100">View
                    Cart</button>
            </div>
        </div>
    </div>
</div>
