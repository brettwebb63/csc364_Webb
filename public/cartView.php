<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/21/2018
 * Time: 4:12 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/../includes/application_includes.php");

require_once (FS_TEMPLATES . "mainHeaderTemplate.php");
require_once (FS_TEMPLATES . 'Cart.php');
require_once (FS_TEMPLATES . "mainFooterTemplate.php");

mainHeaderTemplate::pageHeader();
?>
<div class="container">
    <div class="row">
        <div class="filler col-xs-2"></div>
        <div class="Cart col-xs-8">
            <?php
            //creating a empty array to hold the values of the session variable
            $cartItems = [];
            $total=0;
            //Creating a new instance of the cart
            $cart = new Cart();
            //assigning my blank array to the return value of the get method
            $cartItems=$cart->get();
                //If the cart exists
                if (array_key_exists('cart', $_SESSION)) {
                    //for every item in the cart
                    $total = $cart->calculateTotal($cartItems);
                    echo"<table id='CartTable' border='1'>";
                    echo"<tr>
                            <th>Product Image</th>                            
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                         </tr>";

                    foreach($cartItems as $row => $innerArray){
                        $id =$innerArray['id'];
                        $newQty = "";
                        echo "<tr class='$id'>";
                        echo "<td><img src='/product_images/".$innerArray['picture']."' style='height:75px;width:100px'></td>";
                        echo "<td>".$innerArray['name']."</td>";
                        echo "<td>".$innerArray['price']."</td>";
                        echo "<td>".$innerArray['quantity']."</td>";
                        echo "<td><a href = \"cartDelete.php?id=$id\" button id=\"button1id\" name=\"button1id\" class=\"btn btn-danger\">Delete Product</a></button></td>";
                        echo "<td>
                                    <form id=\"changeQtyForm\" action='cartChangeQty.php?id=$id' method=\"POST\" class=\"form-horizontal\">
                                        <input id=\"newQty\" name=\"newQty\" type=\"text\" placeholder=\"Numeric Vals\" value=\"$newQty\" class=\"form-control input-md\" required=\"\">

                                    <button id=\"submit\" name=\"submit\" class=\"btn btn-success\">Change Quantity</button>
                                    </form>
                              </td>";
                        echo"</tr>";
                    }

                    echo "<tr>
                            <td>Total : ".$total."</td>
                            <td><a href =\"order.php\"button id=\"orderButton\" name=\"orderButton\" class=\"btn btn-success\">Checkout</button></td>
                         </tr>";
                    echo "</table>";
                }
                //If the cart does not exist
                else {
                    //Output a message saying so
                    echo"There are no products in you cart.";
                }
            ?>
        </div>
        <div class="filler col-xs-2"></div>
    </div>
</div>
<?php
mainFooterTemplate::mainFooter();
