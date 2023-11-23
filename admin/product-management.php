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
            <h2>Product Management</h2>
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
                    <!-- Table Body: Each row represents a product with edit and delete options -->
                    <!-- Product -->
                    <tr>
                        <td>1</td>
                        <td>Space Explorer Rocket</td>
                        <td>A durable plastic rocket toy designed to inspire young astronauts.</td>
                        <td>Space toy</td>
                        <td>Toy</td>
                        <td>$29.95</td>
                        <td>20</td>
                        <td>Galactic Toys</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Product -->
                    <tr>
                        <td>2</td>
                        <td>Deluxe Train Set</td>
                        <td>An expansive train set with multiple cars, tracks, and scenery.</td>
                        <td>Train set</td>
                        <td>Toy</td>
                        <td>$49.99</td>
                        <td>10</td>
                        <td>Locomotion</td>
                        <td><img src="../img/comingsoon.jpg" alt="Deluxe Train Set" style="width:50px;height:50px;">
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Product -->
                    <tr>
                        <td>3</td>
                        <td>Magic Science Kit</td>
                        <td>A science kit that combines learning with fun magical experiments.</td>
                        <td>Educational fun</td>
                        <td>Education</td>
                        <td>$24.99</td>
                        <td>25</td>
                        <td>Wizardry Labs</td>
                        <td><img src="../img/comingsoon.jpg" alt="Magic Science Kit" style="width:50px;height:50px;">
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Product -->
                    <tr>
                        <td>4</td>
                        <td>Dinosaur Puzzle</td>
                        <td>A challenging 100-piece puzzle featuring various dinosaurs in a prehistoric landscape.</td>
                        <td>Dino puzzle for kids</td>
                        <td>Puzzle</td>
                        <td>$15.99</td>
                        <td>35</td>
                        <td>PuzzleMania</td>
                        <td><img src="../img/comingsoon.jpg" alt="Dinosaur Puzzle" style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Product -->
                    <tr>
                        <td>5</td>
                        <td>Remote Control Car</td>
                        <td>An off-road remote control car capable of high speeds and rugged terrains.</td>
                        <td>RC Car with 4x4 grip</td>
                        <td>Model</td>
                        <td>$39.99</td>
                        <td>12</td>
                        <td>Speedster</td>
                        <td><img src="../img/comingsoon.jpg" alt="Remote Control Car" style="width:50px;height:50px;">
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Products end-->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>