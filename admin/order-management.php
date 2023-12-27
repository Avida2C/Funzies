<?php require '../functions.php'; 
require '../dbfunctions.php'; 

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['isOrderStatus'])) {
    // Delete, create, or update order status based on POST data.
    if (!empty($_POST['orderStatusIDDelete'])) {
        // Delete an existing order status.
        $id = htmlspecialchars(addslashes($_POST['orderStatusIDDelete']));
        $deleteorderStatus = deleteOrderStatus($con, $id);
    } else if(empty($_POST['orderStatusID'])) {
        // Create a new order status.
        $name = htmlspecialchars(addslashes($_POST['orderStatusName'])); // 'addslashes' allows the user to use brackets
        $createorderStatus = createOrderStatus($con, $name);
    } else if(!empty($_POST['orderStatusID'])) {
        // Update an existing order status.
        $id = htmlspecialchars(addslashes($_POST['orderStatusID']));
        $name = htmlspecialchars(addslashes($_POST['orderStatusName'])); // 'addslashes' allows the user to use brackets
        $updateorderStatus = updateOrderStatus($con, $id, $name);
    }
} else if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editorderid']) && !empty($_POST['editorderid'])) {
    // Update or delete a specific order based on POST data.
    if(isset($_POST['btnUpdateOrder'])) {
        // Update the order status.
        $updateOrder = setOrderStatus($con, $_POST['editorderid'], $_POST['editorderstatus']);
    } else if(isset($_POST['btnDeleteOrder'])) {
        // Delete the order.
        $deletedOrder = deleteOrder($con, $_POST['editorderid']);
    }
}

// Retrieve current order statuses and orders from the database.
$orderStatuses = GetOrderStatus($con);
$orders = GetOrders($con);

?>

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

            <!-- Order Status Modal for creating or updating order statuses -->
            <div class="modal fade" id="orderStatusModal" tabindex="-1" aria-labelledby="orderStatusModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderStatusModalLabel">Create New Order Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Form for creating or updating an order status -->
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
                        <!-- Loop through each order status in the $orderStatuses array -->
                        <?php foreach($orderStatuses as $orderStatus):
                            ?>
                        <tr>
                            <!-- Display order status ID -->
                            <td><?php echo $orderStatus["ID"]; ?></td>
                            <!-- Display order status name -->
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
                         <!-- Loop through each order. -->
                        <?php foreach($orders as $order):
                            ?>
                        <tr>
                            <form method="POST">
                                <td><?php echo $order["ID"]; ?></td>
                                <td><?php echo $order["created"]; ?></td>
                                <td><?php echo $order["updated"]; ?></td>
                                <td>
                                    <select id="orderstatus<?php echo $order["ID"] ?>" name="editorderstatus" disabled>
                                        <!-- Loop through each order status and mark the current status as selected -->    
                                        <?php foreach($orderStatuses as $orderStatus): ?>
                                            <option value="<?php echo $orderStatus['ID'] ?>" <?php if($order['status'] == $orderStatus['ID']) echo 'selected'; ?>><?php echo $orderStatus['Status'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <!-- Display user ID associated with the order -->
                                <td><?php echo $order["user"]; ?></td>
                                <!-- Display address ID associated with the order -->
                                <td><?php echo $order["address"]; ?></td>
                                <td>
                                    <button type="button" id="btnOrderEdit<?php echo $order["ID"]; ?>" class="btn btn-primary btn-sm w-100" onclick="enableOrderEdit('<?php echo $order['ID']; ?>');">Edit</button>
                                    <button type="submit" id="btnOrderSave<?php echo $order["ID"]; ?>" name="btnUpdateOrder" class="btn btn-primary btn-sm w-100 d-none">Save</button>
                                    <button type="submit" name="btnDeleteOrder" class="btn btn-danger btn-sm w-100">Delete</button>
                                    <!-- Hidden input to store the order ID for the form submission -->
                                    <input type="hidden" name="editorderid" value="<?php echo $order["ID"]; ?>">
                                </td>
                            </form>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>
