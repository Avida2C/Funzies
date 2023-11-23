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
            <h2>Brand Management</h2>
            <!-- Brand Management Section-->
            <!-- Add Brand Button: Triggers form to add a new brand -->
            <button class="btn btn-success mb-3" type="button">Add New Brand</button>
            <!-- PHP To gather the following brand details from the database -->
            <table class="table">
                <thead class="thead-dark">
                    <!-- Table Head: Columns titles -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Body: Each row represents a Brand with edit and delete options -->
                    <!-- Brand -->
                    <tr>
                        <td>1</td>
                        <td>Galactic Toys</td>
                        <td>Galactic Toys & Collectibles.</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Brand -->
                    <tr>
                        <td>2</td>
                        <td>Locomotion</td>
                        <td>Toys for Kids</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Brand -->
                    <tr>
                        <td>3</td>
                        <td>Wizardry Labs</td>
                        <td>Intuitive Brand for kids success</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Brand -->
                    <tr>
                        <td>4</td>
                        <td>PuzzleMania</td>
                        <td>All puzzle types and games</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Brand -->
                    <tr>
                        <td>5</td>
                        <td>Speedster</td>
                        <td>Car Models</td>
                        <td><img src="../img/comingsoon.jpg" alt="Space Explorer Rocket"
                                style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <!-- Brand end-->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; // Contains the footer information ?>