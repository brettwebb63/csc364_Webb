<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/20/2018
 * Time: 9:01 AM
 */
class productUpdateForm{
    public static function productUpdate($id, $name, $description, $price, $picture, $isActive, $currentPicture){
        echo<<< productUpdate
        
                <form id="updateProductForm" action='updateProduct.php' method="POST" class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Update Post</legend>
                     <input type="hidden" name="id" value=$id>
                       <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Product Name</label>
                        <div class="col-md-12">
                            <input id="name" name="name" type="text" placeholder="Product Name" value="$name" class="form-control input-md" required="">                    
                        </div>
                    </div>
            
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="description">description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="description" name="description">$description</textarea>
                        </div>
                    </div>
            
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Price of Product</label>
                        <div class="col-md-12">
                            <input id="price" name="price" type="text" placeholder="Ex-99.91" value="$price" class="form-control input-md" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-md-3 control-label" for="price">Current Picture</label>
                        <div class="col-xs-12">
                            <img src="/product_images/$picture">
                        </div>
                    </div>
            
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="picture">Update Picture</label>
                        <div class="col-md-12">
                            <input id="picture" name="picture" class="input-file" value="$picture" type="file">
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="isActive">Will this product be visible?</label>
                        <div class="col-md-12">
                            <input id="isActive" name="isActive" type="number" value="$isActive" class="form-control input-md" required="">                    
                        </div>
                    </div>
                    
                    <input type="hidden" name="current" value="$currentPicture">
                    
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-8">
                            <button id="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                            <a href = "index.php" button id="cancel" name="cancel" value="Cancel" class="btn btn-info">Cancel</a></button>
                        </div>
                    </div>
               </fieldset>
            </form>
productUpdate;
    }
}