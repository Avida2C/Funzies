<?php 
require 'connection.php';

$isLoggedIn = false;
// Check if product ID is provided in the URL and fetch product details.
if(isset($_GET['productID']) && !empty($_GET['productID'])) {
    $product = GetProductByID($con, $_GET['productID']);
}

// Handle POST requests for cart and wishlist updates.
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['addProductCardToWishlist']) && $_POST['addProdKey'] == $key) {
        createWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    } else if(isset($_POST['deleteProductCardFromWishlist']) && $_POST['addProdKey'] == $key) {
        deleteWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    }
    // If 'Add to Cart' is triggered.
    elseif(!empty($_POST['addProductCardToCart']) && $_POST['addProdKey'] == $key) {
        $cartItems = [];
        $existingProd = null;
        $updated = false;
        // Check if there are existing cart items in the session.
        if(isset($_SESSION['CART_ITEMS'])) {
            $cartItems = $_SESSION['CART_ITEMS'];
        }
        // Loop through cart items to check if the product is already added.
        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value) {
                // If product is found, increase the quantity.
                if($cartItems[$key]['ID']== $product['ID']) {
                    $newQuantity = $cartItems[$key]['Quantity'] + 1;
                    // Ensure the new quantity does not exceed stock.
                    if($newQuantity <= $cartItems[$key]['Stock']) {
                        $cartItems[$key]['Quantity'] = $newQuantity;
                        $_SESSION['CART_ITEMS'] = $cartItems;
                    }
                    $updated = true;
                    break;
                }
            }
        }
        // If the product is not already in the cart, add it.
        if(!$updated) {
            $prodToAdd["ID"] = $product["ID"];
            $prodToAdd["Name"] = $product["Name"];
            $prodToAdd["Price"] = $product["Price"];
            $prodToAdd["Image"] = $product["Image"];
            $prodToAdd["Stock"] = $product["Stock"];
            $prodToAdd["Quantity"] = 1;
            array_push($cartItems, $prodToAdd);

            $_SESSION['CART_ITEMS'] = $cartItems;
        }
        // If 'Add to Wishlist' or 'Remove from Wishlist' is triggered.
    } 
}

// Check if a user is logged in and fetch wishlist status.
if(isset($_SESSION['USER'])) {
    $isLoggedIn = true;
    $wishlist = GetWishlistItem($con, $_SESSION['USER']['ID'], $product['ID']);
    $isInWishlist = $wishlist->num_rows > 0;
}?>


<div class=" bg-white pt-2 shadow-sm rounded border-0 product-card my-2">
    <!-- Product Card Container -->
    <a href="product-page.php?productID=<?php echo $product['ID'] ?>">
        <!-- Product Image -->
        <img class="mb-2" src='<?php echo $product["Image"] ?>' alt="<?php echo $product["Name"] ?>">
    </a>
    <div>
        <!-- Brand Name -->
        <a href="#" class="text-decoration-none">
            <p class="card-text text-muted"><?php echo $product["brandName"] ?></p>
        </a>
        <!-- Product Title -->
        <a href="product-page.php" class="text-decoration-none">
            <h5 class="product-card-name"><?php echo $product["Name"] ?></h5>
        </a>
        <!-- Product Price -->
        <p class="text-danger product-card-price">
            &euro;<?php echo number_format((float) $product["Price"], 2, '.', ''); ?>
        </p>
        <!-- Add to Cart Button -->


        <form method="POST">
            <input type="hidden" name="addProdID" value="<?php echo $product["ID"]; ?>">
            <input type="hidden" name="addProdKey" value="<?php echo $key; ?>">
            <div class="row">
                <div class="col-9 no-gap">
                    <?php if($product["Stock"] > 0) : ?>

                    <input type="submit" name="addProductCardToCart" class="btn btn-success rounded-0 w-100"
                        value="Add To Cart">

                    <?php else: ?>

                    <input type="button" name="addToCart" class="btn btn-secondary rounded-0 w-100"
                        value="Out of Stock">

                    <?php endif; ?>
                </div>
                <?php if($isLoggedIn) : ?>
                <div class="col-3 no-gap wishlist-btn">
                    <?php if(!$isInWishlist) : ?>
                    <!-- If product does not exist in wishlist, add it -->
                    <button type="submit" name="addProductCardToWishlist" value="addProductToWishlist"
                        class="btn btn-danger rounded-0">
                        <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <?php else: ?>
                    <!-- Remove from wishlist -->
                    <button type="submit" name="deleteProductCardFromWishlist" value="deleteProductFromWishlist"
                        class="btn btn-danger rounded-0">
                        <ion-icon name="heart"></ion-icon>
                    </button>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
