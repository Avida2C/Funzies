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
      <div class="carousel-item active" data-bs-interval="2000">
        <img style="height:600px;" src="img/MaistoBanner.png" class="img-fluid object-fit-auto" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img style="height:600px;" src="img/FunkoBanner.png" class="img-fluid object-fit-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img style="height:600px;" src="img/LegoBanner.png"
          class="img-fluid object-fit-auto" alt="...">
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

<div class="container py-4 col-sm-12 col-md-12 col-lg-8 col-xl-8">
  <div class="row">
    <div class="col">
      <h3 class="fs-5 text-center mb-4 text-muted">Shop by Categories</h3>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-evenly">
      <div class="col-2">
        <div class="card border-0 rounded-0 text-center">
          <a href=""><img class="mx-auto object-fit-cover" style="width: 175px; height: 125px;"
              src="https://media.timeout.com/images/105627949/image.jpg" class="card-img-top">
          </a>
          <div class="card-body">
            <a class="text-decoration-none" href="#">
              <p class="card-title text-muted">Board Games</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card border-0 rounded-0 text-center">
          <a href=""><img class="mx-auto object-fit-cover" style="width: 175px; height: 125px;"
              src="https://cdn.britannica.com/48/182648-050-6C20C6AB/LEGO-bricks.jpg" class="card-img-top">
          </a>
          <div class="card-body">
            <a class="text-decoration-none" href="#">
              <p class="card-title text-muted">Lego</p>
            </a>
          </div>
        </div>
      </div>

      <div class="col-2">
        <div class="card border-0 rounded-0 text-center">
          <a href=""><img class="mx-auto object-fit-cover" style="width: 175px; height: 125px;"
              src="https://www.aroged.com/wp-content/uploads/2023/03/1677971884_Funko-will-send-30-million-worth-of-figurines-to-landfill.jpg"
              class="card-img-top">
          </a>
          <div class="card-body">
            <a class="text-decoration-none" href="#">
              <p class="card-title text-muted">Funko</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card border-0 rounded-0 text-center">
          <a href=""><img class="mx-auto object-fit-cover" style="width: 175px; height: 125px;"
              src="https://speedwaymedia.com/wp-content/uploads/2022/01/AdobeStock_216911632-scaled.jpeg"
              class="card-img-top">
          </a>
          <div class="card-body">
            <a class="text-decoration-none" href="#">
              <p class="card-title text-muted">Models</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="card border-0 rounded-0 text-center">
          <a href=""><img class="mx-auto object-fit-cover" style="width: 175px; height: 125px;"
              src="https://plushstore.com/wp-content/uploads/2022/02/190046-8sbixt.jpg" class="card-img-top">
          </a>
          <div class="card-body">
            <a class="text-decoration-none" href="#">
              <p class="card-title text-muted">Plushies</p>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>





<?php  
require_once 'include/footer.php';
// End of Body //
?>