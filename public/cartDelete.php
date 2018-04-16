<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/14/2018
 * Time: 10:21 AM
*/
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

$requestType = $_SERVER[ 'REQUEST_METHOD' ];
require_once (FS_TEMPLATES . 'Cart.php');

    //Creating an empty array
    $cartItems = [];
    //Creating a new instance of the cart
    $cart = new Cart();
    //setting the empty array "cartItems" to the val of the session
    $cartItems = $cart->get();
    //Getting the id from the url
    $id = $_GET['id'];
    //passing the delete function the id of the selected product
    //and the array of the items in the array
    $cart->delete($id, $cartItems);
    //reloading the cart page.
    header('Location: index.php');




