<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/8/2018
 * Time: 4:41 PM
 */
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];
// Generate the HTML for the top of the page

if ( $requestType == 'GET' ) {
    // use sql to get the post with id = 39
    $sql = 'update products set isActive = 1 where id = ' .  $_GET['id'];
    $result = $db->query($sql);

    header('Location: adminAllProducts.php');

}
//redirect them to the home page
header('Location: index.php');