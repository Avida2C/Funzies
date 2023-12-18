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
            <!-- Customer Reviews Tab -->
            <li class="nav-item" role="presentation">
                <button class="btn btn-danger rounded-0" id="pills-reviews-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews"
                    aria-selected="false">Customer Reviews</button>
            </li>
            <!-- Leave Review Tab -->
            <li class="nav-item" role="presentation">
                <button class="btn btn-danger rounded-0" id="pills-reviews-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-leavereview" type="button" role="tab" aria-controls="pills-leavereview"
                    aria-selected="false">Leave a Review</button>
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
            <!-- Customer Reviews -->
            <div class="tab-overflow tab-pane fade" id="pills-reviews" role="tabpanel"
                aria-labelledby="pills-contact-tab" tabindex="0">
                <!-- Info goes here -->
                <p>
                    Be the first to share your thoughts! No reviews have
                    been submitted for this product yet. We value your feedback and can't wait to hear about your
                    experience. Don't hesitate to leave a review and help others make informed choices.
                </p>
            </div>
            <!-- Leave a Review form -->
            <div class="tab-pane fade" id="pills-leavereview" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                <!-- Info goes here -->
                <div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="row">
                        <div id="reviewForm" class="col-sm-12 col-md-12 col-lg-6 col-xl-6 me-3 my-4 pb-2">

                            <!-- Reviews Form -->
                            <form method="POST" enctype="multipart/form-data">
                                <label for="fullname">Full Name</label>
                                <input class="w-100 mb-2" type="text" id="fullname" name="fullname">
                                <label for="title">Title</label>
                                <input class="w-100 mb-2" type="text" id="title" name="title">
                                <div class="row">
                                    <!-- Star review title -->
                                    <div class="col">
                                        <label for="rating3-1">Review</label>
                                    </div>
                                    <!-- Star Review -->
                                    <div class="col">
                                        <div id="star-review" class="rating-group py-3">
                                            <input disabled checked class="rating-input rating-input-none"
                                                name="rating3" id="rating3-none" value="0" type="radio">
                                            <!-- Only showing two star ratings for brevity; you should follow the pattern for the rest -->
                                            <label aria-label="1 star" class="rating-label" for="rating3-1"><i
                                                    class="rating-icon rating-icon-star fa fa-star"></i></label>
                                            <input class="rating-input" name="rating3" id="rating3-1" value="1"
                                                type="radio">

                                            <label aria-label="2 stars" class="rating-label" for="rating3-2"><i
                                                    class="rating-icon rating-icon-star fa fa-star"></i></label>
                                            <input class="rating-input" name="rating3" id="rating3-2" value="2"
                                                type="radio">
                                            <label aria-label="3 stars" class="rating-label" for="rating3-3"><i
                                                    class="rating-icon rating-icon-star fa fa-star"></i></label>
                                            <input class="rating-input" name="rating3" id="rating3-3" value="3"
                                                type="radio">
                                            <label aria-label="4 stars" class="rating-label" for="rating3-4"><i
                                                    class="rating-icon rating-icon-star fa fa-star"></i></label>
                                            <input class="rating-input" name="rating3" id="rating3-4" value="4"
                                                type="radio">
                                            <label aria-label="5 stars" class="rating-label" for="rating3-5"><i
                                                    class="rating-icon rating-icon-star fa fa-star"></i></label>
                                            <input class="rating-input" name="rating3" id="rating3-5" value="5"
                                                type="radio">
                                        </div>
                                    </div>
                                </div>
                                <label for="review">Comment</label>
                                <textarea class="w-100 mb-2" name="review" id="review" cols="30" rows="6"></textarea>
                                <label for="image">Upload Image</label>
                                <input class="mb-2" type="file" name="image" id="image">
                                <button class="btn btn-danger w-100 rounded-0">Submit</button>
                            </form>
                        </div>
                        <!-- Review form Message -->
                        <div id="ReviewFormMessage" class="col-sm-12 col-md-12 col-lg-5 col-xl-5 m-auto">
                            <p class="fs-6 ">
                                Gear up for the ultimate review adventure! Your words have the power to inspire and
                                guide
                                fellow explorers. Share your bold experiences here!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Related Products Section -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 p-4 bg-danger">
    <div class="row">
        <!-- Related Products Header and More Products Button -->
        <div class="col">
            <h3 class="fs-5">Related Products</h3>
        </div>
        <div class="col text-end">
            <!-- More Products Button -->
            <a href="shop.php" class="btn btn-danger rounded-0 p-2 align-middle mb-2">More Products<ion-icon
                    class="align-middle" style="font-size:18px;" name="chevron-forward-outline"></ion-icon>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <!-- Loop to include related product cards -->
                <?php 
                for ($i = 0; $i < 6; $i++) {
                    include 'include/product-card-wl.php';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
