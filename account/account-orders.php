<?php

$user = $_SESSION["USER"];

$sqlOrders = GetOrdersByUser($con, $user["ID"]);
$userOrders = [];
while ($row = mysqli_fetch_assoc($sqlOrders)) {
    $ord["ID"] = $row["ID"];
    $t = strtotime($row["created"]);
    $ord["CreatedDate"] = date('M j, Y',$t);
    $ord["Status"] = $row["Status"];
    $ord["Address"] = GetAddressByID($con, $row["address"]);
    $prods = GetOrderProducts($con, $row["ID"]);
    $ord["Products"] = [];
    if(isset($prods) && $prods->num_rows > 0) {
        while ($rowProduct = mysqli_fetch_assoc($prods)) {
            $p = GetProductByID($con, $rowProduct["productid"]);
            $p["Quantity"] = $rowProduct["quantity"];
            array_push($ord["Products"], $p);
        }
        array_push($userOrders, $ord);
    }
}

?>

<h3 class="border-bottom border-2 border-danger pb-2 rounded-0">Orders</h3>
<!-- Section Heading -->

<div class="container mt-4">
    <!-- Subheading for Displaying User's Orders -->
    <h2 class="product-card-font fs-5 mb-4">Your Orders</h2>

    <!-- Order #12347 with 3 product images -->
    <?php foreach($userOrders as $o) : ?>
    <div class="card border-0 rounded-0 mb-3 shadow-sm order-card">
        <div class="card-header bg-danger border-0 text-white rounded-0">
            Order #<?php echo $o["ID"] ?>
            <span class="badge bg-warning float-end rounded-0"><?php echo $o["Status"] ?></span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Date: <?php echo $o["CreatedDate"] ?></h5>
            <div class="row mb-3">
                <?php foreach($o["Products"] as $p) : ?>
                <div class="col-4 col-md-2">
                    <img src="<?php echo $p["Image"] ?>" alt="<?php echo $p["Name"] ?>" class="order-product-img img-fluid mb-2">
                </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex justify-content-end">
                <!-- Modal opening button -->
                <a class="btn btn-outline-danger rounded-0" data-bs-toggle="modal" data-bs-target="#orderDetails<?php echo $o['ID'] ?>">Order
                    Details</a>
                <a class="btn btn-danger rounded-0" href="#">Cancel Order</a>

                <!-- Modal -->
                <div class="modal fade" id="orderDetails<?php echo $o['ID'] ?>" tabindex="-1" aria-labelledby="#orderDetails<?php echo $o['ID'] ?>Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">

                            <!-- Modal Title -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="orderDetails<?php echo $o['ID'] ?>Label">Order #<?php echo $o["ID"] ?> </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal-body">
                                <h3 class="product-card-font fs-6 text-center">Order Summary</h3>
                                <div class="container overflow-auto" style="height:150px;">
                                    <!-- Order contents : Products w/ Prices -->
                                    <table class="table table-borderless">
                                        <?php $total = 5; ?>
                                            <?php foreach($o["Products"] as $p) : ?>
                                            <?php $total += $p["Price"]; ?>
                                            <tr>
                                                <td>
                                                    <p class="clearMP"><?php echo $p["Name"] ?>
                                                        <span class="product-card-font fs-6">X<?php echo $p["Quantity"] ?></span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="clearMP">&euro;<?php echo number_format($p["Price"], 2, '.', ',') ?></p>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td>
                                                <p class="clearMP">Delivery
                                                    <span class="product-card-font fs-6"></span>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="clearMP">&euro;5.00</p>
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
                                                &euro;<?php echo number_format($total, 2, '.', ',') ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Order and Address Details -->
                            <div class="container px-4">
                                <h3 class="fs-5">Shipped to:</h3>
                                <p>
                                    <?php echo $o["Address"]["Name"] . ' ' . $o["Address"]["Surname"] ?>
                                    <br><?php echo $o["Address"]["Street"] ?>
                                    <br><?php echo $o["Address"]["City"] ?>
                                    <br><?php echo $o["Address"]["ZipCode"] ?>
                                    <br><?php echo $o["Address"]["Region"] ?>
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
    <?php endforeach; ?>
    <!-- Order end -->
</div>