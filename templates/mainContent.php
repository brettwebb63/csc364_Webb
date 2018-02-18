<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/9/2018
 * Time: 5:12 PM
 */
class mainContent{
    public static function productlisting($data){
        $productname = $data['name'];
        $productDescription = $data['description'];
        $productPrice = $data['price'];
        $productPicture = $data['picture'];
        echo <<<productlisting
        <div class ="row">
            <div class = "contentrow col-xs-4">
                    <h3>$productname</h3>
                    <h5>$productDescription</h5>
            </div>
            <div class = "contentrow col-xs-4">
                    <img src="/product_images/$productPicture" height="250" width= "500">
            </div>
            <div class = "contentrow col-xs-4">        
                    <h4 style ='text-align: center'>$productPrice</h4>
            </div>        
        </div>
productlisting;

    }
}