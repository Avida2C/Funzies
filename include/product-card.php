
<?php 
require 'connection.php';

$isLoggedIn = false;
if(isset($_GET['productID']) && !empty($_GET['productID'])) {
    $product = GetProductByID($con, $_GET['productID']);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(!empty($_POST['addProductCardToCart']) && $_POST['addProdKey'] == $key) {
        $cartItems = [];
        $existingProd = null;
        $updated = false;
        if(isset($_SESSION['CART_ITEMS'])) {
            $cartItems = $_SESSION['CART_ITEMS'];
        }
        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value) {
                if($cartItems[$key]['ID']== $product['ID']) {
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
            $prodToAdd["ID"] = $product["ID"];
            $prodToAdd["Name"] = $product["Name"];
            $prodToAdd["Price"] = $product["Price"];
            $prodToAdd["Image"] = $product["Image"];
            $prodToAdd["Stock"] = $product["Stock"];
            $prodToAdd["Quantity"] = 1;
            array_push($cartItems, $prodToAdd);

            $_SESSION['CART_ITEMS'] = $cartItems;
        }
    } else if(isset($_POST['addProductCardToWishlist']) && $_POST['addProdID'] == $product["ID"]) {
        createWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    } else if(isset($_POST['deleteProductCardFromWishlist']) && $_POST['addProdID'] == $product["ID"]) {
        deleteWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    }
}

if(isset($_SESSION['USER'])) {
    $isLoggedIn = true;
    $wishlist = GetWishlistItem($con, $_SESSION['USER']['ID'], $product['ID']);
    $isInWishlist = $wishlist->num_rows > 0;
}

?>
<div class="card shadow-sm rounded-0 border-0 product-card mb-2">
    <!-- Product Card Container -->
    <a href="product-page.php?productID=<?php echo $product['ID'] ?>">
        <!-- Product Image -->
        <img class="card-img-top object-fit-cover" src='<?php echo $product["Image"] ?>' alt="<?php echo $product["Name"] ?>">
    </a>
    <div class="card-body">
        <!-- Brand Name -->
        <a href="#" class="text-decoration-none">
            <p class="card-text text-muted fs-6"><?php echo $product["brandName"] ?></p>
        </a>
        <!-- Product Title -->
        <a href="product-page.php" class="text-decoration-none">
            <h5 class="card-title text-black fs-6 mb-4"><?php echo $product["Name"] ?></h5>
        </a>
        <!-- Product Price -->
        <p class="text-danger product-card-font"> &euro;<?php echo number_format((float) $product["Price"], 2, '.', ''); ?></p>
        <!-- Add to Cart Button -->
        <form method="POST">
            <input type="hidden" name="addProdID" value="<?php echo $product["ID"] ?>">
            <input type="hidden" name="addProdKey" value="<?php echo $key ?>">
            <?php if($product["Stock"] > 0) : ?>
                <input type="submit" name="addProductCardToCart" class="btn btn-danger mb-0 mt-1 rounded-0 w-100 p-0 " value="Add To Cart"></input>
            <?php else : ?>
                <input type="button" name="addToCart" class="btn btn-secondary rounded-0 mb-0 w-100 mt-1 p-0 " value="Out of Stock" ?>
            <?php endif; ?>
        </form>
        <div class="row m-0 p-0">
            <div class="col m-0 p-0">
                    <!-- Add to Wishlist Link -->
                    <?php if($isLoggedIn) : ?>
                    <!-- Button Add to wishlist -->
                        <?php if(!$isInWishlist) : ?>
                            <form method="post">
                                <input type="hidden" name="addProductCardToWishlist" value="addProductToWishlist">
                                <input type="hidden" name="addProdID" value="<?php echo $product["ID"] ?>">
                                <button type="submit" class="btn btn-success rounded-0 w-100 m-0 mt-1 p-0 text-decoration-none">
                                    Add to wishlist
                                </button>
                            </form>
                        <?php else : ?>
                            <form method="post">
                                <input type="hidden" name="deleteProductCardFromWishlist" value="deleteProductFromWishlist">
                                <input type="hidden" name="addProdID" value="<?php echo $product["ID"] ?>">
                                <button type="submit" class="btn btn-success rounded-0 m-0 mt-1 w-100 p-0 text-decoration-none">
                                    Remove from wishlist
                                </button>
                            </form>
                        <?php endif; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</div>