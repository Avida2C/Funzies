<?php 

require '../functions.php'; 
require '../dbfunctions.php'; 

// Handle deletion of a product.
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['productIDDelete'])) {
    $id = htmlspecialchars(addslashes($_POST['productIDDelete']));
    $deleteproduct = deleteProduct($con, $id);
}
// Handle creation of a new product.
else if($_SERVER['REQUEST_METHOD'] == "POST" && empty($_POST['productID'])) {
    $name = htmlspecialchars(addslashes($_POST['productName'])); // 'addslashes' allows the user to use brackets
    $description = htmlspecialchars(addslashes($_POST['productDescription']));
    $category = htmlspecialchars(addslashes($_POST['productCategory']));
    $price = htmlspecialchars(addslashes($_POST['productPrice']));
    $stock = htmlspecialchars(addslashes($_POST['productStock']));
    $brand = htmlspecialchars(addslashes($_POST['productBrand']));
    $image = $_FILES['productImage'];
    $createproduct = createProduct($con, $name, $description, $category, $price, $stock, $brand, $image);
} 
// Handle update of an existing product.
else if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['productID'])) {
    $id = htmlspecialchars(addslashes($_POST['productID']));
    $name = htmlspecialchars(addslashes($_POST['productName'])); 
    $description = htmlspecialchars(addslashes($_POST['productDescription']));
    $category = htmlspecialchars(addslashes($_POST['productCategory']));
    $price = htmlspecialchars(addslashes($_POST['productPrice']));
    $stock = htmlspecialchars(addslashes($_POST['productStock']));
    $brand = htmlspecialchars(addslashes($_POST['productBrand']));
    $image = $_FILES['productImage'];
    $updateproduct = updateProduct($con, $id, $name, $description, $category, $price, $stock, $brand, $image);
}

// Fetch products, brands, and categories for display and selection.
$products = GetProducts($con);
$brands = GetBrands($con);
$categories = GetCategories($con);
?>

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
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#productModal"
                onclick="clearModalProductFields();">Add New Product</button>

            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">Create New Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <div class="modal-body">
                                <!-- Hidden field for product ID -->
                                <input type="hidden" name="productID" id="productID"></input>
                                <!-- Product Name -->
                                <label class="w-100" for="productName">Product Name<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="productName" name="productName" required>
                                <!-- Product Description -->
                                <label class="w-100" for="productDescription">Product Description:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="productDescription"
                                    name="productDescription">
                                <!-- Product Category -->
                                <label class="w-100" for="productCategory">Product Category<span
                                        class="text-danger">*</span>:</label>
                                <select name="productCategory" id="productCategory" required>
                                    <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category["ID"]; ?>"><?php echo $category["Name"]; ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <!-- Product Price -->
                                <label class="w-100" for="productPrice">Product Price<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="productPrice" name="productPrice"
                                    required>
                                <!-- Product Stock -->
                                <label class="w-100" for="productStock">Product Stock<span
                                        class="text-danger">*</span>:</label>
                                <input class="w-100 mt-2 p-2" type="text" id="productStock" name="productStock"
                                    required>
                                <!-- Product Brand -->
                                <label class="w-100" for="productBrand">Product Brand<span
                                        class="text-danger">*</span>:</label>
                                <select name="productBrand" id="productBrand" required>
                                    <?php foreach($brands as $brand): ?>
                                    <option value="<?php echo $brand["ID"]; ?>"><?php echo $brand["Name"]; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <!-- Product Image -->
                                <label class="w-100" for="productImage">Product Image<span
                                        class="text-danger">*</span>:</label>
                                <input type="file" id="productImage" name="productImage"></input>
                            </div>
                            <!-- Buttons -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container overflow-auto" style="height:500px;">
                <!-- PHP To gather the following product details from the database -->
                <table class="table">
                    <thead class="thead-dark">
                        <!-- Table Head: Columns titles -->
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product):?>
                        <!-- Row for each product -->
                        <tr>
                            <td><?php echo $product["ID"]; ?></td>
                            <td><?php echo $product["Name"]; ?></td>
                            <td><?php echo $product["Description"]; ?></td>
                            <td><?php echo $product["categoryName"]; ?></td>
                            <td><?php echo $product["Price"]; ?></td>
                            <td><?php echo $product["Stock"]; ?></td>
                            <td><?php echo $product["brandName"]; ?></td>
                            <td><img class="w-25" src='<?php echo "../" . $product["Image"]; ?>' alt=""></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" id="productIDDelete" name="productIDDelete"
                                        value='<?php echo $product["ID"]; ?>'></input>
                                    <button type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"
                                        data-bs-target="#productModal"
                                        onclick='setModalProductFields("<?php echo $product["ID"]; ?>", "<?php echo $product["Name"]; ?>", 
                                        "<?php echo $product["Description"]; ?>", 
                                        "<?php echo $product["Category"]; ?>", 
                                        "<?php echo $product["Price"]; ?>", 
                                        "<?php echo $product["Stock"]; ?>", 
                                        "<?php echo $product["Brand"]; ?>")'>Edit</button>
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
