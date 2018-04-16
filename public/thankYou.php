<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/12/2018
 * Time: 12:43 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'orderInfo.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');

mainHeaderTemplate::pageHeader();

$customerInfo = [];
$orderInfo = new orderInfo();
$customerInfo = $orderInfo->get();
?>
<div class="container">
    <div class="row">
        <div class="filler col-xs-2"></div>
        <div class="col-xs-8">
            <h4> Thank you for your purchase <?php echo $customerInfo[0]['firstName']?> <?php echo $customerInfo[0]['lastName']?>!</h4>
            <h5> Please allow 5 to 7 business days before contacting us about shipping.</h5>
            <h5> If there are any problems occur please email us at : TripleTInc@gmail.com</h5>
            <h5> Page will redirect in 15 seconds. </h5>
        </div>
        <div class="filler col-xs-2"></div>
    </div>
</div>

    <meta http-equiv="refresh" content="15;url=index.php">

<?php
mainFooterTemplate::mainFooter();
