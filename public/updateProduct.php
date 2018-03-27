<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/20/2018
 * Time: 8:25 AM
 */
// Load all application files and configurations
require($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');
// Initialize variables
require_once (FS_TEMPLATES . 'productUpdateForm.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');

$requestType = $_SERVER['REQUEST_METHOD'];
// Generate the HTML for the top of the page
mainHeaderTemplate::pageHeader();
?>
    <div class="container">
        <div class ="row">
            <div class="filler col-xs-2">

            </div>
            <div class="UpdateOrAddForm col-xs-8">
                    <?php
                    if ($requestType == 'GET') {
                        $sql = 'select * from products where id = ' .  $_GET['id'];
                        $result = $db->query($sql);
                        $row = $result->fetch();

                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $picture = $row['picture'];
                        $currentPicture= $row['picture'];
                        $isActive = $row['isActive'];

                        productUpdateForm::productUpdate($id, $name, $description, $price, $picture, $isActive, $currentPicture);
                    }
                    elseif ($requestType == 'POST') {
                        //Validate data
                        // Save data
                        if($_POST['picture'] == ""){
                            $picture = $_POST['current'];
                        }
                        else {
                            $picture = $_POST['picture'];
                        }

                        $id = ($_POST['id']);
                        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
                        $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                        $price = htmlspecialchars($_POST['price'], ENT_QUOTES);
                        $isActive = $_POST['isActive'];

                        $sql = "update products set name = '$name', description = '$description', price = '$price', picture = '$picture', isActive = '$isActive' where id = $id;";
                        $result = $db->query($sql);

                    }
                    ?>
            </div>
            <div class="filler col-xs-2">

            </div>
        </div>
    </div>


<?php
// Generate the page footer
mainFooterTemplate::mainFooter();