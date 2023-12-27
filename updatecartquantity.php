<?php
// Check if a session has not been started yet and start the session.
if(!isset($_SESSION)) { 
    session_start(); 
} 
// Check if both 'ID' and 'Quantity' have been posted from a form submission.
if (isset($_POST['ID']) && isset($_POST['Quantity'])) {
    foreach($_SESSION['CART_ITEMS'] as $key => $value) {
        // Check if the current item's ID matches the posted ID.
        if($value['ID'] == $_POST['ID']) {
            // Update the quantity for the matching item in the session.
            $_SESSION['CART_ITEMS'][$key]['Quantity'] = $_POST['Quantity'];
        }
    }
}

?>
