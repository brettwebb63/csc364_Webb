<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/14/2018
 * Time: 10:21 AM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");
require_once (FS_TEMPLATES . 'mainContent.php');
require_once (FS_TEMPLATES . 'Cart.php');

$requestType = $_SERVER[ 'REQUEST_METHOD' ];



// Get item info to add to cart
// This will come from a form submission via POST request
// id would be found in $_POST['id'];
$newItem = $_POST;
// Initialize cart and get current contents
$cart = new Cart();
// Add an item to the cart
$cart->add($newItem);
// If successful, where to we redirect them to?
header('Location: cartView.php');


