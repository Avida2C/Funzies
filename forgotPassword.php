<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';

require_once 'include/navbar.php';


$passwordUpdated = false;
$error = false;
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['resetPassword'])) {
    $userEmail = $_POST['email'];
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 15; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    $message = "You are receiving this email as you have requested a new password. <br><br> Your new password is <b>$randomString</b> <br><br>Please login to your account and change your password.";
    $sent = resetPasswordMail($userEmail, "Funzies", "Password reset", $message);
    if($sent) {
        $passwordUpdated = resetUserPassword($con, $userEmail, sha1($randomString));
    } else { $error = true; }
}

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
                <button name="resetPassword" type="submit" class="btn btn-danger rounded-0 w-100 mt-3">Reset Password</button>
                <?php if ($passwordUpdated) : ?>
                    <h3>Your password has been reset, please check your email inbox</h3>
                <?php endif; ?>
                <?php if ($error) : ?>
                    <h3>There was an error resetting your password, please try again</h3>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>