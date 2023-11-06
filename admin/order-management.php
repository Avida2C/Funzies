<?php require '../functions.php'; ?>

<?php require_once 'include/header.php'; 
require_once 'include/navbar.php';?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php';?>

        <div class="col p-4 shadow-sm bg-white">
            <h2>Order Management</h2>
            <table class="table">
                <thead class="thead-dark">
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
                    <!-- Sample row -->
                    <tr>
                        <td>1</td>
                        <td>2023-11-01</td>
                        <td>2023-11-03</td>
                        <td>Processing</td>
                        <td>1001</td>
                        <td>A201</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-warning btn-sm">Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(1)">View Summary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2023-10-15</td>
                        <td>2023-10-16</td>
                        <td>Shipped</td>
                        <td>1002</td>
                        <td>A202</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-warning btn-sm">Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(2)">View Summary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2023-10-18</td>
                        <td>2023-10-19</td>
                        <td>Delivered</td>
                        <td>1003</td>
                        <td>A203</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-warning btn-sm">Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(3)">View Summary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2023-10-20</td>
                        <td>2023-10-21</td>
                        <td>Cancelled</td>
                        <td>1004</td>
                        <td>A204</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-warning btn-sm" disabled>Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(4)">View Summary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2023-10-22</td>
                        <td>2023-10-23</td>
                        <td>Returned</td>
                        <td>1005</td>
                        <td>A205</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-warning btn-sm">Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(5)">View Summary</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; ?>