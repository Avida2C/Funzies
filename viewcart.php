<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>

<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-mt">
    <h3 class="fs-4">Shopping Cart</h3>
</div>

<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-mb text-center">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 overflow-auto me-4" style="height: 475px;">
            <table class="table">
                <tr>
                    <th>
                        Product
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price
                    </th>
                </tr>
                <tr class="align-middle">
                    <td class="px-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <button type="button" class="btn-close"></button>
                            </div>
                            <div class="col-3">
                                <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                            </div>
                            <div class="col-8 text-start">
                                <p class="fs-6">Coming Soon - Info Unavailable Coming Soon - Info Unavailable</p>
                                <p class="product-card-font fs-6">&euro;0.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="quantity-selector">
                            <button class="quantity-button decrement-btn">-</button>
                            <input type="text" class="quantity quantity-input" name="quantity" value="1" readonly>
                            <button class="quantity-button increment-btn">+</button>
                        </div>
                    </td>
                    <td class="px-4">
                        <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class="px-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <button type="button" class="btn-close"></button>
                            </div>
                            <div class="col-3">
                                <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                            </div>
                            <div class="col-8 text-start">
                                <p class="fs-6">Coming Soon - Info Unavailable Coming Soon - Info Unavailable</p>
                                <p class="product-card-font fs-6">&euro;0.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="quantity-selector">
                            <button class="quantity-button decrement-btn">-</button>
                            <input type="text" class="quantity quantity-input" name="quantity" value="1" readonly>
                            <button class="quantity-button increment-btn">+</button>
                        </div>
                    </td>
                    <td class="px-4">
                        <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class="px-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <button type="button" class="btn-close"></button>
                            </div>
                            <div class="col-3">
                                <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                            </div>
                            <div class="col-8 text-start">
                                <p class="fs-6">Coming Soon - Info Unavailable Coming Soon - Info Unavailable</p>
                                <p class="product-card-font fs-6">&euro;0.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="quantity-selector">
                            <button class="quantity-button decrement-btn">-</button>
                            <input type="text" class="quantity quantity-input" name="quantity" value="1" readonly>
                            <button class="quantity-button increment-btn">+</button>
                        </div>
                    </td>
                    <td class="px-4">
                        <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class="px-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <button type="button" class="btn-close"></button>
                            </div>
                            <div class="col-3">
                                <img style="height: 70px;" src="img/comingsoon.jpg" alt="">
                            </div>
                            <div class="col-8 text-start">
                                <p class="fs-6">Coming Soon - Info Unavailable Coming Soon - Info Unavailable</p>
                                <p class="product-card-font fs-6">&euro;0.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="quantity-selector">
                            <button class="quantity-button decrement-btn">-</button>
                            <input type="text" class="quantity quantity-input" name="quantity" value="1" readonly>
                            <button class="quantity-button increment-btn">+</button>
                        </div>
                    </td>
                    <td class="px-4">
                        <p class="product-card-font fs-5 text-danger">&euro;0.00</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
            <h3 class="fs-5">Order Summary</h3>
            <table class="table table-borderless">
                <tr>
                    <td class="py-3">
                        Subtotal
                    </td>
                    <td class="py-3">
                        &euro;0.00
                    </td>
                </tr>
                <tr>
                    <td class="py-3">
                        Delivery
                    </td>
                    <td class="py-3">
                        &euro;0.00
                    </td>
                </tr>
                <tr class="border-top">
                    <th class="py-">
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
            <button onclick="document.location='checkout.php'" class="btn w-100 btn-danger rounded-0">
                Proceed to Checkout
            </button>
            <p class="product-card-font fs-6 py-3">
                <ion-icon class="align-middle" name="lock-closed"></ion-icon> Secure Checkout
            </p>
        </div>
    </div>
</div>

<?php  
require_once 'include/footer.php';
// End of Body //
?>
