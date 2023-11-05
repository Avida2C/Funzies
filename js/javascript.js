// This code is used in the signup/login page, 
// which determines which content and button to show, if one is active
function buttonSwitch(btnClicked) {
    if (btnClicked === "login") {
        $(".btnLogin").hide();
        $(".btnRegister").show();
    } else {
        $(".btnLogin").show();
        $(".btnRegister").hide();
    }
}

// This code is used to add or subtract values in the quantity box
$(document).ready(function () {
    $(".quantity-button").click(function () {
        let $input = $(this).siblings(".quantity-input");
        let value = parseInt($input.val(), 10);

        if ($(this).hasClass("increment-btn") && value < 99) {
            $input.val(value + 1);
        } else if ($(this).hasClass("decrement-btn") && value > 1) {
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
        $('a[href="#overview"]').addClass('active');  // Changed to #overview, assuming this was the intended behavior.
    }
});