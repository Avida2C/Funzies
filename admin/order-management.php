<?php require '../functions.php'; 
require '../dbfunctions.php'; 

$orderStatuses = GetOrderStatus($con);
$orders = GetOrders($con);

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
            <h4>Order Status Management</h4>
            <!-- PHP To gather the following orders details from the database -->
            <button class="btn btn-success mb-3" type="button">Add New Order Status</button>

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
                    <?php foreach($orderStatuses as $orderStatus):
                            ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $orderStatus["ID"]; ?></td>
                        <td><?php echo $orderStatus["Name"]; ?></td>
                        <td><?php echo $orderStatus["Details"]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <h4 class="mt-4">Order Management</h4>
            <table class="table">
                <thead class="thead-dark">
                    <!-- Column Headings -->
                    <tr>
                        <th>ID</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Status</th>
                        <th>User ID</th>
                        <th>Address ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($orders as $order):
                            ?>
                    <!-- Table Body: Each row shows user data with options to edit or delete -->
                    <!-- User -->
                    <tr>
                        <td><?php echo $order["ID"]; ?></td>
                        <td><?php echo $order["created"]; ?></td>
                        <td><?php echo $order["updated"]; ?></td>
                        <td><?php echo $order["statusOrder"]; ?></td>
                        <td><?php echo $order["user"]; ?></td>
                        <td><?php echo $order["address"]; ?></td>
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