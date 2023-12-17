<?php require '../functions.php'; 
require '../dbfunctions.php'; 

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['isOrderStatus'])) {
    if (!empty($_POST['orderStatusIDDelete'])) {
        $id = htmlspecialchars(addslashes($_POST['orderStatusIDDelete']));
        $deleteorderStatus = deleteOrderStatus($con, $id);
    } else if(empty($_POST['orderStatusID'])) {
        $name = htmlspecialchars(addslashes($_POST['orderStatusName'])); // 'addslashes' allows the user to use brackets
        $createorderStatus = createOrderStatus($con, $name);
    } else if(!empty($_POST['orderStatusID'])) {
        $id = htmlspecialchars(addslashes($_POST['orderStatusID']));
        $name = htmlspecialchars(addslashes($_POST['orderStatusName'])); // 'addslashes' allows the user to use brackets
        $updateorderStatus = updateOrderStatus($con, $id, $name);
    }
} else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['isOrder'])) {

}


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
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#orderStatusModal"
                onclick="clearModalOrderStatusFields();">Add New Order Status</button>

            <!-- Modal -->
            <div class="modal fade" id="orderStatusModal" tabindex="-1" aria-labelledby="orderStatusModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderStatusModalLabel">Create New Order Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                <input type="hidden" name="orderStatusID" id="orderStatusID"></input>
                                <label class="w-100" for="orderStatusName">Order Status Name<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="orderStatusName" name="orderStatusName"
                                    required>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="isOrderStatus" id="isOrderStatus" value="true"></input>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container overflow-auto" style="height:200px;">
                <table class="table">
                    <!-- Role Data Table -->
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
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
                            <td><?php echo $orderStatus["Status"]; ?></td>
                            <td style="width:100px;">
                                <form method="POST">
                                    <input type="hidden" name="isOrderStatus" id="isOrderStatus" value="true"></input>
                                    <input type="hidden" id="orderStatusIDDelete" name="orderStatusIDDelete"
                                        value='<?php echo $orderStatus["ID"]; ?>'></input>
                                    <button type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"
                                        data-bs-target="#orderStatusModal"
                                        onclick='setModalOrderStatusFields("<?php echo $orderStatus["ID"]; ?>", "<?php echo $orderStatus["Status"]; ?>")'>Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>


            <h4 class="mt-4">Order Management</h4>
            <div class="container overflow-auto" style="height:600px;">
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
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>
