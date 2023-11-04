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
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 p-4 div-spacing-mb div-spacing-mt">
    <div class="row">
        <div class="col">
            <h3 class="fs-5 mb-4">Wishlist</h3>
        </div>
    </div>
    <div class="col">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <?php 
                require 'include/product-card-wl.php'; 
                require 'include/product-card-wl.php'; 
                require 'include/product-card-wl.php'; 
                require 'include/product-card-wl.php'; 
                require 'include/product-card-wl.php'; 
                ?>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>