<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/20/2018
 * Time: 8:25 AM
 */
// Load all application files and configurations
require($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'mainContent.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');
require_once (FS_TEMPLATES . 'detailsPageLayout.php');

$sql = 'select * from products where id = ' .  $_GET['id'];
$productInformation = $db->query($sql);

mainHeaderTemplate::pageHeader();

?>
    <!DOCTYPE HTML>
    <html>
        <body>
            <div class="container">
                <main>
                    <div class="row">
                        <div class = "sidebar col-xs-2">
                            <h2> side bar </h2>
                        </div>
                        <div class ="content col-xs-10">
                            <?php
                                while ($productInfo = $productInformation->fetch()) {
                                    // Call the method to create the layout for a post
                                    detailsPageLayout::detailsContent($productInfo);
                                }
                            ?>
                        </div>
                    </div>
                </main>
            </div>
        </body>
    </html>
        <?php
        mainFooterTemplate::mainFooter();
        ?>
