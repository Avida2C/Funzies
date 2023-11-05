<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>


<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-my">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center me-4">

            <div class="list-group list-group-flush" id="accountOptions">
                <h3 class="product-card-font fs-5  my-1 border-bottom border-danger border-2 pb-3">Account
                </h3>
                <a class="list-group-item list-group-item-action active" data-bs-toggle="collapse" href="#overview"
                    role="button" aria-expanded="false">Profile Overview</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#details"
                    role="button" aria-expanded="false">Account Details</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#password"
                    role="button" aria-expanded="false">Change Password</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#addresses"
                    role="button" aria-expanded="false">Addresses</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#orders" role="button"
                    aria-expanded="false">Orders</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#wishlist"
                    role="button" aria-expanded="false">Wishlist</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#settings"
                    role="button" aria-expanded="false">Settings</a>
                <a class="list-group-item list-group-item-action" href="#signout">Sign Out</a>
                <!-- No collapse for Sign Out -->
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8" id="account-sections">
            <div class="collapse fade show" data-bs-parent="#account-sections" id="overview">
                <h3 class="border-bottom border-2 border-danger pb-2">Profile Overview</h3>
                <p>Your profile overview content goes here.</p>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="details">
                <h3 class="border-bottom border-2 border-danger pb-2">Account Details</h3>
                <p>Your account details content goes here.</p>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="password">
                <h3 class="border-bottom border-2 border-danger pb-2">Change Password</h3>
                <p>Your change password content goes here.</p>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="addresses">
                <h3 class="border-bottom border-2 border-danger pb-2">Addresses</h3>
                <p>Your addresses content goes here.</p>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="orders">
                <h3 class="border-bottom border-2 border-danger pb-2">Orders</h3>
                <p>Your orders content goes here.</p>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="wishlist">
                <h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- Product cards -->
                        <?php 
                    for ($i = 0; $i < 6; $i++) {
                        // Include individual product card for the wishlist
                        include 'include/product-card-wl.php';
                    }
                    ?>
                    </div>
                </div>
                </div>
                <div class="collapse fade" data-bs-parent="#account-sections" id="settings">
                    <h3 class="border-bottom border-2 border-danger pb-2">Settings</h3>
                    <p>Your settings content goes here.</p>
                </div>
                <!-- Sign Out does not have a corresponding section since it might directly sign the user out -->
            </div>
        </div>
    </div>
</div>



<?php  
require_once 'include/footer.php';
// End of Body //
?>