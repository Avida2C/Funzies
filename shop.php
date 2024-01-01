<?php 
require 'functions.php'; // General functions used throughout the site.
require 'dbfunctions.php'; // Database interaction functions.

$brands = GetBrands($con); // Fetching all brands.
$selectedSort = '1'; // Default sort option.
$selectedCategory = null; // No category selected by default.
$selectedBrand = null; // No brand selected by default.
$search = null; // No search query by default.
$pageSize = 12.0; // Number of products per page.
$currentPage = 1; // Start on the first page.

// Update filters based on GET parameters if they exist.
if(isset($_GET["category"])) {
    $selectedCategory = $_GET["category"]; // Update selected category.
} 
if(isset($_GET["brand"])) {
    $selectedBrand = $_GET["brand"]; // Update selected brand.
}
if(isset($_GET["search"])) {
    $search = $_GET["search"]; // Update search query.
}
if(isset($_GET["page"])) {
    $currentPage = (int)$_GET["page"]; // Update current page.
}

// Handle POST request to sort products.
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["sort"])) {
        $selectedSort = $_POST["sortProduct"]; // Update selected sort option.
        // Fetch sorted products based on the selected criteria.
        $products = GetProductsPage($con, $selectedSort, $selectedCategory, $selectedBrand, $search);  
    }
}

$products = GetProductsPage($con, $selectedSort, $selectedCategory, $selectedBrand, $search); // Fetch products for the page based on the selected criteria.
$noPages = ceil($products->num_rows / $pageSize); // Calculate the number of pages required to display all products.
$startRow = ($currentPage * $pageSize) - $pageSize; // Calculate the starting row for the current page.

// Determine the number of products to display on the current page.
$limit = 12; // Default limit.
$pageTo = ($currentPage * $pageSize);

// Adjust if the last page contains fewer products than the default limit.
if(($currentPage * $pageSize) > $products->num_rows) {
    $limit = $products->num_rows - (($currentPage-1) * $pageSize);
    $pageTo = $products->num_rows;
}

$key = 0;

// Function to include individual product card.
function includeProduct($product, $key){
    include 'include/product-card.php';
}

// Function to construct a URL with query parameters.
function getUrl($selectedCategory, $selectedBrand, $search, $pageNumber)
{
    $url = $_SERVER['PHP_SELF'] . '?';
    $params = [];
    if(isset($selectedCategory)) {
        array_push($params, 'category='. $selectedCategory);
    }
    if(isset($selectedBrand)) {
        array_push($params, 'brand='. $selectedBrand);
    }
    if(isset($search)) {
        array_push($params, 'search='. $search);
    }
    if(isset($pageNumber)) {
        array_push($params, 'page=' . $pageNumber);
    }
    $url .= join("&", $params);
    return $url; // Return the constructed URL.
}?>

<?php
$pagetitle = 'shop';
require_once 'include/header.php'; // Site header.
require_once 'include/navbar.php'; // Navigation bar.
?>

<!-- Product Sorting and Information Display -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row justify-content-start">
        <!-- Displaying the number of products shown -->
        <div id="showDetails" class="col text-center my-4">
            <p class="text-muted">Showing <?php echo ($startRow+1) . " - " . $pageTo . " out of ". $products->num_rows . " Products" ?></p>
        </div>
        <!-- Sorting functionality to order products -->
        <div id="sortProducts" class="col-sm-12 col-md-12 col-lg-3 col-xl-3 my-3">
            <form method="POST" name="sortForm">
                <input type="hidden" name="sort" value="sort" />
                <!-- Dropdown for selecting sort option -->
                <select id="sortBy" name="sortProduct" class="form-select border-0 rounded-0 shadow-sm mb-3" aria-label="Sort products by" onchange="sortForm.submit();">
                    <option value="1" <?php if($selectedSort == "1") { echo "selected";} ?>>Sort by latest</option>
                    <option value="2" <?php if($selectedSort == "2") { echo "selected";} ?>>Sort by price: low to high</option>
                    <option value="3" <?php if($selectedSort == "3") { echo "selected";} ?>>Sort by price: high to low</option>
                </select>
            </form>
        </div>
    </div>
</div>

<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row">
        <!-- Product Categories List -->
        <div id="productCategories" class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <h3 class="fs-6 mb-2">Product Categories</h3>
            <?php
            // Loop through each category and display it with a link.
            foreach ($categories as $category) {
                echo '<li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">';
                // Link to filter products by this category.
                echo '<a href="shop.php?category=' . $category["ID"] . '" class="text-decoration-none text-muted">' . $category["Name"] . '</a>';
                // Display the count of products in this category.
                echo '<span class="badge bg-danger rounded-pill">' . GetProductCountForCategory($con, $category["ID"]) . '</span>';
                echo '</li>'; }?>
            <br>
            <h3 class="fs-6 mb-2">Brands</h3>
            <?php
            // Loop through each brand and display it with a link and product count.
            foreach ($brands as $brand) {
                echo '<li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">';
                // Link to filter products by this brand.
                echo '<a href="shop.php?brand=' . $brand["ID"] . '" class="text-decoration-none text-muted">' . $brand["Name"] . '</a>';
                // Display the count of products for this brand.
                echo '<span class="badge bg-danger rounded-pill">' . GetProductCountForBrand($con, $brand["ID"]) . '</span>';
                echo '</li>';
            }?>

        </div>
        <!-- Product Cards Display -->
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
            <div class="container-fluid">
                <div class="row justify-content-start">
                    <!-- Product cards -->
                    <!-- Loop to include individual product cards -->
                    <?php 
                    $products->data_seek($startRow);
    
                    // Loop through products and include their cards.
                    for($i = 0; $i < $limit; $i++) {
                        includeProduct($products->fetch_assoc(), $key);
                        $key++; }?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination Section -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-2 mb-4">
    <div class="row">
        <div class="col">
            <ul class="pagination justify-content-end">
                <li class="page-item  <?php if($currentPage == 1) { echo 'disabled';} ?>">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="<?php echo getUrl(isset($selectedCategory) ? $selectedCategory : null, isset($selectedBrand) ? $selectedBrand : null, isset($search) ? $search : null, $currentPage-1); ?>" tabindex="-1"
                    <?php if($currentPage == 1) { echo 'aria-disabled="true"';}?> >Previous</a>
                </li>
                <li class="page-item <?php if($currentPage == $noPages) { echo 'disabled';} ?>">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="<?php echo getUrl(isset($selectedCategory) ? $selectedCategory : null, isset($selectedBrand) ? $selectedBrand : null, isset($search) ? $search : null, $currentPage+1); ?>" <?php if($currentPage == $noPages) { echo 'aria-disabled="true"';} ?>>Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
