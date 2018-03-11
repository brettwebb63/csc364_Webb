<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/11/2018
 * Time: 3:14 PM
 */
class productAdditonForm{

    public static function productAddtion($name, $description, $price, $picture){
        echo <<< productAddtion
            <form id="addingAProductForm" action='addingAProduct.php' method="POST" class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>Adding a Product</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="name">Product Name</label>  
            <div class="col-md-4">
            <input id="name" name="name" type="text" placeholder="What is the name of this item? " value="$name" class="form-control input-md" required="">
    
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>  
            <div class="col-md-4">
            <input id="description" name="description" type="text" placeholder="Describe the product that you are adding" value="$description" class="form-control input-md">
    
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="price">Price</label>  
            <div class="col-md-4">
            <input id="price" name="price" type="text" placeholder="Enter the amount the item will cost" value="$price"class="form-control input-md" required="">
    
            </div>
            </div>

                <!-- File Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="picture">Product Image</label>
                    <div class="col-md-4">
                        <input id="picture" name="picture" class="input-file" type="file" value="$picture">
                    </div>
                </div>

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
productAddtion;

    }
}