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
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 border-bottom border-5 border-danger" style="margin-bottom: 3em;">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
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
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 my-4">
  <div class="row">
    <div class="col">
      <h3 class="fs-5">Shop by Categories</h3>
    </div>
    <div class="col categories-btn">
      <div class="d-flex flex-nowrap overflow-auto py-2">
        <!-- Funko -->
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Board
            Games</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Collectibles</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Figurines</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Models</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Puzzles</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Plushies</a>
        </div>
        <div class="col me-2">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Posters</a>
        </div>
        <div class="col">
          <a class="btn btn-danger text-center align-middle rounded-0" href="">Gifts</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--New Arrivals -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8" style="margin-top: 3em;">
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
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img
            src="https://modelshop.com.mt/wp-content/uploads/2020/08/Maisto-31269-Ford-Mustang-Boss-302-Diecast-Model-1.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6" style="height:30px;">Maisto Ford Mustang Boss 302 1/24 Diecast
                Model</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">Maisto</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;27.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://modelshop.com.mt/wp-content/uploads/2023/06/67974-funko-pop-mary-poppins-defudis67974.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4 object-fit-cover" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6 " style="height:30px;">Funko Pop Rides Mary Poppins
              </h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">Funko Pop!</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;20.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://modelshop.com.mt/wp-content/uploads/2020/06/jenga-HASA2120-1.jpg"
            class="object-fit-cover card-img-top mb-4" style="height:220px; width: 100%" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6 " style="height:30px;">Jenga</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">Board Games</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;31.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://modelshop.com.mt/wp-content/uploads/2020/06/uno-SG52277-1.jpg"
            class="card-img-top mb-4 object-fit-cover" style="height:220px; width: 100%" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6" style="height:30px;">UNO</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">MATTEL</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;10.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Best Sellers -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8" style="margin-top: 3em;">
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
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://gamesplusmalta.com/wp-content/uploads/2023/10/f7d170726207c6f9d7ef71ec328627c8.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4 object-fit-cover" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6" style="height:30px;">LEGO Minifigures 71039 Marvel Series 2</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">LEGO</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;4.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://gamesplusmalta.com/wp-content/uploads/2023/05/73487741db8fa6bf7837896006c22dd2-1.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4 object-fit-cover" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6 " style="height:30px;">Funko POP! Friends N° 1066 – Chandler Bing
                (Bunny Suit)
              </h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">Funko Pop!</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;15.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
            <p class="py-2">Ref: <span class="text-muted">MSO1203948723</span></p>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://gamesplusmalta.com/wp-content/uploads/2023/09/a1a3be5d6a1529ef6375b3744747681a.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4 object-fit-cover" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6 " style="height:30px;">LEGO Minifigures 71037 Series 24</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">LEGO</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;5.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
          </div>
        </div>
        <div class="card shadow-sm rounded-0 border-0" style="width: 15rem;">
          <img src="https://modelshop.com.mt/wp-content/uploads/2022/10/EN_BoardVisual_Malta_2022_MP02-HR.jpg"
            style="height:220px; width: 100%" class="card-img-top mb-4 object-fit-cover" alt="...">
          <div class="card-body p-0">
            <a href="#" class="text-decoration-none">
              <h5 class="card-title text-black fs-6" style="height:30px;">Monopoly Malta</h5>
            </a>
            <a href="#" class="text-decoration-none">
              <p class="card-text p-0 mb-1 text-muted pb-2">Board Games</p>
            </a>
            <p class="fw-bold">
              <ion-icon class="text-danger align-middle" style="font-size: 24px;" name="checkmark-outline"></ion-icon>
              In Stock
            </p>
            <p class="text-danger fw-bold" style="margin-top: 1em; font-size:24px;"> &euro;49.99</p>
            <button class="btn btn-danger w-100 rounded-0">Add To Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Shop by Brands -->
<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8" style="margin-top: 3em; margin-bottom: 3em;">
  <div class="row">
    <div class="col">
      <h3 class="fs-5">Shop by Brand</h3>
    </div>
    <div class="col">
      <div class="d-flex flex-nowrap overflow-auto pb-4">
        <!-- Funko -->
        <div class="col me-4">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://cdn.shopify.com/s/files/1/0346/8908/9671/collections/FUNKO-LOGO.jpg?v=1667075374">
          </a>
        </div>
        <!-- Lego -->
        <div class="col me-4">
          <a href="#"><img class="mx-auto object-fit-fit border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvx7TJcKFh0AAM4X0PMTfsVOFzZA8nGifLjaa4sRqEY3PHo7eL-wBKaOLYevTWuK1a7zs&usqp=CAU">
          </a>
        </div>
        <!-- Playmobil -->
        <div class="col me-4">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_940x529/public/media/image/2014/11/409288-clicks-playmobil-protagonizaran-su-propia-pelicula.jpg?itok=AUBJLiKe">
          </a>
        </div>
        <div class="col me-4">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://www.toydeals.com.au/pub/media/brand/m/a/maisto-logo.jpg">
          </a>
        </div>
        <!-- LOL Surprise -->
        <div class="col me-4">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://m.media-amazon.com/images/S/aplus-media/vc/bc1fc466-3799-4174-b78a-6263aa9d3d60.png">
          </a>
        </div>
        <div class="col">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;" src="https://cdn.worldvectorlogo.com/logos/burago-68094.svg">
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