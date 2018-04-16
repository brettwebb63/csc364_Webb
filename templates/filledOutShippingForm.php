<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/10/2018
 * Time: 2:41 PM
 */
class filledOutShippingForm
{
    public static function filledForm($firstName,$lastName,$address,$cityStateZip, $paymentType, $cardNumber, $CSV){
        echo <<< filledForm
<form id="shippingForm" action='orderInfoUpdate.php' method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Shipping Info</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="firstName" name="firstName" type="text" placeholder="Kent" value="$firstName" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input id="lastName" name="lastName" type="text" placeholder="Webb" value="$lastName" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="1234 Maple Drive" value="$address" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City, State, Zip</label>  
  <div class="col-md-4">
  <input id="cityStateZip" name="cityStateZip" type="text" placeholder="Freeport, PA, 16229" value="$cityStateZip" class="form-control input-md" required="">
    
  </div>
</div>

  <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Payment Type </label>  
        <div class="col-md-4">
            <input id="paymentType" name="paymentType" type="text" placeholder="Visa - Master Card " value="$paymentType" class="form-control input-md" required=""> 
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="cardNumber">Card Number</label>  
        <div class="col-md-4">
            <input id="cardNumber" name="cardNumber" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" value="$cardNumber" class="form-control input-md" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="csv">CSV</label>  
        <div class="col-md-4">
            <input id="csv" name="csv" type="text" placeholder="XXX or XXXX" value="$CSV" class="form-control input-md" required=""> 
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
filledForm;

    }
}