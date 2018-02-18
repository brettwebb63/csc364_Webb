<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 1/30/2018
 * Time: 8:50 PM
 */
// Include the basic configuration elements
require_once($_SERVER['DOCUMENT_ROOT'].'/../includes/config.php');
// Include the database connection and query class
require_once(FS_INCLUDES . 'database.php');

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
// Connect to the database
$db = new Database();
// Initialize variables
$requestType = $_SERVER[ 'REQUEST_METHOD' ];
// Session Start
session_start();