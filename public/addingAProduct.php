<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/10/2018
 * Time: 5:12 PM
 */
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');
require_once (FS_TEMPLATES . 'productAdditonForm.php');
$requestType = $_SERVER[ 'REQUEST_METHOD' ];

    mainHeaderTemplate::pageHeader();
    ?>
<div class="container">
        <div class ="row">
            <div class="filler col-xs-2">

            </div>
            <div class="UpdateOrAddForm col-xs-8">
                    <?php
                         if ($requestType == 'GET') {
                            showForm();
                         } elseif ($requestType == 'POST') {
                             echo '<h2>This is the data that was entered</h2>';
                             echo '<pre>';
                                print_r($_POST);
                             echo '</pre>';

                            $name = $_POST['name'];
                            $description = $_POST['description'];
                            $price = $_POST['price'];
                            $picture = $_POST['picture'];

                             $sql = "insert into products ( name, description, price, picture) values ('" . $name . "', '" . $description . "', '" . $price . "', '" . $picture . "')";
                             $db->query($sql);
                         }
                    ?>
            </div>
            <div class="filler col-xs-2">

            </div>
        </div>
</div>
<?php
    mainFooterTemplate::mainFooter();

$fields = [
    'name'     => ['required', 'string'],
    'description'   => ['string'],
    'price' => ['required', 'string'],
    'image' => ['date']

];

function showForm($data = null)
{
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $picture = $data['picture'];

    productAdditonForm::productAddtion($name, $description, $price, $picture);

}

?>