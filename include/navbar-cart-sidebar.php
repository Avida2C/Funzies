<div class="offcanvas offcanvas-end h-100" tabindex="-1" id="ShoppingCart" aria-labelledby="ShoppingCartLabel">
    <!-- Shopping Cart Panel -->
    <div class="offcanvas-header border-bottom border-3 border-danger">
        <h5 class="offcanvas-title" id="ShoppingCartLabel">Shopping Cart</h5>
        <!-- Close Button -->
        <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <!-- Content -->
    <div class="offcanvas-body w-100 h-100">
        <div class="row h-100">
            <div class="col-12 overflow-auto" style="height: 85%;">
                <!-- Product Cards Section -->
                <?php 
                // PHP Loop to Include Product Cards i (6) amount of cards in the Shopping Cart
                for ($i = 0; $i < 6; $i++) {
                    include 'include/product-card-slider.php';
                }
                ?>
            </div>
            <!-- Cart Summary and View Cart Button -->
            <div class="col align-self-end">
                <div class="row d-flex justify-content-between py-2 h-100">
                    <div class="col">
                        <h3 class="fs-6 text-start mt-2">Subtotal:</h3>
                    </div>
                    <div class="col">
                        <!-- Subtotal -->
                        <p class="product-card-font">&euro;0.00</p>
                    </div>
                </div>
                <button onclick="document.location='viewcart.php'" class="btn btn-danger rounded-0 w-100">View
                    Cart</button>
            </div>
        </div>
    </div>
</div>