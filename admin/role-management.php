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
            <!-- Role Management Section -->
            <h2>Role Management</h2>
            <!-- New Role Creation: Button to trigger form for adding new roles -->
            <button class="btn btn-success mb-3">Create New Role</button>
            <!-- PHP To gather the following role details from the database -->
            <table class="table">
                <!-- Role Data Table -->
                <thead class="thead-dark">
                    <tr>
                        <th>Role</th>
                        <th>Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Body: Each row represents a role with edit and delete options -->
                    <!-- Role -->
                    <tr>
                        <td>Employee</td>
                        <td>Can approve reviews, manage products, and handle orders.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Role -->
                    <tr>
                        <td>Customer</td>
                        <td>Can purchase products and review products.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Role -->
                    <tr>
                        <td>Admin</td>
                        <td>Has full system access and can manage all aspects of the platform.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Roles end -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>