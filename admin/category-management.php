<?php require '../functions.php'; 
require '../dbfunctions.php'; 

$categories = GetCategories($con);

?>
<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col p-4 shadow-sm bg-white">
            <h4>Category Management</h4>
            <!-- Category Management Section-->
            <!-- Add Category Button: Triggers form to add a new category -->
            <button class="btn btn-success mb-3" type="button">Add New Category</button>
            <!-- PHP To gather the following category details from the database -->
            <table class="table">
                <thead class="thead-dark">
                    <!-- Table Head: Columns titles -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($categories as $category):
                        ?>
                        <!-- Table Body: Each row shows user data with options to edit or delete -->
                        <!-- User -->
                        <tr>
                            <td><?php echo $category["ID"]; ?></td>
                            <td><?php echo $category["Name"]; ?></td>
                            <td><?php echo $category["Details"]; ?></td>
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