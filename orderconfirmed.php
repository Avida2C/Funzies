<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 

// Start of Body //
require_once 'include/navbar.php';
?>

<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-my">
    <div class="row justify-content-center">
        <div class="col-5">
            <h3 class="product-card-font fs-4 text-danger">Order confirmed! </h3>
            <p class="fs-6 mb-4">The adventure starts now! Your order has arrived in our
                world, poised for a thrilling journey to your doorstep. Brace yourself for a delivery team touchdown –
                we'll be ringing you soon to make your day extra special!</p>
            <h3 class="fs-5">Customer Details</h3>
            <p>
                FirstName LastName
                <br>0123, House name,
                <br>Street,
                <br>Town, ZPC 001
                <br> Country
            </p>
        </div>
        <div class="col-4">
            <h3 class="product-card-font fs-6 text-center">Order Summary</h3>
            </p>
            <div class="container overflow-auto" style="height:150px;">
                <table class="table table-borderless">
                    <tr>
                        <td>
                            <p class="clearMP">Coming Soon - Info Unavailable
                                <span class="product-card-font fs-6">X1</span></p>
                        </td>
                        <td>
                            <p class="clearMP">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="clearMP">Coming Soon - Info Unavailable
                                <span class="product-card-font fs-6">X1</span></p>
                        </td>
                        <td>
                            <p class="clearMP">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="clearMP">Coming Soon - Info Unavailable
                                <span class="product-card-font fs-6">X1</span></p>
                        </td>
                        <td>
                            <p class="clearMP">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="clearMP">Coming Soon - Info Unavailable
                                <span class="product-card-font fs-6">X1</span></p>
                        </td>
                        <td>
                            <p class="clearMP">&euro;0.00</p>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="table table-borderless text-center">
                <tr class="border-top">
                    <th class="py-2">
                        <p>
                            Total
                        </p>
                    </th>
                    <td class="py-2">
                        <p class="text-danger product-card-font fs-6">
                            &euro;0.00
                        </p>
                    </td>
                </tr>
            </table>
            <div class="row">
                <div class="col-12 text-center">
                    <button onclick="document.location='index.php'" class="btn btn-danger rounded-0"
                        style="width: 190px;">
                        Home
                    </button>
                    <button class="btn btn-danger rounded-0" style="width: 190px;">
                        Check my order
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>