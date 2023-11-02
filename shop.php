<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
// Categories menu // 
require_once 'include/categories-menu.php';
?>

<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row justify-content-between">
        <div class="col text-center">
            <p class="text-muted">Showing 9 out of 1000 Products</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <select class="form-select border-0 rounded-0 shadow-sm mb-3" aria-label="Default select example">
                <option class="form-select" selected>Sort by popularity</option>
                <option value="1">Sort by latest</option>
                <option value="2">Sort by price: low to high</option>
                <option value="3">Sort by price: high to low </option>
            </select>
        </div>
    </div>
</div>

<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8">
    <div class="row">
        <!-- Product Categories -->
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <h3 class="fs-6 mb-2 ps-1">Product Categories</h3>
            <ul class="list-group border-0 overflow-auto px-2">
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Board Games</a>
                    <span class="badge bg-danger rounded-pill">43</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Burago</a>
                    <span class="badge bg-danger rounded-pill">56</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Collectibles</a>
                    <span class="badge bg-danger rounded-pill">572</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Funko POP!</a>
                    <span class="badge bg-danger rounded-pill">143</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Gift Sets</a>
                    <span class="badge bg-danger rounded-pill">28</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Keychains</a>
                    <span class="badge bg-danger rounded-pill">113</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Lego</a>
                    <span class="badge bg-danger rounded-pill">231</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">LOL Surprise</a>
                    <span class="badge bg-danger rounded-pill">93</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Maisto</a>
                    <span class="badge bg-danger rounded-pill">82</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Merch</a>
                    <span class="badge bg-danger rounded-pill">34</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Models</a>
                    <span class="badge bg-danger rounded-pill">150</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Mugs</a>
                    <span class="badge bg-danger rounded-pill">24</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Playing Cards</a>
                    <span class="badge bg-danger rounded-pill">11</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Playmobil</a>
                    <span class="badge bg-danger rounded-pill">72</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Plushies</a>
                    <span class="badge bg-danger rounded-pill">18</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Posters</a>
                    <span class="badge bg-danger rounded-pill">50</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Puzzles</a>
                    <span class="badge bg-danger rounded-pill">30</span>
                </li>
                <li class="border-bottom border-1 d-flex justify-content-between align-items-center py-2">
                    <a href="" class="text-decoration-none text-muted">Trading cards</a>
                    <span class="badge bg-danger rounded-pill">20</span>
                </li>
            </ul>
        </div>

        <!-- Product List -->
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <!-- Product cards -->
                    <?php 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    require 'include/product-card.php'; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination -->
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