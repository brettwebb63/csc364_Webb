<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/10/2018
 * Time: 3:01 PM
 */

require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . 'filledOutShippingForm.php');
require_once (FS_TEMPLATES . 'orderInfo.php');

$customerInfo = [];
$orderInfo = new orderInfo();

$requestType = $_SERVER[ 'REQUEST_METHOD' ];

$customerInfo[0]['firstName'] = $_POST['firstName'];
$customerInfo[0]['lastName'] = $_POST['lastName'];
$customerInfo[0]['address'] = $_POST['address'];
$customerInfo[0]['cityStateZip'] = $_POST['cityStateZip'];
$customerInfo[0]['cardNumber'] = $_POST['cardNumber'];
$customerInfo[0]['paymentType'] = $_POST['paymentType'];
$customerInfo[0]['csv'] = $_POST['csv'];

$orderInfo->saveUpdatedInfo($customerInfo[0]);

header('Location: checkedOut.php');
