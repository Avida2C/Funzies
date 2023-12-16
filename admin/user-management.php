<?php require '../functions.php'; 
require '../dbfunctions.php'; 

$users = GetUsers($con);

?>

<!-- Functions Include: Importing shared functions for the site -->

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col py-2 shadow-sm bg-white">
            <div class="container mt-3">
                <!-- User Management Section -->
                <h4>User Management</h4>
                <table class="table">
                    <!-- User Management Table -->
                    <thead class="thead-dark">
                        <!-- Table Header: Contains column titles -->
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                            <th>Verified</th>
                            <th>Contact Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user):
                        ?>
                        <!-- Table Body: Each row shows user data with options to edit or delete -->
                        <!-- User -->
                        <tr>
                            <td><?php echo $user["ID"]; ?></td>
                            <td><?php echo $user["Email"]; ?></td>
                            <td><?php echo $user["Name"]; ?></td>
                            <td><?php echo $user["Surname"]; ?></td>
                            <td><?php echo $user["roleName"]; ?></td>
                            <td><?php echo $user["Joined"]; ?></td>
                            <td><?php echo $user["Verified"]; ?></td>
                            <td><?php echo $user["ContactNumber"]; ?></td>
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
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>