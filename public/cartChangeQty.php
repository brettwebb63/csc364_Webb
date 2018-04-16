<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/14/2018
 * Time: 10:22 AM
 */

require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

$requestType = $_SERVER[ 'REQUEST_METHOD' ];
require_once (FS_TEMPLATES . 'Cart.php');

    $newQty = $_POST['newQty'];

    $cart = new Cart();

    $id = $_GET['id'];

    $cart->changeQty($id,$newQty);

    header('Location: index.php');


