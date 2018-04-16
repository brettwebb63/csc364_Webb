<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/7/2018
 * Time: 7:43 PM
 */
class cartReview
{
    public static function reviewCart($picture,$price,$qty,$name){
        echo <<< reviewCart
        <div class="col-xs-12">
            <div class="col-xs-3">
                <img src='/product_images/$picture' style='height:75px;width:100px'>
            </div>
            <div class="col-xs-3">
                <h5>$name</h5>
            </div>
            <div class="col-xs-3">
                <h5>$price</h5>
            </div>
            <div class="col-xs-3">
                <h5>$qty</h5>
            </div>
        </div>
reviewCart;

    }
}