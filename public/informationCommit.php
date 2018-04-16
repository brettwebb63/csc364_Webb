<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/11/2018
 * Time: 9:00 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . 'orderInfo.php');

$requestType = $_SERVER['REQUEST_METHOD'];

$customerInfo = [];
$orderInfo = new orderInfo();
$customerInfo = $orderInfo->get();

    print_r($customerInfo);

    $address = $customerInfo[0]['address'];
    $cityStateZip = $customerInfo[0]['cityStateZip'];
    $firstName = $customerInfo[0]['firstName'];
    $lastName = $customerInfo[0]['lastName'];
    $paymentType = $customerInfo[0]['paymentType'];
    $date = date("m-d-Y");
    $orderNumber = rand();

    $sql = "insert into customers ( firstname, lastname, city, address) values ('" . $firstName . "', '" . $lastName . "', '" . $cityStateZip . "','" . $address . "')";
    $db->query($sql);
    $sql = "insert into orders ( order_number, shipping_city, shipping_address, payment_method, order_date) values ('" . $orderNumber . "', '" . $cityStateZip . "','" . $address . "', '" . $paymentType . "', '". $date ."')";
    $db->query($sql);
    header('Location: thankYou.php');


