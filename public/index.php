<?php
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");
$sql = 'select * from products';
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
?>
<!DOCTYPE HTML>
<html>
<body>
    <div class="container">
        <?php
        mainHeaderTemplate::pageHeader();
        ?>
        <main>
            <div class="row">
                <div class = "col-xs-3">
                    <aside>
                        <h2> side bar </h2>
                    </aside>
                </div>
                <div class ="col-xs-9">
                    <h2 style ='text-align: center'> Products</h2>
                            <?php
                            // Loop through the posts and display them
                            while ($product = $products->fetch()) {
                                // Call the method to create the layout for a post
                                mainContent::productlisting($product);
                            }
                            ?>
                </div>
            </div>
        </main>
        <?php
        mainFooterTemplate::mainFooter();
        ?>
    </div>
</body>
</html>
