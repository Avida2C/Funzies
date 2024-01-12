<?php

/**
 * Handles the POST request for moving items to the cart or removing items from the wishlist.
 *
 * @param array $_SERVER
 * @return void
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if the 'Add to Cart' button is clicked and a product ID is provided.
    if(isset($_POST['movetocart']) && isset($_POST['prodID'])) {
        $cartItems = [];
        $existingProd = null;
        $updated = false;
        // Load existing cart items from the session if they exist.
        if(isset($_SESSION['CART_ITEMS'])) {
            $cartItems = $_SESSION['CART_ITEMS'];
        }
        // Check if the product is already in the cart.
        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value) {
                if($cartItems[$key]['ID']== $_POST['prodID']) {
                    // Increment the quantity if the product is already in the cart.
                    $newQuantity = $cartItems[$key]['Quantity'] + 1;
                    if($newQuantity <= $cartItems[$key]['Stock']) {
                        $cartItems[$key]['Quantity'] = $newQuantity;
                        $_SESSION['CART_ITEMS'] = $cartItems;
                    }
                    $updated = true;
                    break;
                }
            }
        }
        // If the product is not in the cart, add it.
        if(!$updated) {
            $product = GetProductByID($con, $_POST['prodID']);
            $prodToAdd["ID"] = $product["ID"];
            $prodToAdd["Name"] = $product["Name"];
            $prodToAdd["Price"] = $product["Price"];
            $prodToAdd["Image"] = $product["Image"];
            $prodToAdd["Stock"] = $product["Stock"];
            $prodToAdd["Quantity"] = 1;
            array_push($cartItems, $prodToAdd);
            
            // Update the session with the new cart items.
            $_SESSION['CART_ITEMS'] = $cartItems;
            // Remove the item from the wishlist.
            deleteWishlistItem($con, $_POST['prodID'], $_SESSION['USER']["ID"]);
            // Redirect to the wishlist section of the account page.
            echo('<script type="text/javascript"> window.location.href="account.php#accountwishlist" </script> ");');
        }
        // Check if the 'Remove from Wishlist' button is clicked and a product ID is provided.
    } else if(isset($_POST['removefromwishlist']) && isset($_POST['prodID'])) {
        // Remove the item from the wishlist.
        deleteWishlistItem($con, $_POST['prodID'], $_SESSION['USER']["ID"]);
        // Redirect to the wishlist section of the account page.
        echo('<script type="text/javascript"> window.location.href="account.php#accountwishlist" </script>');
    }
}

// Retrieve wishlist items for the user.
$wishlistItems = GetWishlistByUser($con, $user["ID"]);
$wishlistProducts = [];


/**
 * If the wishlistItems array is not empty, iterate over each item and retrieve the corresponding product using the GetProductByID function.
 * Add the retrieved product to the wishlistProducts array.
 *
 * @param array $wishlistItems
 * @param mysqli $con
 * @return array
 */
if (!empty($wishlistItems)) {
    foreach ($wishlistItems as $wishlistProduct) {
        $prod = GetProductByID($con, $wishlistProduct["product"]);
        array_push($wishlistProducts, $prod);
    }
}

// Function to include the wishlist product card.
function includeWishList($product)
{
    include 'include/product-card-wl.php';
}?>

<h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
<!-- Section Heading -->
<div class="container">
    <div class="row justify-content-start">
        <!-- Product cards -->
        <?php 
        if(empty($wishlistProducts)) {
             // Display a message if the wishlist is empty.
            echo('<h2>You have no products on your wish list</h2>');
        } 
        else {
            foreach ($wishlistProducts as $product) {
                // Include a product card for each item in the wishlist.
                includeWishList($product);
            }
        }?>
    </div>
</div>
