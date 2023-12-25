<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(!empty($_POST['addProductWishlistToCart']) && isset($_POST['prodID'])) {
        $cartItems = [];
        $existingProd = null;
        $updated = false;
        if(isset($_SESSION['CART_ITEMS'])) {
            $cartItems = $_SESSION['CART_ITEMS'];
        }
        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value) {
                if($cartItems[$key]['ID']== $_POST['prodID']) {
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

        if(!$updated) {
            $product = GetProductByID($con, $_POST['prodID']);
            $prodToAdd["ID"] = $product["ID"];
            $prodToAdd["Name"] = $product["Name"];
            $prodToAdd["Price"] = $product["Price"];
            $prodToAdd["Image"] = $product["Image"];
            $prodToAdd["Stock"] = $product["Stock"];
            $prodToAdd["Quantity"] = 1;
            array_push($cartItems, $prodToAdd);

            $_SESSION['CART_ITEMS'] = $cartItems;
            deleteWishlistItem($con, $_POST['prodID'], $_SESSION['USER']["ID"]);
            echo('<script type="text/javascript"> window.location.href="account.php#accountwishlist" </script> ");');
        }
    } else if(isset($_POST['deleteProductCardFromWishlist']) && isset($_POST['prodID'])) {
        deleteWishlistItem($con, $_POST['prodID'], $_SESSION['USER']["ID"]);
        echo('<script type="text/javascript"> window.location.href="account.php#accountwishlist" </script>"');
    }
}

$wishlistItems = GetWishlistByUser($con, $user["ID"]);
$wishlistProducts = [];
if (!empty($wishlistItems)) {
    foreach ($wishlistItems as $wishlistProduct) {
        $prod = GetProductByID($con, $wishlistProduct["product"]);
        array_push($wishlistProducts, $prod);
    }
}

function includeWishList($product){
    include 'include/product-card-wl.php';
}



?>

<h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
<!-- Section Heading -->

<div class="container">
    <div class="row justify-content-between">
        <!-- Product cards -->
        <?php 
        if(empty($wishlistProducts)) {
            echo('<h2>You have no products on your wish list</h2>');
        } else {
            foreach ($wishlistProducts as $product) {
                // Includes a product card 
                includeWishList($product);
            }
        }
        ?>
    </div>
</div>