<?php require '../functions.php';
require '../dbfunctions.php'; 

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['brandIDDelete'])) {
    // Sanitize and store the brand ID to be deleted.
    $id = htmlspecialchars(addslashes($_POST['brandIDDelete']));
    // Call the function to delete the brand from the database.
    $deleteBrand = deleteBrand($con, $id);
} else if($_SERVER['REQUEST_METHOD'] == "POST" && empty($_POST['brandID'])) {
    // For creating a new brand, sanitize and store the brand name and details.
    $name = htmlspecialchars(addslashes($_POST['brandName'])); 
    $details = htmlspecialchars(addslashes($_POST['brandDetails']));
    // Call the function to create a new brand with the provided name, details, and logo.
    $createBrand = createBrand($con, $name, $details, $_FILES['brandLogo']);
} else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['brandID'])) {
    // For updating an existing brand, sanitize and store the new brand details.
    $id = htmlspecialchars(addslashes($_POST['brandID']));
    $name = htmlspecialchars(addslashes($_POST['brandName'])); 
    $details = htmlspecialchars(addslashes($_POST['brandDetails']));
    // Call the function to update the brand with the new details and logo.
    $updateBrand = updateBrand($con, $id, $name, $details, $_FILES['brandLogo']);
}

// Retrieve the current list of brands from the database.
$brands = GetBrands($con);
?>

<?php 
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col p-4 shadow-sm bg-white">
            <h4>Brand Management</h4>
            <!-- Brand Management Section-->
            <!-- Add Brand Button: Triggers form to add a new brand -->
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#brandModal"
                onclick="clearModalBrandFields()">Add New Brand</button>

            <!-- Modal for adding or editing brands -->
            <div class="modal fade" id="brandModal" tabindex="-1" aria-labelledby="brandModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="brandModalLabel">Create New Brand</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="brandID" id="brandID"></input>
                                <label class="w-100" for="brandName">Brand Name<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="brandName" name="brandName" required>
                                <br>
                                <label class="w-100 mt-2" for="brandDetails">Brand Details<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="brandDetails" name="brandDetails"
                                    required>
                                <label class="w-100 mt-2" for="brandLogo">Brand Image<span
                                        class="text-danger">*</span>:</label>
                                <input type="file" id="brandLogo" name="brandLogo"></input>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container overflow-auto" style="height:500px;">
                <!-- PHP To gather the following brand details from the database -->
                <table class="table">
                    <thead class="thead-dark">
                        <!-- Table Head: Columns titles -->
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through each brand and display its details -->
                        <?php foreach($brands as $brand):?>
                        <tr>
                            <td><?php echo $brand["ID"]; ?></td>
                            <td><?php echo $brand["Name"]; ?></td>
                            <td class="w-50"><?php echo $brand["Details"]; ?></td>
                            <td><img class="w-25" src='<?php echo "../" . $brand["Image"]; ?>' alt=""></td>
                            <td style="width:100px;">
                                <form method="POST">
                                    <!-- Hidden field for storing brand ID -->
                                    <input type="hidden" id="brandIDDelete" name="brandIDDelete"
                                        value='<?php echo $brand["ID"]; ?>'></input>
                                    <button type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"
                                        data-bs-target="#brandModal"
                                        onclick='setModalBrandFields("<?php echo $brand["ID"]; ?>", "<?php echo $brand["Name"]; ?>", "<?php echo $brand["Details"]; ?>")'>Edit</button>
                                    <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                </form>
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
