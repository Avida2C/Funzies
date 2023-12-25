<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_POST['ID']) && isset( $_POST['Quantity'])) {
    foreach($_SESSION['CART_ITEMS'] as $key => $value) {
        if($value['ID'] == $_POST['ID']) {
            $_SESSION['CART_ITEMS'][$key]['Quantity'] = $_POST['Quantity'];
        }
    }
}

?>