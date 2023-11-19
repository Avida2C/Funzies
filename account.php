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
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center me-4 accountOptions">
            <div class="list-group list-group-flush" id="accountOptions">
                <h3 class="product-card-font fs-5 my-1 border-bottom border-danger border-2 pb-3">Account
                </h3>
                <a class="list-group-item list-group-item-action active" data-bs-toggle="collapse" href="#overview"
                    role="button" aria-expanded="false">Profile Overview</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#details"
                    role="button" aria-expanded="false">Account Details</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#addresses"
                    role="button" aria-expanded="false">Addresses</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#orders" role="button"
                    aria-expanded="false">Orders</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#wishlist"
                    role="button" aria-expanded="false">Wishlist</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#reviews"
                    role="button" aria-expanded="false">Reviews</a>
                <a class="list-group-item list-group-item-action" href="#signout">Sign Out</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 account-sections" id="account-sections">
            <div class="col collapse fade show" data-bs-parent="#account-sections" id="overview">
                <?php require 'account/account-overview.php'?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="details">
                <?php require 'account/account-details.php'; ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="addresses">
                <?php require 'account/account-addresses.php'; ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="orders">
                <?php require 'account/account-orders.php'; ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="wishlist">
                <?php require 'account/account-wishlist.php'; ?>
            </div>
            <div class="col collapse fade" data-bs-parent="#account-sections" id="reviews">
                <?php require 'account/account-reviews.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
