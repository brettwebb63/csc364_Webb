<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/10/2018
 * Time: 9:32 AM
 */

class detailsPageLayout{
    public static function detailsContent($productInfo){
        $id = $productInfo['id'];
        $productname = $productInfo['name'];
        $productDescription = $productInfo['description'];
        $productPrice = $productInfo['price'];
        $productPicture = $productInfo['picture'];

        echo<<<detailsContent
         <div>
         <h2 style ='text-align: center'> $productname </h2>
         </div>
         <div class = "contentrow col-xs-12">
                 <img src="/product_images/$productPicture">
         </div>
         <div class ="row">
            <div class = "contentrow col-xs-9">
                 <h3> Product Infomation</h3>
                 <h5>$productDescription</h5>
            </div>
            <div class = "$id col-xs-3">
                <div class = "col-xs-12">
                    <a href = "index.php" button id="button1id" name="button1id" class="btn btn-primary">Back to the listings</a></button>
                    <button id="button2id" name="button2id" class="btn btn-success">Add to Cart</button>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-6">
                
            </div>
            <div class="col-xs-6">
            <div class="Warranty">
                    <h4 style ='text-decoration: underline #2C3531'> Warranty & Policy Infomation </h4>
                    <h5>
                        If a part fails during the warranty period shown on your receipt, bring the part to an Triple T's Inc store and you will receive a 
                        replacement or refund. Warranty excludes damage caused by misuse, abuse, other faulty parts, improper installation or off-road, 
                        commercial or marine use. Warranties on replacement parts cover the unused portion of the original warranty or 90 days, whichever is 
                        longer. Warranties expire when you sell your vehicle.
                    </h5>
                    <h5>
                        THIS LIMITED WARRANTY REPRESENTS THE TOTAL LIABILITY OF TRIPLE T'S INC, FOR ANY PART OR PRODUCT. TRIPLE T'S INC MAKES NO OTHER WARRANTIES, EXPRESS 
                        OR IMPLIED, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTIBILITY OR FITNESS FOR A PARTICULAR PURPOSE. TRIPLE T'S INC SHALL NOT BE LIABLE FOR 
                        ANY INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES.
                    </h5>
                </div>
            </div>
         </div>   

detailsContent;

    }
}