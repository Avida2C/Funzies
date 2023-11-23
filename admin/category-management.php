<?php require '../functions.php'; ?>
<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col p-4 shadow-sm bg-white">
            <h2>Category Management</h2>
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
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Body: Each row represents a Category with edit and delete options -->
                    <!-- Category -->
                    <tr>
                        <td>1</td>
                        <td>Toy</td>
                        <td>Includes a diverse range of play items for young ages.</td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Category -->
                    <tr>
                        <td>2</td>
                        <td>Educational</td>
                        <td>Kits and gadgets specifically for educational purposes.</td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Category -->
                    <tr>
                        <td>3</td>
                        <td>Model</td>
                        <td>Collectable items; such as Figurines, Cars, Ships, etc.</td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Category end-->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>