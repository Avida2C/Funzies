<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-my p-1">
    <div class="row">
        <!-- Sidebar -->
        <?php require_once 'account/account-sidebar.php'; // Sidebar for account navigation ?>

        <!-- Main Content -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 account-sections" id="account-sections">
            <div class="col collapse fade show" data-bs-parent="#account-sections" id="overview">
                <?php require 'account/account-overview.php' // Includes the account overview section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="details">
                <?php require 'account/account-details.php'; // Includes the account details section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="addresses">
                <?php require 'account/account-addresses.php'; // Includes the addresses management section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="orders">
                <?php require 'account/account-orders.php'; // Includes the orders history section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="wishlist">
                <?php require 'account/account-wishlist.php'; // Includes the wishlist section ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="reviews">
                <?php require 'account/account-reviews.php'; // Includes the reviews section ?>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>