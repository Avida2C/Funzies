<?php require '../functions.php'; 
require '../dbfunctions.php'; 

$products = GetProducts($con);
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
            <h4>Product Management</h4>
            <!-- Product Management Section-->
            <!-- Add Product Button: Triggers form to add a new product -->
            <button class="btn btn-success mb-3" type="button">Add New Product</button>
            <!-- PHP To gather the following product details from the database -->
            <table class="table">
                <thead class="thead-dark">
                    <!-- Table Head: Columns titles -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Short Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($products as $product):
                        ?>
                        <!-- Table Body: Each row shows user data with options to edit or delete -->
                        <!-- User -->
                        <tr>
                            <td><?php echo $product["ID"]; ?></td>
                            <td><?php echo $product["Name"]; ?></td>
                            <td><?php echo $product["Description"]; ?></td>
                            <td><?php echo $product["ShortDescription"]; ?></td>
                            <td><?php echo $product["Price"]; ?></td>
                            <td><?php echo $product["Stock"]; ?></td>
                            <td><?php echo $product["Brand"]; ?></td>
                            <td><?php echo $product["Image"]; ?></td>
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