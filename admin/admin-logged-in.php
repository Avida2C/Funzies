<?php require '../functions.php'; ?>
<!-- Functions Include: Importing common functions used across the site -->

<?php 
require_once 'include/header.php'; // Contains the HTML header information
require_once 'include/navbar.php'; // Contains the navigation bar
?>

<div class="container-fluid col-10">
    <!-- Main Content Area -->
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>


        <div class="col p-4 shadow-sm bg-white">
            <!-- Content Section-->
            <!-- The admin's name will be displayed here -->
            <h3>Welcome, NameOfAdmin!</h3>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>