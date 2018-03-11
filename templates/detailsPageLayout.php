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
                 <img src="/product_images/$productPicture" align="middle">
         </div>
         <div class ="row">
            <div class = "contentrow col-xs-9">
                 <h5>$productDescription</h5>
            </div>
            <div class = "$id col-xs-3">
                <div class = "col-xs-12">
                    <a href = "index.php" button id="button1id" name="button1id" class="btn btn-primary">Back to the listings</a></button>
                    <button id="button2id" name="button2id" class="btn btn-danger">Add to Cart</button>
                </div>
            </div>
         </div>

detailsContent;

    }
}