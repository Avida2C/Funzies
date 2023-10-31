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

<!-- Shop by Categories -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 div-spacing-mt">
  <div class="row">
    <!-- Title section -->
    <div class="col">
      <h3 class="fs-5">Shop by Categories</h3>
    </div>
    <div class="col categories-btn">
      <div class="d-flex flex-nowrap overflow-auto py-2">
        <!-- Funko -->
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Board Games</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Collectibles</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Figurines</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Models</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Puzzles</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Plushies</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center rounded-0" href="">Posters</a>
        </div>
        <div class="col">
          <a class="btn btn-danger text-center rounded-0" href="">Gifts</a>
        </div>
      </div>
    </div>
  </div>
</div>

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
      <div class="row justify-content-between product-card">
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/MaistoDiecast.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">Maisto Ford Mustang Boss 302 1/24 Diecast Model</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">Maisto</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;27.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/funkomary.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">Funko Pop Rides Mary Poppins</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">Funko Pop!</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;20.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top" src="img/products/uno.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">UNO</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">MATTEL</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font">&euro;10.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top" src="img/products/jenga.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">Jenga</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">Board Games</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font">&euro;31.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>



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
      <div class="row justify-content-between product-card">



        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/legomarvel.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">LEGO Minifigures 71039 Marvel Series 2</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">LEGO</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;4.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/funkorabbit.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">Funko POP! Friends N° 1066 – Chandler Bing
                (Bunny Suit)</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">Funko Pop!</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;15.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/monopolymalta.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">Monopoly Malta</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">Board Games</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;49.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
        <!-- Product card -->
        <div class="card shadow-sm rounded-0 border-0">
          <img class="card-img-top"
            src="img/products/legominigifure.jpg">
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6">LEGO Minifigures 71037 Series 24</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text text-muted pb-2">LEGO</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle product-card-icon" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger product-card-font"> &euro;5.99</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
          </div>
        </div>
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