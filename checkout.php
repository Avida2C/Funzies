<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 

// Start of Body //
require_once 'include/navbar.php';
?>

<!-- Page Title -->
<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-mt mb-4">
    <h3 class="fs-3 text-center">Check Out</h3>
</div>

<div class="container col-sm-12 col-md-12 col-lg-10 col-xl-10 spacing-mb">
    <div class="row justify-content-center">
        <div class="col-5 me-4">
        <p class="product-card-font bg-danger p-2 fs-6 text-white w-100 mb-4">Already have an account? <a
            href="createAccount.php" class="text-decoration-none text-dark">Log In</a> for faster checkout!</p>

        
            <form class="form" method="POST">
                <h3 class="product-card-font fs-4 mb-3">Customer Details</h3>

                <label for="firstname">First Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" name="firstname">
                <label for="lastname">Last Name:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" name="lastname">
                <label for="email">Email:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="email" name="email">
                <label for="phone">Mobile Number:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="number" name="phone">


                <h3 class="product-card-font fs-4 my-3">Delivery Details</h3>
                <label for="region">Region:<span class="text-danger">*</span></label>
                <select name="region" class="form rounded-0 p-1 mb-3" style="width: 100%;">
                    <option selected>Malta</option>
                    <option value="1">Gozo</option>
                </select>
                <label for="address">Address:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" name="address">
                <label for="city">City:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" name="city">
                <label for="zipcode">ZIP Code:<span class="text-danger">*</span></label>
                <input class="w-100 p-1 mb-3" type="text" name="zipcode">
                <button type="button" onclick="document.location='orderconfirmed.php'" class="btn w-100 btn-danger rounded-0">
                    Complete Order
                </button>
            </form>
            <p class="product-card-font fs-6 py-3">
                <ion-icon class="align-middle" name="lock-closed"></ion-icon> Secure Checkout
            </p>
        </div>
        <div class="col-4 px-3">
            <div class="row">
                <div class="col-6 ">
                    <h3 class="fs-5">Order Summary</h3>
                </div>
                <div class="col-6">
                    <p class="text-end"><a class="text-decoration-none text-danger " href="viewcart.php">Edit Order</a>
                    </p>
                </div>
            </div>

            <div class="container overflow-auto" style="height:350px;">
                <table class="table">
                    <tr class="align-middle">
                        <td>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                                </div>
                                <div class="col-8 text-start">
                                    <p class="fs-6">Coming Soon - Info Unavailable
                                        <span class="product-card-font fs-6">X1</span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                                </div>
                                <div class="col-8 text-start">
                                    <p class="fs-6">Coming Soon - Info Unavailable
                                        <span class="product-card-font fs-6">X1</span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                                </div>
                                <div class="col-8 text-start">
                                    <p class="fs-6">Coming Soon - Info Unavailable
                                        <span class="product-card-font fs-6">X1</span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                                </div>
                                <div class="col-8 text-start">
                                    <p class="fs-6">Coming Soon - Info Unavailable
                                        <span class="product-card-font fs-6">X1</span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                        </td>
                    </tr>
                </table>
            </div>
            <table class="table table-borderless text-center">
                <tr>
                    <td class="py-2">
                        Subtotal
                    </td>
                    <td class="py-2">
                        &euro;0.00
                    </td>
                </tr>
                <tr>
                    <td class="py-2">
                        Delivery
                    </td>
                    <td class="py-2">
                        &euro;0.00
                    </td>
                </tr>
                <tr class="border-top">
                    <th class="py-2">
                        <p class="product-card-font fs-5">
                            Total
                        </p>
                    </th>
                    <td class="py-2">
                        <p class="product-card-font text-danger fs-5">
                            &euro;0.00
                        </p>
                    </td>
                </tr>
            </table>
            <div class="container mt-4 bg-danger text-white p-3 text-center">
                <h3 class="product-card-font fs-5">Delivery</h3>
                <p>Monday to Friday</p>
                <h3 class="product-card-font fs-5">Payment on Delivery</h3>
                <p>Cash, Revolut or BOV Pay Only</p>
            </div>

        </div>
    </div>
</div>









<?php  
require_once 'include/footer.php';
// End of Body //
?>