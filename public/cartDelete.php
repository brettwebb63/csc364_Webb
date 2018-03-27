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

    $cartItems = [];
    $cart = new Cart();
    $cartItems = $cart->get();
    $id = $_GET['id'];

    $cart->delete($id, $cartItems);

    header('Location: index.php');




