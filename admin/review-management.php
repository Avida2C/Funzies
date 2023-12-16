<?php require '../functions.php'; 
require '../dbfunctions.php'; 

$reviewStatuses = GetReviewStatus($con);
$reviews = GetReviews($con);
?>
<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-sm-12 col-md-12 col-lg-10 col-xl-10">
    <div class="row justify-content-between">
        <!-- Main Content Area -->
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 p-4 shadow-sm bg-white">
            <!-- Reviews Management Section -->
            <h4>Reviews Status Management</h4>
            <button class="btn btn-success mb-3" type="button">Add New Review Status</button>
            <!-- PHP To gather the following review details from the database -->
            <table class="table">
                <!-- Reviews Table: Displays review details with action options -->
                <thead class="thead-dark">
                    <!-- Table Head: Column titles -->
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reviewStatuses as $reviewStatus):
                            ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $reviewStatus["ID"]; ?></td>
                        <td><?php echo $reviewStatus["Status"]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <h4>Reviews Management</h4>
            <!-- PHP To gather the following review details from the database -->
            <table class="table">
                <!-- Reviews Table: Displays review details with action options -->
                <thead class="thead-dark">
                    <!-- Table Head: Column titles -->
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($reviews as $review):
                            ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $review["ID"]; ?></td>
                        <td><?php echo $review["Content"]; ?></td>
                        <td><?php echo $review["Product"]; ?></td>
                        <td><?php echo $review["Rating"]; ?></td>
                        <td><?php echo $review["statusReview"]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>