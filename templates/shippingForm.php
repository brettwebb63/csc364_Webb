<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/7/2018
 * Time: 3:20 PM
 */
class shippingForm
{
    public static function FormForShipping(){
        echo <<< FormForShipping
            <form id="shippingForm" action='orderInfoAdd.php' method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Shipping Info</legend>



    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">First Name</label>  
        <div class="col-md-4">
            <input id="firstName" name="firstName" type="text" placeholder="Kent" class="form-control input-md" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Last Name</label>  
        <div class="col-md-4">
            <input id="lastName" name="lastName" type="text" placeholder="Webb" class="form-control input-md" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Address</label>  
        <div class="col-md-4">
            <input id="address" name="address" type="text" placeholder="1234 Maple Drive" class="form-control input-md" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">City, State, Zip</label>  
        <div class="col-md-4">
            <input id="cityStateZip" name="cityStateZip" type="text" placeholder="Freeport, PA, 16229" class="form-control input-md" required=""> 
        </div>
    </div>



    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Payment Type </label>  
        <div class="col-md-4">
            <input id="paymentType" name="paymentType" type="text" placeholder="Visa - Master Card " class="form-control input-md" required=""> 
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="cardNumber">Card Number</label>  
        <div class="col-md-4">
            <input id="cardNumber" name="cardNumber" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control input-md" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="csv">CSV</label>  
        <div class="col-md-4">
            <input id="csv" name="csv" type="text" placeholder="XXX or XXXX" class="form-control input-md" required=""> 
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <a href="cartView.php" button id="button1id" name="button1id" class="btn btn-info">Return To Cart</a></button>
            <button id="submit" name="submit" class="btn btn-success">Next Step</button>
        </div>
    </div>

</fieldset>
</form>

FormForShipping;

    }
}