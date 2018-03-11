<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/9/2018
 * Time: 5:12 PM
 */
class mainContent{
    public static function productlisting($data){
        $id = $data['id'];
        $productname = $data['name'];
        $productDescription = substr($data['description'],0,150) . ".....";
        $productPrice = $data['price'];
        $productPicture = $data['picture'];
        echo <<<productlisting
        <div class ="row">
            <div class = "contentrow col-xs-3">
                 <h3 style="text-align:center">$productname</h3>
                 <h5>$productDescription</h5>
            </div>
            <div class = "contentrow col-xs-5">
                 <img src="/product_images/$productPicture">
            </div>
            <div class = "$id col-xs-4">
                <div class = "col-xs-12">
                    <a href = "updateProduct.php?id=$id" button id="button1id" name="button1id" class="btn btn-primary">Update Product</a></button>
                    <a href = "deleteProduct.php?id=$id" button id="button2id" name="button2id" class="btn btn-danger">Delete Product</a></button>
                </div>
                <div class = "col-xs-12">    
                    <a href = "detailsPage.php?id=$id" button id="button3id" name="button3id" class="btn btn-success"> $ More Details</a></button>
                </div>
            </div>        
        </div>
productlisting;

    }
}