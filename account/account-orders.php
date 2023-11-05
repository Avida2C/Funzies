<h3 class="border-bottom border-2 border-danger pb-2 rounded-0">Orders</h3>
<div class="container mt-4">
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
                <a class="btn btn-outline-danger me-2 rounded-0" href="#">Order Details</a>
                <a class="btn btn-outline-warning me-2 rounded-0" href="#">Edit</a>
                <a class="btn btn-danger rounded-0" href="#">Cancel Order</a>
            </div>
        </div>
    </div>

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
                <a class="btn btn-outline-danger rounded-0" href="#">Order Details</a>
                <!-- No Edit or Cancel buttons for shipped order -->
            </div>
        </div>
    </div>

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
                <a class="btn btn-outline-danger rounded-0" href="#">Order Details</a>
                <!-- No Edit or Cancel buttons for delivered order -->
            </div>
        </div>
    </div>
</div>