<?php
/**
 * Starts a new session if session is not already started.
 */
if(!isset($_SESSION)) { 
    session_start(); 
} 
// Check if both 'ID' and 'Quantity' have been posted from a form submission.
/**
 * Updates the quantity of an item in the shopping cart.
 *
 * This function checks if the 'ID' and 'Quantity' parameters are set in the $_POST array.
 * If they are set, it iterates through the 'CART_ITEMS' array stored in the $_SESSION array.
 * For each item in the 'CART_ITEMS' array, it checks if the 'ID' value matches the 'ID' value in the $_POST array.
 * If there is a match, it updates the 'Quantity' value of that item in the $_SESSION array.
 *
 * @param array $POST The array containing the 'ID' and 'Quantity' parameters.
 * @param array $SESSION The array containing the 'CART_ITEMS
 */
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
