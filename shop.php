<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';
require_once 'include/navbar.php';
// Categories menu // 
require_once 'include/shop-categories.php';

$brands = GetBrands($con);
$selectedSort = '1';
$selectedCategory = null;
$selectedBrand = null;
$search = null;
$pageSize = 9.0;
$currentPage = 1;

if(isset($_GET["category"])) {
    $selectedCategory = $_GET["category"];
} 
if(isset($_GET["brand"])) {
    $selectedBrand = $_GET["brand"];
}
if(isset($_GET["search"])) {
    $search = $_GET["search"];
}
if(isset($_GET["page"])) {
    $currentPage = (int)$_GET["page"];
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["sort"])) {
        $selectedSort = $_POST["sortProduct"];
        $products = GetProductsPage($con, $selectedSort, $selectedCategory, $selectedBrand, $search);
        
    }
}

$products = GetProductsPage($con, $selectedSort, isset($selectedCategory) ? $selectedCategory : null, isset($selectedBrand) ? $selectedBrand : null, isset($search) ? $search : null);

$noPages = ceil($products->num_rows / $pageSize);

$startRow = ($currentPage * $pageSize) - $pageSize;

$limit = 9;
$pageTo = ($currentPage * $pageSize);
if(($currentPage * $pageSize) > $products->num_rows) {
    $limit = $products->num_rows - (($currentPage-1) * $pageSize);
    $pageTo = $products->num_rows;
}

$key = 0;

function includeProduct($product, $key) {
  include 'include/product-card.php';
}

function getUrl($selectedCategory, $selectedBrand, $search, $pageNumber) {
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
    return $url;
}

?>

<!-- Product Sorting and Information Display -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row justify-content-between">
        <!-- Displaying the number of products shown -->
        <div id="showDetails" class="col text-center">
            <p class="text-muted">Showing <?php echo ($startRow+1) . " - " . $pageTo . " out of ". $products->num_rows . " Products" ?></p>
        </div>
        <!-- Sorting functionality to order products -->
        <div id="sortProducts" class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <form method="POST" name="sortForm">
                <input type="hidden" name="sort" value="sort" />
                <select id="sortBy" name="sortProduct" class="form-select border-0 rounded-0 shadow-sm mb-3" aria-label="Sort products by" onchange="sortForm.submit();">
                    <option value="1" <?php if($selectedSort == "1") echo "selected" ?>>Sort by latest</option>
                    <option value="2" <?php if($selectedSort == "2") echo "selected" ?>>Sort by price: low to high</option>
                    <option value="3" <?php if($selectedSort == "3") echo "selected" ?>>Sort by price: high to low</option>
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
            
            foreach ($categories as $category) {
                echo '<li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">';
                echo '<a href="shop.php?category=' . $category["ID"] . '" class="text-decoration-none text-muted">' . $category["Name"] . '</a>';
                echo '<span class="badge bg-danger rounded-pill">' . GetProductCountForCategory($con, $category["ID"]) . '</span>';
                echo '</li>';
            }
            ?>
            <br>
            <h3 class="fs-6 mb-2">Brands</h3>
            <?php
            
            foreach ($brands as $brand) {
                echo '<li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">';
                echo '<a href="shop.php?brand=' . $brand["ID"] . '" class="text-decoration-none text-muted">' . $brand["Name"] . '</a>';
                echo '<span class="badge bg-danger rounded-pill">' . GetProductCountForBrand($con, $brand["ID"]) . '</span>';
                echo '</li>';
            }
            ?>

        </div>
        <!-- Product Cards Display -->
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <!-- Product cards -->
                    <!-- Loop to include individual product cards -->
                    <?php 
                    $products->data_seek($startRow);
                    
                    
                    for($i = 0; $i < $limit; $i++) {
                        includeProduct($products->fetch_assoc(), $key);
                        $key++;
                    }
                    ?>
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
                <li class="page-item  <?php if($currentPage == 1) echo 'disabled' ?>">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="<?php echo getUrl(isset($selectedCategory) ? $selectedCategory : null, isset($selectedBrand) ? $selectedBrand : null, isset($search) ? $search : null, $currentPage-1); ?>" tabindex="-1"
                        <?php if($currentPage == 1) echo 'aria-disabled="true"' ?> >Previous</a>
                </li>
                <li class="page-item <?php if($currentPage == $noPages) echo 'disabled' ?>">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="<?php echo getUrl(isset($selectedCategory) ? $selectedCategory : null, isset($selectedBrand) ? $selectedBrand : null, isset($search) ? $search : null, $currentPage+1); ?>" <?php if($currentPage == $noPages) echo 'aria-disabled="true"' ?>>Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
