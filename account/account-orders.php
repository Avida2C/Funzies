<h3 class="border-bottom border-2 border-danger pb-2 rounded-0">Orders</h3>
<!-- Section Heading -->

<div class="container mt-4">
    <!-- Subheading for Displaying User's Orders -->
    <h2 class="product-card-font fs-5 mb-4">Your Orders</h2>

    <!-- Order #12347 with 3 product images -->
    <div class="card border-0 rounded-0 mb-3 shadow-sm order-card">
        <div class="card-header bg-danger border-0 text-white rounded-0">
            Order #12347
            <span class="badge bg-warning float-end rounded-0">Processing</span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Date: Nov 3, 2023</h5>
            <div class="row mb-3">
                <div class="col-4 col-md-2">
                    <img src="img/comingsoon.jpg" alt="Product Image" class="order-product-img img-fluid mb-2">
                </div>
                <div class="col-4 col-md-2">
                    <img src="img/comingsoon.jpg" alt="Product Image" class="order-product-img img-fluid mb-2">
                </div>
                <div class="col-4 col-md-2">
                    <img src="img/comingsoon.jpg" alt="Product Image" class="order-product-img img-fluid mb-2">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <!-- Modal opening button -->
                <a class="btn btn-outline-danger rounded-0" data-bs-toggle="modal" data-bs-target="#orderDetails2">Order
                    Details</a>
                <a class="btn btn-danger rounded-0" href="#">Cancel Order</a>

                <!-- Modal -->
                <div class="modal fade" id="orderDetails2" tabindex="-1" aria-labelledby="#orderDetails2Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">

                            <!-- Modal Title -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="orderDetails2Label">Order #12347</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-body">
                                <h3 class="product-card-font fs-6 text-center">Order Summary</h3>
                                <div class="container overflow-auto" style="height:150px;">
                                    <!-- Order contents : Products w/ Prices -->
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>
                                                <p class="clearMP">Coming Soon - Info Unavailable
                                                    <span class="product-card-font fs-6">X1</span>
                                                </p>
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
                            </div>

                            <!-- Order and Address Details -->
                            <div class="container px-4">
                                <h3 class="fs-5">Shipped to:</h3>
                                <p>
                                    FirstName LastName
                                    <br>0123, House name,
                                    <br>Street,
                                    <br>Town, ZPC 001
                                    <br>Region
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-0"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->
            </div>
        </div>
    </div>
    <!-- Order end -->

    <!-- Order #12345 with 2 product images -->
    <div class="card mb-3 rounded-0 border-0 shadow-sm order-card">
        <div class="card-header bg-danger text-white rounded-0 border-0">
            Order #12345
            <span class="badge bg-info rounded-0 float-end">Shipped</span>
        </div>
        <div class="card-body rounded-0">
            <h5 class="card-title">Date: Nov 2, 2023</h5>
            <div class="row justify-content-start mb-3">
                <div class="col-6 col-md-3">
                    <img src="img/comingsoon.jpg" alt="Product Image" class="order-product-img img-fluid mb-2">
                </div>
                <div class="col-6 col-md-3">
                    <img src="img/comingsoon.jpg" alt="Product Image" class="order-product-img img-fluid mb-2">
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <!-- Modal opening button -->
                <a class="btn btn-outline-danger rounded-0" data-bs-toggle="modal" data-bs-target="#orderDetails1">Order
                    Details</a>

                <!-- No Edit or Cancel buttons for delivered order -->

                <!-- Modal -->
                <div class="modal fade" id="orderDetails1" tabindex="-1" aria-labelledby="#orderDetails1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="orderDetails1Label">Order #12345</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Modal Content -->
                            <div class="modal-body">
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
                            </div>
                            <!-- Order and Address details -->
                            <div class="container px-4">
                                <h3 class="fs-5">Shipped to:</h3>
                                <p>
                                    FirstName LastName
                                    <br>0123, House name,
                                    <br>Street,
                                    <br>Town, ZPC 001
                                    <br>Region
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-0"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->
            </div>
        </div>
    </div>
    <!-- Order End -->

    <!-- Order #12346 with 1 product image -->
    <div class="card mb-3 shadow-sm rounded-0 border-0 order-card">
        <div class="card-header rounded-0 bg-danger text-white">
            Order #12346
            <span class="badge rounded-0 bg-success float-end">Delivered</span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Date: Nov 1, 2023</h5>
            <div class="mb-3">
                <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid order-product-img">
            </div>
            <div class="d-flex justify-content-end">
                <!-- Modal opening button -->
                <a class="btn btn-outline-danger rounded-0" data-bs-toggle="modal" data-bs-target="#orderDetails">Order
                    Details</a>
            
                <!-- No Edit or Cancel buttons for delivered order -->

                <!-- Modal -->
                <div class="modal fade" id="orderDetails" tabindex="-1" aria-labelledby="#orderDetailsLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="orderDetailsLabel">Order #12346</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
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
                            </div>
                            <!-- Order and Address details -->
                            <div class="container px-4">
                                <h3 class="fs-5">Delivered to:</h3>
                                <p>
                                    FirstName LastName
                                    <br>0123, House name,
                                    <br>Street,
                                    <br>Town, ZPC 001
                                    <br>Region
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-0"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->
            </div>
        </div>
    </div>
    <!-- Order End -->
</div>