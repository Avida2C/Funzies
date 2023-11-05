<?php 
// functions.php will contain any functionalities which may be required on more than one page. 
require 'functions.php';
require_once 'include/header.php';
?>

<?php 
// Start of Body //
require_once 'include/navbar.php';
?>


<div class="container col-sm-12 col-md-12 col-lg-9 col-xl-9 spacing-my p-1">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center me-4">

            <div class="list-group list-group-flush" id="accountOptions">
                <h3 class="product-card-font fs-5  my-1 border-bottom border-danger border-2 pb-3">Account
                </h3>
                <a class="list-group-item list-group-item-action active" data-bs-toggle="collapse" href="#overview"
                    role="button" aria-expanded="false">Profile Overview</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#details"
                    role="button" aria-expanded="false">Account Details</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#addresses"
                    role="button" aria-expanded="false">Addresses</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#orders" role="button"
                    aria-expanded="false">Orders</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#wishlist"
                    role="button" aria-expanded="false">Wishlist</a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="collapse" href="#reviews"
                    role="button" aria-expanded="false">Reviews</a>
                <a class="list-group-item list-group-item-action" href="#signout">Sign Out</a>
                <!-- No collapse for Sign Out -->
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8" id="account-sections">
            <div class="collapse fade show" data-bs-parent="#account-sections" id="overview">
                <h3 class="border-bottom border-2 border-danger pb-2">Profile Overview</h3>
                <div class="card-body ">
                    <!-- Profile Image and User Details -->
                    <div class="row align-items-center">
                        <div class="col-md-3 ">
                            <img src="img/comingsoon.jpg" alt="User's Name" class="img-fluid rounded-circle mb-3">
                        </div>
                        <div class="col-md-9">
                            <h4>Jane Doe</h4>
                            <p><strong>Joined:</strong> January 1, 2023</p>
                            <span class="badge rounded-pill text-bg-danger">UNVERIFIED</span>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="mt-4">
                        <h5>Default Shipping Address</h5>
                        <address>
                            123 Main St.<br>
                            City, ST 12345<br>
                            Country
                        </address>
                    </div>

                    <!-- Recent Orders -->
                    <div class="mt-4">
                        <h5>Recent Orders</h5>

                        <table class="table table-striped">
                            <tr>
                                <td>
                                    Order #12345 <br>
                                    Date: Jan 5, 2023 <br>
                                    Status: Shipped
                                </td>
                                <td>
                                    <p class="text-end"><a class="text-decoration-none text-danger" href="#">Order
                                            Details</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Order #12346 <br>
                                    Date: Jan 4, 2023 <br>
                                    Status: Delivered
                                </td>
                                <td>
                                    <p class="text-end"><a class="text-decoration-none text-danger" href="#">Order
                                            Details</a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h5 class="mt-4">Recently Viewed Products</h5>
                    <div class="container">
                        <div class="row justify-content-between">
                            <!-- Product cards -->
                            <?php 
                    for ($i = 0; $i < 3; $i++) {
                        // Include individual product card for the wishlist
                        include 'include/product-card-wl.php';
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="details">
                <h3 class="border-bottom border-2 border-danger pb-2">Account Details</h3>
                <!-- Account Details Section -->
                <div class="mt-4">
                    <!-- Account Verification Alert -->
                    <div class="alert alert-warning rounded-0" role="alert" id="verificationAlert">
                        Your account is not verified. <a href="#" class="alert-link">Click here</a> to resend the
                        verification email.
                    </div>
                </div>
                <!-- Update Full Name, Contact Number, and Address -->
                <form method="POST" class="form mt-3">
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control rounded-0" id="fullName" name="fullName" value="John Doe"
                            required>
                    </div>
                    <!-- Contact Number -->
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control rounded-0" id="contactNumber" name="contactNumber"
                            value="+1 234 567 890" required>
                    </div>
                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Default Address</label>
                        <textarea class="form-control rounded-0" id="address" name="address" rows="3"
                            required>123 Main St, City, Country</textarea>
                    </div>

                    <!-- Submit Button for Details -->
                    <button class="btn btn-danger rounded-0 mb-4">Update Details</button>
                </form>

                <!-- Update Email -->
                <form method="POST" class="form mt-3">
                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control rounded-0" id="emailAddress" name="emailAddress"
                            value="janedoe@example.com" required>
                    </div>
                    <!-- Submit Button for Email -->
                    <button class="btn btn-danger rounded-0 mb-4">Update Email</button>
                </form>
                <!-- Change Password -->
                <form method="POST" class="form mt-3">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control rounded-0" id="currentPassword"
                            name="currentPassword" placeholder="Enter current password" required>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control rounded-0" id="newPassword" name="newPassword"
                            placeholder="Enter new password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control rounded-0" id="confirmPassword"
                            name="confirmPassword" placeholder="Confirm new password" required>
                    </div>
                    <!-- Submit Button for Password -->
                    <button class="btn btn-danger rounded-0 mb-4">Change Password</button>
                </form>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="addresses">
                <h3 class="border-bottom border-2 border-danger pb-2">Addresses</h3>
                <!-- Addresses Section -->
                <div class="mt-4">
                    <h3 class="mb-3 product-card-font fs-5">Your Addresses</h3>

                    <!-- List of Addresses -->
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card shadow-sm border-0 rounded-0">
                                <div class="card-body">
                                    <h5 class="card-title">Jane Doe</h5>
                                    <p class="card-text">
                                        123 Main St<br>
                                        Apartment <br>
                                        Town, ZIP 12345<br>
                                        Country<br>
                                        Phone: (123) 456-7890
                                    </p>
                                    <a href="#" class="btn btn-primary btn-sm rounded-0">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm rounded-0">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button to Trigger Add New Address Modal -->
                    <button type="button" class="btn btn-success mt-2 rounded-0" data-bs-toggle="modal"
                        data-bs-target="#addAddressModal">
                        Add New Address
                    </button>

                    <!-- Add New Address Modal -->
                    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addAddressModalLabel">Add New Address</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control rounded-0" id="fullName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addressLine1" class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control rounded-0" id="addressLine1"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addressLine2" class="form-label">Address Line 2
                                                (Optional)</label>
                                            <input type="text" class="form-control rounded-0" id="addressLine2">
                                        </div>
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control rounded-0" id="city" required>
                                        </div>
                                        <!-- Add fields for state, postal code, country, etc. as needed -->
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control rounded-0" id="phone" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary rounded-0"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary rounded-0">Save Address</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="orders">
                <h3 class="border-bottom border-2 border-danger pb-2 rounded-0">Orders</h3>
                <div class="container mt-4">
                    <h2 class="product-card-font fs-5 mb-4">Your Orders</h2>

                    <!-- Order #12347 with 3 product images -->
                    <div class="card border-0 rounded-0 mb-3 shadow-sm" style="height: 15rem;">
                        <div class="card-header bg-danger border-0 text-white rounded-0">
                            Order #12347
                            <span class="badge bg-warning float-end rounded-0">Processing</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Date: Nov 3, 2023</h5>
                            <div class="row mb-3">
                                <div class="col-4 col-md-2">
                                    <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid mb-2"
                                        style="height:70px;">
                                </div>
                                <div class="col-4 col-md-2">
                                    <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid mb-2"
                                        style="height:70px;">
                                </div>
                                <div class="col-4 col-md-2">
                                    <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid mb-2"
                                        style="height:70px;">
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
                    <div class="card mb-3 rounded-0 border-0 shadow-sm" style="height: 15rem;">
                        <div class="card-header bg-danger text-white rounded-0 border-0">
                            Order #12345
                            <span class="badge bg-info rounded-0 float-end">Shipped</span>
                        </div>
                        <div class="card-body rounded-0">
                            <h5 class="card-title">Date: Nov 2, 2023</h5>
                            <div class="row justify-content-start mb-3">
                                <div class="col-6 col-md-3">
                                    <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid mb-2"
                                        style="height:70px;">
                                </div>
                                <div class="col-6 col-md-3">
                                    <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid mb-2"
                                        style="height:70px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-danger rounded-0" href="#">Order Details</a>
                                <!-- No Edit or Cancel buttons for shipped order -->
                            </div>
                        </div>
                    </div>

                    <!-- Order #12346 with 1 product image -->
                    <div class="card mb-3 shadow-sm rounded-0 border-0" style="height: 15rem;">
                        <div class="card-header rounded-0 bg-danger text-white">
                            Order #12346
                            <span class="badge rounded-0 bg-success float-end">Delivered</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Date: Nov 1, 2023</h5>
                            <div class="mb-3">
                                <img src="img/comingsoon.jpg" alt="Product Image" class="img-fluid"
                                    style="height:70px;">
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-danger rounded-0" href="#">Order Details</a>
                                <!-- No Edit or Cancel buttons for delivered order -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="wishlist">
                <h3 class="border-bottom border-2 border-danger pb-2">Wishlist</h3>
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- Product cards -->
                        <?php 
                    for ($i = 0; $i < 6; $i++) {
                        // Include individual product card for the wishlist
                        include 'include/product-card-wl.php';
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="collapse fade" data-bs-parent="#account-sections" id="reviews">
                <h3 class="border-bottom border-2 border-danger pb-2">Reviews</h3>
                <div class="container mt-4">
                    <table class="table table-striped align-middle">
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Review</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/comingsoon.jpg" alt="Product Image 1" width="50" height="50">
                            </td>
                            <td>Coming Soon - Info Unavailable</td>

                            <td>
                                I love this product! It's so useful.
                            </td>
                            <td>
                                <a href="#" class="text-primary text-decoration-none me-3">Edit</a>
                                <a href="#" class="text-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/comingsoon.jpg" alt="Product Image 2" width="50" height="50">
                            </td>
                            <td>Coming Soon - Info Unavailable</td>

                            <td>
                                Could be better. I had some issues.
                            </td>
                            <td>
                                <a href="#" class="text-primary text-decoration-none me-3">Edit</a>
                                <a href="#" class="text-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/comingsoon.jpg" alt="Product Image 3" width="50" height="50">
                            </td>
                            <td>Coming Soon - Info Unavailable</td>

                            <td>
                                Overall, a good purchase for the price.
                            </td>
                            <td>
                                <a href="#" class="text-primary text-decoration-none me-3">Edit</a>
                                <a href="#" class="text-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php  
require_once 'include/footer.php';
// End of Body //
?>