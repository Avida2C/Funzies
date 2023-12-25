<div class="card shadow-sm rounded-0 border-0 product-card mb-2">
    <!-- Product Card Container -->
    <a href="product-page.php">
        <!-- Product Image -->
        <img class="card-img-top object-fit-cover" src="<?php echo $product['Image']; ?>" alt="<?php echo $product['Name']; ?>">
    </a>

    <div class="card-body">
        <!-- Brand Name -->
        <a href="#" class="text-decoration-none">
            <p class="card-text text-muted fs-6"><?php echo $product['brandName']; ?></p>
        </a>
        <!-- Product Title -->
        <a href="product-page.php" class="text-decoration-none ">
            <h5 class="card-title text-black fs-6 mb-4"><?php echo $product['Name']; ?></h5>
        </a>
        <!-- Product Price -->
        <p class="text-danger product-card-font"> &euro;<?php echo number_format($product['Price'], 2, '.', ','); ?></p>
        <!-- Add to Cart Button -->
        <form method="POST">
            <input type="hidden" name="addProductWishlistToCart" value="addProductWishlistToCart">
            <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
            <button class="btn btn-danger rounded-0 w-100 mb-1">Move To Cart</button>
        </form>
        <!-- Remove from Wishlist -->
        <div class="row m-0 p-0">
            <div class="col m-0 p-0">
                <p class="text-end">
                    <form method="POST">
                        <input type="hidden" name="deleteProductCardFromWishlist" value="deleteProductCardFromWishlist">
                        <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
                        <button type="submit" class="text-muted text-decoration-none">
                            Remove from wishlist
                        </button>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>