<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/11/2018
 * Time: 7:28PM*/
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");
$sql = 'select * from products';
$products = $db->query($sql);

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'adminViewProducts.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');

mainHeaderTemplate::pageHeader();
?>
    <!DOCTYPE HTML>
    <html>
    <body>
    <div class="container">
        <div class="row">
            <div class = "sidebar col-xs-2">
            </div>
            <div class ="content col-xs-10">
                <h2 style ='text-align: center'> All Products</h2>
                <?php
                // Loop through the posts and display them
                while ($product = $products->fetch()) {
                    // Call the method to create the layout for a post
                    adminViewProducts::adminProductListing($product);
                }
                ?>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php
mainFooterTemplate::mainFooter();
