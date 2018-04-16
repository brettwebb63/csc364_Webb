<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/7/2018
 * Time: 2:09 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once (FS_TEMPLATES . 'ShippingForm.php');
require_once (FS_TEMPLATES . 'Cart.php');
require_once (FS_TEMPLATES . 'cartReview.php');
require_once (FS_TEMPLATES . 'orderInfo.php');
require_once (FS_TEMPLATES . 'filledOutShippingForm.php');
require_once (FS_TEMPLATES . 'mainFooterTemplate.php');


mainHeaderTemplate::pageHeader();
$cartItems = [];
$cart = new Cart();
$cartItems=$cart->get();
$total = $cart->calculateTotal($cartItems);
$shipping = 7.95;
if ($total > 100.00)
{
    $shipping = 0.00;
}
$tax = $total * .06;
$grandTotal = $total + $shipping + $tax;

$customerInfo = [];
$orderInfo = new orderInfo();
$customerInfo = $orderInfo->get();
?>

<div class="container">
    <div class="row">
        <div class="filler col-xs-2"></div>

        <div class="Cart col-xs-8">
            <div class="row">

                <div class="col-xs-12">
                    <h2 style="text-decoration: underline">Shopping Cart Review</h2>
                    <div class="col-xs-12">
                        <div class="col-xs-3">
                            <h4>Product Picture</h4>
                        </div>
                        <div class="col-xs-3">
                            <h4>Product Name</h4>
                        </div>
                        <div class="col-xs-3">
                            <h4>Price</h4>
                        </div>
                        <div class="col-xs-3">
                            <h4>Quantity</h4>
                        </div>
                    </div>
                           <?php
                                foreach($cartItems as $row => $innerArray) {
                                    $picture = $innerArray['picture'];
                                    $price = $innerArray['price'];
                                    $qty = $innerArray['quantity'];
                                    $name = $innerArray['name'];

                                    cartReview::reviewCart($picture,$price,$qty,$name);
                                }
                            ?>
                </div>

                <div class="upperPadding col-xs-6">
                    <h3 style="text-decoration: underline">Shipping Info</h3>
                    <h5>Standard shipping : $7.95</h5>
                    <h5>All orders over $100 will receive free shipping.</h5>
                </div>

                <div class="upperPadding col-xs-6">
                    <h3 style="text-decoration: underline">Total Wallet Damage</h3>
                    <h5>Product Total : $<?php echo number_format((float)$total, 2, '.', '')?></h5>
                    <h5>Shipping : $<?php echo number_format((float)$shipping, 2, '.', '')?></h5>
                    <h5>Tax : $<?php echo number_format((float)$tax, 2, '.', '')?></h5>
                    <h5>Total : $<?php echo number_format((float)$grandTotal, 2, '.', '')?></h5>
                </div>

                <div class="col-xs-12">
                    <?php
                    if(array_key_exists('orderInfo', $_SESSION))
                    {
                        $firstName = $customerInfo[0]['firstName'];
                        $lastName = $customerInfo[0]['lastName'];
                        $address = $customerInfo[0]['address'];
                        $cityStateZip = $customerInfo[0]['cityStateZip'];
                        $paymentType = $customerInfo[0]['paymentType'];
                        $cardNumber =$customerInfo[0]['cardNumber'];
                        $CSV = $customerInfo[0]['csv'];

                        filledOutShippingForm::filledForm($firstName,$lastName,$address,$cityStateZip, $paymentType, $cardNumber, $CSV);
                    }
                    else
                    {
                        shippingForm::FormForShipping();
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="filler col-xs-2"></div>

    </div>
</div>

<?php
mainFooterTemplate::mainFooter();