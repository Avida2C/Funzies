function buttonSwitch(btnClicked) {
    if (btnClicked == "login") {
        $(".btnLogin").css("display", "none");
        $(".btnRegister").css("display", "");
    } else {
        $(".btnLogin").css("display", "");
        $(".btnRegister").css("display", "none");
    }
}

$(document).ready(function () {

    // Increment Quantity
    $(".quantity-selector .increment-btn").click(function () {
        let $input = $(this).prev(".quantity-input");
        let value = parseInt($input.val(), 10);

        if (value < 99) {
            $input.val(value + 1);
        }
    });

    // Decrement Quantity
    $(".quantity-selector .decrement-btn").click(function () {
        let $input = $(this).next(".quantity-input");
        let value = parseInt($input.val(), 10);

        if (value > 1) {
            $input.val(value - 1);
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
    window.location.href = 'account.php#wishlist';
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
    window.location.href = 'account.php#wishlist';
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