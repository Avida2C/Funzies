<h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
<div class="container">
    <div class="row justify-content-between">
        <!-- Product cards -->
        <?php 
        // Assuming you might have an array of products in the future
        // For now, we're simulating with a static loop as you've done
        $wishlistProducts = range(1, 6); // This is just a placeholder

        foreach ($wishlistProducts as $product) {
            // Include individual product card for the wishlist
            // Using require to make sure the file is essential for the script to continue
            require 'include/product-card-wl.php';
        }
        ?>
    </div>
</div>