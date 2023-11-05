<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<!-- Wishlist -->
<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-my">
    <div class="row justify-content-evenly">
        <h3 class="fs-5 mb-4">Wishlist</h3>
        <!-- Product cards -->
        <?php 
        for ($i = 0; $i < 5; $i++) {
            // Include individual product card for the wishlist
            include 'include/product-card-wl.php';
        }
        ?>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
