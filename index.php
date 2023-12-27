<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';

require_once 'include/navbar.php';

// Fetching the latest products for the New Arrivals section.
$latestProducts = GetLatestProductsIndex($con);

$key = 0;

// includes product card template
function includeProduct($product, $key) {
  include 'include/product-card.php';
}
?>

<!-- Carousel Section -->
<div class="sm-carousel col-sm-12 col-md-12 col-lg-12 col-xl-12 border-bottom border-5 border-danger">
  <div id="carouselExampleIndicators" class="carousel slide sm-carousel">
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <!-- Items in the carousel -->
    <div class="carousel-inner carousel-md sm-carousel">
      <div class="carousel-item active ">
        <img class=" sm-carousel w-100 object-fit-cover" src="img/MaistoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="sm-carousel w-100 object-fit-cover" src="img/FunkoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="sm-carousel w-100 object-fit-cover" src="img/LegoBanner.png" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- Including Categories Section -->
<?php require_once 'include/shop-categories.php'; ?>

<!-- New Arrivals Section -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 spacing-mb">
  <div class="row d-flex justify-content-between">
    <div class="col">
      <h3 class="fs-5">New Arrivals</h3>
    </div>
    <div class="col text-end">
      <!-- More Products Button -->
      <a href="shop.php" class="btn btn-danger rounded-0 p-2 align-middle mb-4">More Products<ion-icon class="align-middle"
          style="font-size:18px;" name="chevron-forward-outline"></ion-icon></a>
    </div>
  </div>
  <div class="col-12">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <!-- Loop to include product cards -->
        <?php 
        // Loop through the latest products and include their product cards.
        foreach ($latestProducts as $prod) {
          includeProduct($prod, $key);
          $key++;
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Best Sellers Section -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8">
  <div class="row">
    <div class="col">
      <h3 class="fs-5">Best Sellers</h3>
    </div>
    <div class="col text-end">
      <!-- More products button -->
      <a href="shop.php" class="btn btn-danger rounded-0 p-2 align-middle mb-3">More Products<ion-icon class="align-middle"
          style="font-size:18px;" name="chevron-forward-outline"></ion-icon></a>
    </div>
  </div>
  <div class="col">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <!-- Loop to include product cards -->
        <?php 
        // Will add 4 product cards
        foreach ($latestProducts as $prod) {
          includeProduct($prod, $key);
          $key++;
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Including Brand Section -->
<?php 
require 'include/shop-brand.php';
require_once 'include/footer.php';
// End of Body //
?>