<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<!-- Password Reset Section -->
<div class="container py-4 col-sm-12 col-md-12 col-lg-12 col-xl-10">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 my-4">
            <div class="row">
                <!-- Description Text -->
                <div id="forgotPassText" class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <p class="pb-3">
                        Lost your precious password key, adventurer? No worries! Enter your email below, and we'll
                        dispatch a special code – like a treasure map to your inbox. Follow the clues, enter the code,
                        and unlock the vault to your account's hidden treasures!
                    </p>
                </div>
                <div id="iconDiamond" class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center">
                    <ion-icon class="text-muted" style="font-size:120px;" name="diamond"></ion-icon>
                </div>
            </div>
            <!-- Send Verification Code Form -->
            <form method="post">
                <label for="email">Email Address<span class="text-danger">*</span>:</label>
                <input type="email" class="w-100 p-1" name="email" placeholder="Enter email" required
                    autocomplete="email">
                <button name="verificationCode" class="btn btn-danger rounded-0 w-100 mt-3">Send Verification
                    Code</button>
            </form>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>