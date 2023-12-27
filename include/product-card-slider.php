<div class="container border-bottom py-1" style="height: 145px;">
    <!-- Product Display Card Container -->
    <div class="row">
        <div class="col-4 align-middle">
            <!-- Product Image -->
            <img class="w-100 object-fit-cover" src="<?php echo $item["Image"] ?>" alt="<?php echo $item['Name']; ?>">
        </div>
        <!-- Product Details and Quantity Selector -->
        <div class="col-6 text-start">
            <!-- Product Name -->
            <h3 class="fs-6"><?php echo $item['Name']; ?></h3>
            <div class="row d-flex">
                <div class="col mb-2">
                    <!-- Quantity Selector -->
                    <div class="quantity-selector">
                        <!-- Decrement Button -->
                        <button class="quantity-button decrement-btn" value="<?php echo $item["ID"]?>">-</button>
                        <!-- Quantity Display Input -->
                        <input type="text" class="quantity quantity-input quantity-input<?php echo $item["ID"]?>" name="quantity" value="<?php echo $item["Quantity"] ?>" readonly>
                        <!-- Increment Button -->
                        <button class="quantity-button increment-btn" value="<?php echo $item["ID"]?>">+</button>
                        <!-- Hidden input for maximum stock available -->
                        <input type="hidden" id="maxStock<?php echo $item["ID"]?>" value="<?php echo $item["Stock"] ?>"> 
                    </div>
                </div>
            </div>
            <input type="hidden" id="prodPrice<?php echo $item["ID"] ?>" value="<?php echo $item["Price"] ?>">
            <!-- Product Price: Calculated as Price * Quantity -->
            <p class="product-card-font fs-5 text-danger subtotalprice<?php echo $item["ID"] ?>">&euro;<?php echo number_format((float) ($item["Price"] * $item["Quantity"]), 2, '.', '');?></p>
        </div>
        <!-- Close Button -->
        <div class="col-2">
            <form method="POST">
                <!-- Hidden input to identify the item to be deleted -->
                <input type="hidden" name="deleteCartItem" value="<?php echo $item['ID']; ?>" >
                <button type="submit" class="btn-close" aria-label="Close"></button>
            </form>
        </div>
    </div>
</div>
