<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';

$product = [];
$isLoggedIn = false;

// Check if a product ID is provided and fetch its details from the database.
if(isset($_GET['productID']) && !empty($_GET['productID'])) {
    $product = GetProductByID($con, $_GET['productID']);
}
// Handle POST requests for adding products to cart.
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Adding a product to the cart.
    if(isset($_POST['addProductToCart'])) {
        $cartItems = [];
        $existingProd = null;
        $updated = false;
        if(isset($_SESSION['CART_ITEMS'])) {
            $cartItems = $_SESSION['CART_ITEMS'];
        }
        // Check if the product already exists in the cart and update its quantity.
        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value) {
                if($cartItems[$key]['ID'] == $product['ID']) {
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
        // If the product isn't in the cart, add it.
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
        // Adding or removing a product from the wishlist.
    } else if(isset($_POST['addProductToWishlist'])) {
        createWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    } else if(isset($_POST['deleteProductFromWishlist'])) {
        deleteWishlistItem($con, $product['ID'], $_SESSION['USER']["ID"]);
    }
}

// Check if the user is logged in and fetch their wishlist status for the product.
if(isset($_SESSION['USER'])) {
    $isLoggedIn = true;
    $wishlist = GetWishlistItem($con, $_SESSION['USER']['ID'], $product['ID']);
    $isInWishlist = $wishlist->num_rows > 0;
}?>

<?php 
$pagetitle = $product['Name'];
require_once 'include/header.php';
require_once 'include/navbar.php';
?>

<!-- Breadcrumb for Navigation -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-3 div-spacing-mb">
    <!-- Breadcrumb Structure -->
    <div class="row">
        <div class="col">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none text-danger"
                            href="shop.php?category=<?php echo $product["categoryID"] ?>">
                            <!-- Get Category Name -->
                            <?php echo $product["categoryName"]?>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $product['Name'] ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Product Details Section -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 border-0 shadow-sm rounded">
    <div class="row justify-content-center">
        <!-- Product Image and Details -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <img src="<?php echo $product['Image'] ?>" class="img-thumbnail border-0 rounded-0"
                alt="<?php echo $product['Name'] ?>">
        </div>
        <!-- Product details -->
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 border-0 rounded p-4">
            <!-- Badge In stock-->
            <?php if($product['Stock'] > 0) : ?>
            <p class="text-end"><span class="badge rounded-pill bg-success">In Stock</span></p>
            <?php else : ?>
            <p class="text-end"><span class="badge rounded-pill bg-danger">Out of Stock</span></p>
            <?php endif; ?>
            <!-- Brand -->
            <a href="#" class="text-decoration-none">
                <h5 class="fs-6 text-muted"><?php echo $product['brandName'] ?></h5>
            </a>
            <!-- Title of Product -->
            <h3 class="fs-5"><?php echo $product['Name'] ?></h3>
            <!-- Price -->
            <p class="text-danger mb-5 product-card-price"> &euro;<?php echo $product['Price'] ?></p>
            <!-- Description -->
            <p class="text-truncate mb-4"><?php echo $product['Description'] ?></p>
            <!-- Button Add to cart -->
            <form method="POST">
                <input type="hidden" name="addProdID" value="<?php echo $product["ID"]; ?>">
                <input type="hidden" name="addProdKey" value="<?php echo $key; ?>">
                <div class="row">
                    <div class="col-9 no-gap">
                        <?php if($product["Stock"] > 0) : ?>

                        <input type="submit" name="addProductToCart" class="btn btn-success rounded-0 w-100"
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
                        <button type="submit" name="addProductToWishlist" value="addProductToWishlist"
                            class="btn btn-danger rounded-0">
                            <ion-icon name="heart-outline"></ion-icon>
                        </button>
                        <?php else: ?>
                        <!-- Remove from wishlist -->
                        <button type="submit" name="deleteProductFromWishlist" value="deleteProductFromWishlist"
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
</div>

<!-- Tabs for Description, Reviews, and Review Submission -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-4 shadow-sm">
    <div class="row">
        <!-- Navigation Pills for Tabs -->
        <div class="nav nav-pills mb-3 bg-danger m-0 p-1" id="pills-tab" role="tablist">
            <!-- Description Tab -->
            <li class="nav-item" role="presentation">
                <button class="btn btn-danger rounded-0 active" id="pills-desc-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc"
                    aria-selected="true">Description</button>
            </li>
        </div>
        <!-- in Tabs Content -->
        <div class="tab-content" id="pills-tabContent">
            <!-- Description -->
            <div class="tab-overflow tab-pane fade show active h-100 p-2" id="pills-desc" role="tabpanel"
                aria-labelledby="pills-home-tab" tabindex="0">
                <!-- Info goes here -->
                <p>
                    <?php echo $product['Description'] ?>
                </p>
            </div>
        </div>
    </div>
</div>



<?php  
require_once 'include/footer.php';
// End of Body //
?>