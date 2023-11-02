<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>


<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-3 div-spacing-mb">
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

<div class="container col-sm-12 col-md-12 col-lg-8 col-xl-8 div-spacing-mb">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <img src="img/comingsoon.jpg" class="img-thumbnail border-0 rounded-0" alt="...">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-4 border-0 shadow-sm rounded-0 p-4">
            <p class="text-end"><span class="badge rounded-pill bg-success">In Stock</span></p>
            <a href="#" class="text-decoration-none">
                <h5 class="fs-6 text-muted">Hopefully... Soon</h5>
            </a>

            <h3 class="fs-5 mb-4">Coming Soon - Info Unavailable</h3>
            <p class="text-danger product-card-font mb-4"> &euro;0.00</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel accusantium eos ipsum omnis corrupti sint,
                laborum a dolores totam voluptatum doloremque possimus maiores aspernatur cumque quod, corporis dolorem
                cupiditate nemo.
                Ipsum tempore officia architecto earum autem qui laboriosam suscipit quo. Ipsum obcaecati, distinctio
                odio impedit explicabo rem, quam mollitia assumenda error magni debitis, ea eius unde voluptates aperiam
                nisi omnis!</p>
            <button class="btn btn-danger rounded-0 w-100">Add To Cart</button>
            <hr>
            <button class="btn btn-success rounded-0 w-100">Add to Wishlist</button>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>