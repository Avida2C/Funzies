<?php require '../functions.php'; ?>

<?php require_once 'include/header.php'; 
require_once 'include/navbar.php';?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php';?>

        <div class="col p-4 shadow-sm bg-white">
            <h2>Product Management</h2>
            <button class="btn btn-success mb-3" type="button">Add New Product</button>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Short Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Space Explorer Rocket</td>
                        <td>A durable plastic rocket toy designed to inspire young astronauts.</td>
                        <td>Space toy</td>
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
                    <tr>
                        <td>2</td>
                        <td>Deluxe Train Set</td>
                        <td>An expansive train set with multiple cars, tracks, and scenery.</td>
                        <td>Train set</td>
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
                    <tr>
                        <td>3</td>
                        <td>Magic Science Kit</td>
                        <td>A science kit that combines learning with fun magical experiments.</td>
                        <td>Educational fun</td>
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
                    <tr>
                        <td>4</td>
                        <td>Dinosaur Puzzle</td>
                        <td>A challenging 100-piece puzzle featuring various dinosaurs in a prehistoric landscape.</td>
                        <td>Dino puzzle for kids</td>
                        <td>$15.99</td>
                        <td>35</td>
                        <td>PuzzleMania</td>
                        <td><img src="../img/comingsoon.jpg" alt="Dinosaur Puzzle" style="width:50px;height:50px;"></td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100">Edit</button>
                            <button class="btn btn-danger btn-sm w-100">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Remote Control Car</td>
                        <td>An off-road remote control car capable of high speeds and rugged terrains.</td>
                        <td>RC Car with 4x4 grip</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; ?>