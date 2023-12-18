<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';

?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
// Categories menu // 
require_once 'include/shop-categories.php';
?>

<!-- Product Sorting and Information Display -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row justify-content-between">
        <!-- Displaying the number of products shown -->
        <div id="showDetails" class="col text-center">
            <p class="text-muted">Showing 9 out of 1000 Products</p>
        </div>
        <!-- Sorting functionality to order products -->
        <div id="sortProducts" class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <select id="sortBy" class="form-select border-0 rounded-0 shadow-sm mb-3" aria-label="Sort products by">
                <option selected value="1">Sort by popularity</option>
                <option value="2">Sort by latest</option>
                <option value="3">Sort by price: low to high</option>
                <option value="4">Sort by price: high to low</option>
            </select>
        </div>
    </div>
</div>

<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row">
        <!-- Product Categories List -->
        <div id="productCategories" class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <h3 class="fs-6 mb-2">Product Categories</h3>
            <?php
            $categories = [
                'Board Games' => 43,
                'Burago' => 56,
                'Collectibles' => 572,
                'Funko POP!' => 143,
                'Collectibles' => 572,
                'Gift Sets' => 28,
                'Keychains' => 113,
                'Lego' => 231,
                'LOL Surprise' => 93,
                'Maisto' => 82,
                'Merch' => 34,
                'Models' => 150,
                'Mugs' => 24,
                'Playing Cards' => 12,
                'Playmobil' => 72,
                'Plushies' => 24,
                'Posters' => 52,
                'Puzzles' => 30,
                'Trading Cards' => 20
            ];
            
            foreach ($categories as $category => $count) {
                echo '<li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">';
                echo '<a href="#" class="text-decoration-none text-muted">' . htmlspecialchars($category) . '</a>';
                echo '<span class="badge bg-danger rounded-pill">' . htmlspecialchars($count) . '</span>';
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
                    for ($i = 0; $i < 6; $i++) {
                        include 'include/product-card.php';
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
                <li class="page-item disabled">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="#" tabindex="-1"
                        aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link bg-danger rounded-0 border-0 shadow-sm" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link rounded-0 border-0 text-muted shadow-sm" href="#">2</a></li>
                <li class="page-item"><a class="page-link rounded-0 border-0 text-muted shadow-sm" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link rounded-0 border-0 text-muted shadow-sm" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
