<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/11/2018
 * Time: 3:22 PM
 */
class classReviewFinal
{
    public static function cartFinal($picture, $name, $price, $qty, $itemTotal){
        echo<<<cartFinal
        <div class="col-xs-12">
            <div class="col-xs-3">
                <img src='/product_images/$picture' style='height:75px;width:100px'>
            </div>
            <div class="col-xs-3">
                <h5>$name</h5>
            </div>
            <div class="col-xs-2">
                <h5>$price</h5>
            </div>
            <div class="col-xs-2">
                <h5>$qty</h5>
            </div>
            <div class="col-xs-2">
                <h5>$itemTotal</h5>
            </div>
        </div>
cartFinal;

    }
}