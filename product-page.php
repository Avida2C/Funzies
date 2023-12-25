<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require 'dbfunctions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>
<!-- Breadcrumb for Navigation -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-3 div-spacing-mb">
    <!-- Breadcrumb Structure -->
    <div class="row">
        <div class="col">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="shop.php">Category</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Coming Soon - Info Unavailable</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Product Details Section -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-4">
    <div class="row">
        <!-- Product Image and Details -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <img src="img/comingsoon.jpg" class="img-thumbnail border-0 rounded-0" alt="...">
        </div>
        <!-- Product details -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-4 border-0 shadow-sm rounded-0 p-4">
            <!-- Badge In stock-->
            <p class="text-end"><span class="badge rounded-pill bg-success">In Stock</span></p>
            <!-- Brand -->
            <a href="#" class="text-decoration-none">
                <h5 class="fs-6 text-muted">Hopefully... Soon</h5>
            </a>
            <!-- Title of Product -->
            <h3 class="fs-5 mb-4">Coming Soon - Info Unavailable</h3>
            <!-- Price -->
            <p class="text-danger product-card-font mb-4"> &euro;0.00</p>
            <!-- Description -->
            <p style="height:250px;">Exciting things are on the horizon! Something amazing is in the works, and it's
                'Coming Soon' to our shop. We can't reveal all the details just yet, but we promise it's going to be a
                game-changer. Stay
                tuned for updates, and be the first to discover this incredible product when it drops. Get ready for a
                whole new experience - coming soon!</p>
            <!-- Button Add to cart -->
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
            <hr>
            <!-- Button Add to wishlist -->
            <button class="btn btn-success rounded-0 w-100">Add to Wishlist</button>
        </div>
    </div>
</div>

<!-- Tabs for Description, Reviews, and Review Submission -->
<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-4 shadow-sm">
    <div class="row">
        <!-- Navigation Pills for Tabs -->
        <div class="nav nav-pills mb-3 bg-danger m-0 p-1" id="pills-tab" role="tablist">
            <!-- Description Tab -->
            <li class="nav-item" role="presentation">
                <button class="btn btn-danger rounded-0 active" id="pills-desc-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc"
                    aria-selected="true">Description</button>
            </li>
        </div>
        <!-- in Tabs Content -->
        <div class="tab-content" id="pills-tabContent">
            <!-- Description -->
            <div class="tab-overflow tab-pane fade show active" id="pills-desc" role="tabpanel"
                aria-labelledby="pills-home-tab" tabindex="0">
                <!-- Info goes here -->
                <p>
                    Exciting things are on the horizon! Something amazing is in the works, and it's 'Coming
                    Soon' to our shop. We can't reveal all the details just yet, but we promise it's going to be a
                    game-changer. Stay tuned for updates, and be the first to discover this incredible product when it
                    drops. Get ready for a whole new experience - coming soon!
                </p>
            </div>
        </div>
    </div>
</div>


<?php  
require_once 'include/footer.php';
// End of Body //
?>