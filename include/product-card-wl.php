<div class="shadow-sm rounded-0 border-0 product-card my-2">
    <!-- Product Card Container -->
    <a href="product-page.php">
        <!-- Product Image: Links to the product detail page -->
        <img class="mb-2" src="<?php echo $product['Image']; ?>"
            alt="<?php echo $product['Name']; ?>">
    </a>

    <div class="card-body">
        <a href="#" class="text-decoration-none">
            <!-- Brand Name: Links to a filter or search by this brand -->
            <p class="card-text text-muted"><?php echo $product['brandName']; ?></p>
        </a>
        <!-- Product Title: Links to the product detail page -->
        <a href="product-page.php" class="text-decoration-none ">
            <h5 class="product-card-name"><?php echo $product['Name']; ?></h5>
        </a>
        <!-- Product Price: Formatted to display with two decimal places -->
        <p class="text-danger product-card-price"> &euro;<?php echo number_format($product['Price'], 2, '.', ','); ?></p>

        <!-- Add to Cart Button: Submits a form to add the product to the shopping cart -->
        <form method="POST">

            <input type="hidden" name="addProductWishlistToCart" value="addProductWishlistToCart">
            <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
            <div class="row">
                <div class="col-9 no-gap wishlist-btn">
                    <button class="btn btn-success rounded-0">Move To Cart</button>
                </div>
                <!-- Remove from Wishlist: Submits a form to remove the product from the wishlist -->
                <input type="hidden" name="deleteProductCardFromWishlist" value="deleteProductCardFromWishlist">
                <input type="hidden" name="prodID" value="<?php echo $product["ID"]; ?>">
                <div class="col-3 no-gap wishlist-btn">
                    <button type="submit" class="btn btn-danger rounded-0">
                    <ion-icon name="heart"></ion-icon>
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>