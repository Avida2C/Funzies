<h3 class="border-bottom border-2 border-danger pb-2">Profile Overview</h3>
<div class="card-body">
    <!-- Profile Image and User Details -->
    <div class="row align-items-center">
        <div class="col-sm-7 col-md-8 col-lg-9">

            <!-- Adjusted the column size -->
            <h4><?php echo $user["Name"] . " " . $user["Surname"]?></h4>
            <p><strong>Joined:</strong> <?php echo $user["Joined"]?></p>
                <?php if($user['Verified'] == 1) {
                    echo '<div class="col"><span class="badge rounded-pill text-bg-success"
                    aria-label="Account status: verified">VERIFIED</span></div>';
                }
                else
                {
                    echo '<div class="col"><span class="badge rounded-pill text-bg-danger"
                    aria-label="Account status: Unverified">UNVERIFIED</span></div>';
                }
                ?>
        </div>
    </div>

    <!-- Shipping Address -->
    <div class="mt-4">
        <h5>Default Shipping Address</h5>
        <address>
            FirstName LastName
            <br>0123, House name,
            <br>Street,
            <br>Town, ZPC 001
            <br>Region
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
    <!-- <h5 class="mt-4">Recently Viewed Products</h5>
    <div class="container">
        <div class="row justify-content-between"> -->
            <!-- Product cards -->
            <?php 
            //for ($i = 0; $i < 3; $i++) {
                // Include individual product card for the wishlist
            //    include 'include/product-card-wl.php';
            //}
            ?>
        <!-- </div> -->
    <!-- </div> -->
</div>
