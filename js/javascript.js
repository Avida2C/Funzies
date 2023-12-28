function buttonSwitch(btnClicked) {
    if (btnClicked == "login") {
        $(".btnLogin").css("display", "none");
        $(".btnLogin").addClass("active");
        $(".btnRegister").css("display", "");
        $(".btnRegister").removeClass("active");
    } else {
        $(".btnLogin").css("display", "");
        $(".btnLogin").removeClass("active");
        $(".btnRegister").css("display", "none");
        $(".btnRegister").addClass("active");
    }
}

$(document).ready(function () {
    // Increment Quantity
    $(".quantity-selector .increment-btn").click(function () {
        let $input = $(".quantity-input" + $(this).val());
        let value = parseInt($($input[0]).val(), 10);
        var stock = parseInt($('#maxStock' + $(this).val()).val());
        if (value <= stock) {
            value++;
            $input.each(function() {
                $(this).val(value);
            });
            $input.val(value);
            $.post('updatecartquantity.php', { ID: $(this).val(), Quantity: (value) });
            let price = parseFloat($('#prodPrice' + $(this).val()).val());
            let delivery = parseFloat($('#deliveryPrice').val());
            let subtotal = (price * value).toFixed(2);
            let allsubtotal = parseFloat($($('.subTotalPrice')[0]).text().trim().substring(1));
            allsubtotal += price;
            let total = allsubtotal + delivery;
            
            $('.subtotalprice' + $(this).val()).each(function (){
                $(this).text('€' + subtotal);
            });
            $('.subTotalPrice').each(function(){
                $(this).text('€' + allsubtotal.toFixed(2));
            });
            $('#totalPrice').text('€' + total.toFixed(2));
        }
        
    });

    // Decrement Quantity
    $(".quantity-selector .decrement-btn").click(function () {
        let $input = $(".quantity-input" + $(this).val());
        let value = parseInt($($input[0]).val(), 10);

        if (value > 1) {
            value--;
            $input.each(function () {
                $(this).val(value);
            });
            $.post('updatecartquantity.php', { ID: $(this).val(), Quantity: (value) });
            let price = parseFloat($('#prodPrice' + $(this).val()).val());
            let delivery = parseFloat($('#deliveryPrice').val());
            let subtotal = (price * value).toFixed(2);
            let allsubtotal = parseFloat($($('.subTotalPrice')[0]).text().trim().substring(1));
            allsubtotal -= price;
            let total = allsubtotal + delivery;
            
            $('.subtotalprice' + $(this).val()).each(function (){
                $(this).text('€' + subtotal);
            });
            $('.subTotalPrice').each(function(){
                $(this).text('€' + allsubtotal.toFixed(2));
            });
            $('#totalPrice').text('€' + total.toFixed(2));
        }
    });
});

$(document).ready(function () {
    $('#accountOptions').on('click', '.list-group-item-action:not(.disabled)', function () {
        // Check if clicked item is already active
        if ($(this).hasClass('active')) {
            return; // Exit the function if it's already active
        }

        // Remove 'active' and 'disabled' classes from all items
        $('.list-group-item-action').removeClass('active disabled');

        // Add 'active' and 'disabled' classes to the clicked item
        $(this).addClass('active disabled');
    });
});

// Navigate from navbar to account.php#wishlist, where user is taken to the wishlist
function navigateToWishlist() {
    window.location.href = 'account.php#accountwishlist';
    window.onload = function () {
        scrollToWishlist();
    }
}

// this code is used to check whether to show or hide content depending on the .hash location
$(document).ready(function () {
    // If there's a hash in the URL
    if (window.location.hash) {
        let target = window.location.hash;

        // Hide any other active sections and remove active state from all list group items
        $('.collapse.show').removeClass('show');
        $('.list-group-item-action.active').removeClass('active');

        // Show the target section and highlight the corresponding list group item
        $(target).addClass('show');
        $('a[href="' + target + '"]').addClass('active');

    } else {
        // Default to "Profile Overview" as the active section if no hash is present
        $('#overview').addClass('show');
        $('a[href="#overview"]').addClass('active'); // Changed to #overview, assuming this was the intended behavior.
    }
});

$(document).ready(function () {
    $('#accountOptions').on('click', '.list-group-item-action:not(.disabled)', function () {
        // Check if clicked item is already active
        if ($(this).hasClass('active')) {
            return; // Exit the function if it's already active
        }

        // Remove 'active' and 'disabled' classes from all items
        $('.list-group-item-action').removeClass('active disabled');

        // Add 'active' and 'disabled' classes to the clicked item
        $(this).addClass('active disabled');
    });
});

// Navigate from navbar to account.php#wishlist, where user is taken to the wishlist
function navigateToWishlist() {
    window.location.href = 'account.php#accountwishlist';
    window.onload = function () {
        scrollToWishlist();
    }
}

function navigateToOrders() {
    window.location.href = 'account.php#accountorders';
    window.onload = function () {
        scrollToOrders();
    }
}

// this code is used to check whether to show or hide content depending on the .hash location
$(document).ready(function () {
    // If there's a hash in the URL
    if (window.location.hash) {
        let target = window.location.hash;

        // Hide any other active sections and remove active state from all list group items
        $('.collapse.show').removeClass('show');
        $('.list-group-item-action.active').removeClass('active');

        // Show the target section and highlight the corresponding list group item
        $(target).addClass('show');
        $('a[href="' + target + '"]').addClass('active');

    } else {
        // Default to "Profile Overview" as the active section if no hash is present
        $('#overview').addClass('show');
        $('a[href="#overview"]').addClass('active'); // Changed to #overview, assuming this was the intended behavior.
    }
});

function setModalAddressFields(id, name, surname, street, city, zipcode, region, defaultAddress, numRows) {
    $("#addressID").val(id);
    $("#addressfirstname").val(name);
    $("#addresslastname").val(surname);
    $("#address-input").val(street);
    $("#region-select").val(region);
    $("#city-input").val(city);
    $("#zipcode-input").val(zipcode);
    $("#default-address-input").prop('checked', defaultAddress);
    if(numRows == 1) $("#default-address-input").prop( "disabled", true );
}

function clearModalAddressFields() {
    $("#addressID").val("");
    $("#addressfirstname").val("");
    $("#addresslastname").val("");
    $("#address-input").val("");
    $("#region-select").val("");
    $("#city-input").val("");
    $("#zipcode-input").val("");
    //$("#default-address-input").prop('checked', false);
    //$("#default-address-input").prop("disabled", false);
}

function setValToAddToCart(guid) {
    $("#setAddToCart" + guid).val("true");
    $("#addProductCardToCartForm" + guid).submit();
}