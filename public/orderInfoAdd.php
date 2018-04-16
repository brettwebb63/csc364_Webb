<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/10/2018
 * Time: 12:44 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");
require_once (FS_TEMPLATES . 'shippingForm.php');
require_once (FS_TEMPLATES . 'orderInfo.php');

$requestType = $_SERVER[ 'REQUEST_METHOD' ];



// Get item info to add to cart
// This will come from a form submission via POST request
// id would be found in $_POST['id'];
$newInfo = $_POST;
// Initialize cart and get current contents
$orderInfo = new orderInfo();
// Add an item to the cart
$orderInfo->addOrderInfo($newInfo);
// If successful, where to we redirect them to?
header('Location: checkedOut.php');