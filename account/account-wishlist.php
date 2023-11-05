<h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
<div class="container">
    <div class="row justify-content-between">
        <!-- Product cards -->
        <?php 
        $wishlistProducts = range(1, 6);
        foreach ($wishlistProducts as $product) {
            // Include individual product card for the wishlist
            include 'include/product-card-wl.php';
        }
        ?>
    </div>
</div>