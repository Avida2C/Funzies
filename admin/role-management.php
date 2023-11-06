<?php require '../functions.php'; ?>

<?php require_once 'include/header.php'; 
require_once 'include/navbar.php';?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php';?>

        <div class="col p-4 shadow-sm bg-white">
            <h2>Role Management</h2>
            <button class="btn btn-success mb-3">Create New Role</button>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Role</th>
                        <th>Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Employee</td>
                        <td>Can approve reviews, manage products, and handle orders.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <!-- Here you can add further actions if needed -->
                        </td>
                    </tr>
                    <tr>
                        <td>Customer</td>
                        <td>Can purchase products and review products.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>Has full system access and can manage all aspects of the platform.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; ?>