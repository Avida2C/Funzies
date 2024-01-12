/**
 * Switches between login and register buttons based on the button clicked.
 * @param {string} btnClicked - The button that was clicked ("login" or "register").
 * @returns None
 */
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

/**
 * A jQuery function that handles the increment and decrement buttons for a quantity selector.
 * @returns None
 */
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

/**
 * Initializes an event listener for the click event on the elements with the class "list-group-item-action"
 * inside the element with the id "accountOptions". When a non-disabled element is clicked, it adds the "active"
 * and "disabled" classes to the clicked element and removes those classes from all other elements with the same class.
 * @returns None
 */
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

/**
 * Initializes an event listener for the click event on the elements with the class "list-group-item-action"
 * inside the element with the id "accountOptions". When a non-disabled element is clicked, it adds the "active"
 * and "disabled" classes to the clicked element and removes those classes from all other elements with the same class.
 * @returns None
 */
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

/**
 * Navigates the user to the wishlist page and scrolls to the wishlist section.
 * @returns None
 */
function navigateToWishlist() {
    window.location.href = 'account.php#accountwishlist';
    window.onload = function () {
        scrollToWishlist();
    }
}

/**
 * Navigates the user to the orders section of the account page.
 * It sets the window location to 'account.php#accountorders' and scrolls to the orders section
 * once the page has finished loading.
 * @returns None
 */
function navigateToOrders() {
    window.location.href = 'account.php#accountorders';
    window.onload = function () {
        scrollToOrders();
    }
}

/**
 * Executes the code inside the function when the document is ready.
 * If the window location has a hash, it finds the element with the matching hash and adds the 'show' class to it.
 * It also adds the 'active' class to the corresponding anchor element.
 * If there is no hash in the window location, it adds the 'show' class to the element with the id 'overview'.
 * It also adds the 'active' class to the anchor element with the href value '#overview'.
 * @returns None
 */
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

/**
 * Sets the values of the modal address fields with the provided data.
 * @param {string} id - The ID of the address.
 * @param {string} name - The first name of the address owner.
 * @param {string} surname - The last name of the address owner.
 * @param {string} street - The street address.
 * @param {string} city - The city name.
 * @param {string} zipcode - The postal code.
 * @param {string} region - The region or state.
 * @param {boolean} defaultAddress - Indicates if the address is the default address.
 * @param {number} numRows - The number of rows in the address table.
 * @returns None
 */
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

/**
 * Clears the input fields in a modal for entering address information.
 * @returns None
 */
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

/**
 * Sets the value of the "addToCart" input field to "true" and submits the form to add the product card to the cart.
 * @param {string} guid - The unique identifier of the product card.
 * @returns None
 */
function setValToAddToCart(guid) {
    $("#setAddToCart" + guid).val("true");
    $("#addProductCardToCartForm" + guid).submit();
}