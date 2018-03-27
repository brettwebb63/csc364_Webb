<?php
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");
$sql = 'select * from products where isActive = 0';
$products = $db->query($sql);

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'mainContent.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/6/2018
 * Time: 9:55 AM
 */

mainHeaderTemplate::pageHeader();
$quantity = 0;
?>
<!DOCTYPE HTML>
<html>
<body>
    <div class="container">
            <div class="row">
                <div class = "sidebar col-xs-2">
                        <h2 class ="paddingNeeded" style="text-decoration: underline"> All Categories </h2>
                            <h4 class ="paddingNeeded">Auto Parts</h4>
                                <h6 class ="paddingNeeded">Gaskets</h6>
                                <h6 class ="paddingNeeded">Whipper Blades</h6>
                                <h6 class ="paddingNeeded">Brakes</h6>
                                <h6 class ="paddingNeeded">Spark Plugs</h6>
                                <h6 class ="paddingNeeded">Fuel Delivery</h6>
                            <h4 class ="paddingNeeded">Interior Accessories</h4>
                                <h6 class ="paddingNeeded">Floor mats</h6>
                                <h6 class ="paddingNeeded">Seat Covers</h6>
                                <h6 class ="paddingNeeded">Ignition Bezels</h6>
                                <h6 class ="paddingNeeded">Steering Wheel Covers</h6>
                                <h6 class ="paddingNeeded">GPS</h6>
                            <h4 class ="paddingNeeded">Exterior Accessories</h4>
                                <h6 class ="paddingNeeded">Exterior Lighting</h6>
                                <h6 class ="paddingNeeded">Car Covers</h6>
                                <h6 class ="paddingNeeded">Antenna Cables</h6>
                                <h6 class ="paddingNeeded">Snow Chains</h6>
                            <h4 class ="paddingNeeded">Tools & Equipment</h4>
                            <h4 class ="paddingNeeded">Fluids & Chemicals</h4>
                            <h4 class ="paddingNeeded">Performance Parts</h4>

                </div>
                <div class ="content col-xs-10">
                    <h2 style ='text-align: center'> Products</h2>
                            <?php
                            // Loop through the posts and display them
                            while ($product = $products->fetch()) {
                                // Call the method to create the layout for a post
                                mainContent::productlisting($product, $quantity);
                            }
                            ?>
                </div>
            </div>
    </div>
</body>
</html>
<?php
mainFooterTemplate::mainFooter();
