<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 

// Start of Body //
require_once 'include/navbar.php';
?>

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
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="imageStyling w-100 object-fit-cover" style="height:380px;" src="img/MaistoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="imageStyling w-100 object-fit-cover" style="height:380px;" src="img/FunkoBanner.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="imageStyling w-100 object-fit-cover" style="height:380px;" src="img/LegoBanner.png" alt="...">
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

<div class="container col-sm-12 col-md-12 col-lg-12 col-xl-8 my-4">
  <div class="row">
    <div class="col mb-3">
      <h3 class="fs-5">Shop by Brand</h3>
    </div>
    <div class="col">
      <div class="row d-flex flex-nowrap overflow-auto py-4">
        <!-- Funko -->
        <div class="col">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://cdn.shopify.com/s/files/1/0346/8908/9671/collections/FUNKO-LOGO.jpg?v=1667075374">
          </a>
        </div>
        <!-- Lego -->
        <div class="col">
          <a href="#"><img class="mx-auto object-fit-fit border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvx7TJcKFh0AAM4X0PMTfsVOFzZA8nGifLjaa4sRqEY3PHo7eL-wBKaOLYevTWuK1a7zs&usqp=CAU">
          </a>
        </div>
        <!-- Playmobil -->
        <div class="col">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_940x529/public/media/image/2014/11/409288-clicks-playmobil-protagonizaran-su-propia-pelicula.jpg?itok=AUBJLiKe">
          </a>
        </div>
        <div class="col">
          <a href="#"><img class="mx-auto object-fit-cover border-0 rounded-0 text-center"
              style="width: 175px; height: 125px;"
              src="https://www.toydeals.com.au/pub/media/brand/m/a/maisto-logo.jpg">
          </a>
        </div>
        <!-- LOL Surprise -->
        <div class="col">
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