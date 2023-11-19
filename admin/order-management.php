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
            <h2>Order Management</h2>
            <!-- PHP To gather the following orders details from the database -->
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
                    <!-- Table Rows: Loop through orders and display data -->
                    <!-- Order -->
                    <tr>
                        <td>1</td>
                        <td>2023-11-01</td>
                        <td>2023-11-03</td>
                        <td>Processing</td>
                        <td>1001</td>
                        <td>A201</td>
                        <td>
                            <!-- Edit, Cancel, View Summary Buttons: Actions for each order -->
                            <!-- Will show a form with the information provided by PHP and which the admin can change,
                            on saved: PHP updates the Database or shows error message -->
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <!-- PHP Will update the order status in the database -->
                            <button class="btn btn-warning btn-sm">Cancel</button>
                            <!-- PHP gathers the data and shows the details of the order -->
                            <button class="btn btn-info btn-sm" onclick="viewSummary(1)">View Summary</button>
                        </td>
                    </tr>
                    <!-- Order -->
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
                    <!-- Order -->
                    <tr>
                        <td>3</td>
                        <td>2023-10-18</td>
                        <td>2023-10-19</td>
                        <td>Delivered</td>
                        <td>1003</td>
                        <td>A203</td>
                        <td>
                            <button class="btn btn-primary btn-sm" disabled>Edit</button>
                            <button class="btn btn-warning btn-sm" disabled>Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(3)">View Summary</button>
                        </td>
                    </tr>
                    <!-- Order -->
                    <tr>
                        <td>4</td>
                        <td>2023-10-20</td>
                        <td>2023-10-21</td>
                        <td>Cancelled</td>
                        <td>1004</td>
                        <td>A204</td>
                        <td>
                            <button class="btn btn-primary btn-sm" disabled>Edit</button>
                            <button class="btn btn-warning btn-sm" disabled>Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(4)">View Summary</button>
                        </td>
                    </tr>
                    <!-- Order -->
                    <tr>
                        <td>5</td>
                        <td>2023-10-22</td>
                        <td>2023-10-23</td>
                        <td>Returned</td>
                        <td>1005</td>
                        <td>A205</td>
                        <td>
                            <button class="btn btn-primary btn-sm" disabled>Edit</button>
                            <button class="btn btn-warning btn-sm" disabled>Cancel</button>
                            <button class="btn btn-info btn-sm" onclick="viewSummary(5)">View Summary</button>
                        </td>
                    </tr>
                    <!-- Orders end -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>