<h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
<!-- Section Heading -->

<div class="container">
    <div class="row justify-content-between">
        <!-- Product cards -->
        <?php 
        // include product-card-wl x6
        $wishlistProducts = range(1, 6);
        foreach ($wishlistProducts as $product) {
            // Includes a product card 
            include 'include/product-card-wl.php';
        }
        ?>
    </div>
</div>