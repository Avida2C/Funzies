<div class="card shadow-sm rounded-0 border-0 product-card mb-2">
    <!-- Product Card Container -->
    <a href="product-page.php">
        <!-- Product Image: Links to the product detail page -->
        <img class="card-img-top object-fit-cover" src="<?php echo $product['Image']; ?>"
            alt="<?php echo $product['Name']; ?>">
    </a>

    <div class="card-body">
        <a href="#" class="text-decoration-none">
            <!-- Brand Name: Links to a filter or search by this brand -->
            <p class="card-text text-muted fs-6"><?php echo $product['brandName']; ?></p>
        </a>
        <!-- Product Title: Links to the product detail page -->
        <a href="product-page.php" class="text-decoration-none ">
            <h5 class="card-title text-black fs-6 mb-4"><?php echo $product['Name']; ?></h5>
        </a>
        <!-- Product Price: Formatted to display with two decimal places -->
        <p class="text-danger product-card-font"> &euro;<?php echo number_format($product['Price'], 2, '.', ','); ?></p>

        <!-- Add to Cart Button: Submits a form to add the product to the shopping cart -->
        <form method="POST">
            <input type="hidden" name="addProductWishlistToCart" value="addProductWishlistToCart">
            <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
            <button class="btn btn-danger rounded-0 w-100 mb-1">Move To Cart</button>
        </form>
        <!-- Remove from Wishlist: Submits a form to remove the product from the wishlist -->
        <div class="row m-0 p-0">
            <div class="col m-0 p-0">
                    <form method="POST">
                        <input type="hidden" name="deleteProductCardFromWishlist" value="deleteProductCardFromWishlist">
                        <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
                        <button type="submit" class="btn btn-success p-0 rounded-0 w-100 text-white">
                            Remove from wishlist
                        </button>
                    </form>
            </div>
        </div>
    </div>
</div>
