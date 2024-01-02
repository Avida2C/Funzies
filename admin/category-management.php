<?php require '../functions.php'; 
require '../dbfunctions.php'; 

// Handling POST request to delete, create, or update a category
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['categoryIDDelete'])) {
    // Deleting a category if 'categoryIDDelete' is set
    $id = htmlspecialchars(addslashes($_POST['categoryIDDelete']));
    $deletecategory = deleteCategory($con, $id);
} 
else if($_SERVER['REQUEST_METHOD'] == "POST" && empty($_POST['categoryID'])) {
    // Creating a new category if 'categoryID' is not set
    $name = htmlspecialchars(addslashes($_POST['categoryName'])); 
    $details = htmlspecialchars(addslashes($_POST['categoryDetails']));
    $createcategory = createCategory($con, $name, $details);
} 

else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['categoryID'])) {
    // Updating an existing category if 'categoryID' is set 
    $id = htmlspecialchars(addslashes($_POST['categoryID']));
    $name = htmlspecialchars(addslashes($_POST['categoryName'])); 
    $details = htmlspecialchars(addslashes($_POST['categoryDetails']));
    $updatecategory = updateCategory($con, $id, $name, $details);
}

// Fetching all categories to display
$categories = GetCategories($con);
?>

<?php 
$pagetitle = 'category management';
require_once 'include/header.php'; // Header Include: HTML header setup
require_once 'include/navbar.php'; // Navbar Include: Site navigation bar
?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once 'include/sidebar.php'; //Contains the sidebar with navigation links ?>

        <div class="col p-4 shadow-sm bg-white">
            <h4>Category Management</h4>
            <!-- Category Management Section-->
            <!-- Add Category Button: Triggers form to add a new category -->
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#categoryModal"
                onclick="clearModalCategoryFields();">Add New Category</button>

            <!-- Modal -->
            <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModalLabel">Create New Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                <input type="hidden" name="categoryID" id="categoryID"></input>
                                <label class="w-100" for="categoryName">Category Name<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="categoryName" name="categoryName"
                                    required>
                                <br>
                                <label class="w-100 mt-2" for="categoryDetails">Category Details<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="categoryDetails" name="categoryDetails"
                                    required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- PHP To gather the following category details from the database -->
            <table class="table">
                <thead class="thead-dark">
                    <!-- Table Head: Columns titles -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop for each category -->
                    <?php foreach($categories as $category):?>
                    <tr>
                        <td><?php echo $category["ID"]; ?></td>
                        <td><?php echo $category["Name"]; ?></td>
                        <td><?php echo $category["Details"]; ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" id="categoryIDDelete" name="categoryIDDelete"
                                    value='<?php echo $category["ID"]; ?>'></input>
                                <button type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"
                                    data-bs-target="#categoryModal"
                                    onclick='setModalCategoryFields("<?php echo $category["ID"]; ?>", "<?php echo $category["Name"]; ?>", "<?php echo $category["Details"]; ?>")'>Edit</button>
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

<?php require_once 'include/footer.php'; // Contains the footer information ?>
