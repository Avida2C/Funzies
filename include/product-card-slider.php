<div class="container border-bottom py-1" style="height: 145px;">
    <div class="row">
        <div class="col-4 align-middle">
            <img class="w-100 object-fit-cover" src="img/comingsoon.jpg" alt="Coming Soon Product">
        </div>
        <div class="col-6 text-start">
            <h3 class="fs-6">Coming Soon - Info Unavailable</h3>
            <div class="row d-flex">
                <div class="col mb-2">
                    <div class="quantity-selector">
                        <button onclick="decrementValue()" id="decrement" class="quantity-button">-</button>
                        <input type="text" id="quantity" name="quantity" value="1" readonly>
                        <button onclick="incrementValue()" id="increment" class="quantity-button">+</button>
                    </div>
                </div>
            </div>
            <p class="product-card-font fs-5 text-danger m-0 p-0">&euro;0.00</p>
        </div>
        <div class="col-2">
            <button type="button" class="btn-close" aria-label="Close"></button>
        </div>
    </div>
</div>
