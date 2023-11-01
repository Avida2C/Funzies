<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 

// Start of Body //
require_once 'include/navbar.php';
?>

<!-- Carousel -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 border-bottom border-5 border-danger">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <!-- Items in the carousel -->
    <div class="carousel-inner carousel-md">
      <div class="carousel-item active ">
        <img class="w-100 object-fit-cover" src="img/MaistoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="w-100 object-fit-cover" src="img/FunkoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="w-100 object-fit-cover" src="img/LegoBanner.png" alt="...">
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

<?php require_once 'include/categories-menu.php'; ?>

<!--New Arrivals -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 div-spacing-mt">
  <div class="row">
    <div class="col">
      <h3 class="fs-5">New Arrivals</h3>
    </div>
    <div class="col text-end">
      <button class="btn btn-danger rounded-0 p-2 align-middle mb-4">More Products<ion-icon class="align-middle"
          style="font-size:18px;" name="chevron-forward-outline"></ion-icon></button>
    </div>
  </div>
  <div class="col">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <?php 
        require 'include/product-card.php'; 
        require 'include/product-card.php';
        require 'include/product-card.php';
        require 'include/product-card.php';
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Best Sellers -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 div-spacing-mt">
  <div class="row">
    <div class="col">
      <h3 class="fs-5">Best Sellers</h3>
    </div>
    <div class="col text-end">
      <button class="btn btn-danger rounded-0 p-2 align-middle mb-4">More Products<ion-icon class="align-middle"
          style="font-size:18px;" name="chevron-forward-outline"></ion-icon></button>
    </div>
  </div>
  <div class="col">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <?php 
        require 'include/product-card.php'; 
        require 'include/product-card.php';
        require 'include/product-card.php';
        require 'include/product-card.php';
        ?>
      </div>
    </div>
  </div>
</div>


<!-- Shop by Brands -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 div-spacing-mt div-spacing-mb">
  <div class="row">
    <!-- Section title -->
    <div class="col">
      <h3 class="fs-5">Shop by Brand</h3>
    </div>
    <!-- Brand links -->
    <div class="col">
      <div class="d-flex flex-nowrap overflow-auto pb-4 brand-img">
        <!-- Funko -->
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-cover border-0 rounded-0 text-center" src="img/brands/funko.webp">
          </a>
        </div>
        <!-- Lego -->
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-fit border-0 rounded-0 text-center" src="img/brands/lego.jpg">
          </a>
        </div>
        <!-- Playmobil -->
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-cover border-0 rounded-0 text-center" src="img/brands/playmobil.webp">
          </a>
        </div>
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-cover border-0 rounded-0 text-center" src="img/brands/maisto.jpg">
          </a>
        </div>
        <!-- LOL Surprise -->
        <div class="col me-4">
          <a href="#">
            <img class="mx-auto object-fit-cover border-0 rounded-0 text-center" src="img/brands/lolsurprise.png">
          </a>
        </div>
        <div class="col">
          <a href="#">
            <img class="mx-auto object-fit-cover border-0 rounded-0 text-center" src="img/brands/burago.svg">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>