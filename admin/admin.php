<?php require '../functions.php'; ?>
<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <!-- Main Content Area -->
    <div class="row justify-content-center shadow-sm bg-white">
        <div class="col-6" style="height:85vh;">
            <center>
                <img class="my-4 w-100" src="../img/you-shall-not-pass.gif" alt="">
                <!-- Image Display -->
            </center>

            <!-- Login Form -->
            <form class="form" method="post">
                <!-- Form setup for login details -->
                <h1>Log In</h1>

                <!-- Email Input -->
                <label for="email-input">Email address: <span class="text-danger">*</span></label>
                <input class="w-100 p-1" type="email" name="email" id="email-input" required autocomplete="email">

                <!-- Password Input -->
                <label class="mt-2" for="password-input">Password: <span class="text-danger">*</span></label>
                <input class="w-100 p-1" type="password" name="password" id="password-input" required
                    autocomplete="current-password">

                <!-- Login Button -->
                <a href="admin-logged-in.php" class="w-100 my-3 btn btn-primary">Log In</a>
            </form>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>