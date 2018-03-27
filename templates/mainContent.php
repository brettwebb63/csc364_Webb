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
        $quantity = "";



        echo <<<productlisting
        
        <div class ="row">
            <div class = "contentrow col-xs-3">
                <div class="productName">
                 <a href = "detailsPage.php?id=$id" h3 style="text-align:center;">$productname</a></h3>
                </div>
                 <h5>$productDescription</h5>
            </div>
            <div class = "contentrow col-xs-5">
                 <img src="/product_images/$productPicture">
            </div>
            <div class = "$id col-xs-4">
                <div class = "col-xs-12">
                    <h3>$$productPrice</h3>
                </div>
                
                <div class = "$id col-xs-12">
                    
                    <form id="addToCartForm" action='cartAdd.php' method="POST" class="form-horizontal">
                        <fieldset>

                        <!-- Form Name -->
                        <legend></legend>

                        <!-- Button -->
                        <input type="hidden" name="id" value="$id">
                        <input type="hidden" name="name" value="$productname">
                        <input type="hidden" name="price" value="$productPrice">
                        <input type="hidden" name="description" value="$productDescription">
                        <input type="hidden" name="picture" value="$productPicture">
                      <div class="col-xs-6">
                        <div class="form-group">        
                            <label class="col-md-4 control-label" for="quantity">Quantity</label>  
                                <div class="col-md-6">
                                    <input id="quantity" name="quantity" type="text" placeholder="Ex - 1" value="$quantity" class="form-control input-md" required="">
                                </div> 
                        </div>
                      </div>
                      <div class="col-xs-6">     
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                                <div class="col-md-4">
                                    <button id="submit" name="submit" value="Submit" class="btn btn-success">Add to Cart</button>
                                </div>
                        </div>
                      </div>  
                        </fieldset>
                    </form>
                </div>
            </div>        
        </div>
productlisting;
    }
}