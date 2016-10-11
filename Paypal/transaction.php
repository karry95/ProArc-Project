<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".radio1").click(function(){
        $("form").fadeOut()
    });
    $(".radio2").click(function(){
        $("form").fadeIn();
    });

  
  
});
</script>
</head>

<body>
Account type:
<input type="radio"  class="radio1" name="Account type" value="Project Manager"> Project Manager 
<input type="radio" class="radio2" name="Account type" value="Tradesmen"> Tradesmen </br>
<form action='checkout.php' METHOD='POST'>
<input type="radio" name="amount" value='20'  required="required"> 20 euro for 1 month 
<input type="radio"  name="amount" value='50' required="required"> 50 euro for 3 months
</br>
 Title:<select>
  <option value="Mr.">Mr.</option>
  <option value="Mrs.">Mrs.</option>
  <option value="Ms.">Ms.</option>
  <option value="Dr.">Dr.</option>
</select>Name:<input type="text" name="name"> <br>
  </br>
  Credit Card Type:<select>
  <option value="Visa">Visa</option>
  <option value="Mastercard">Mastercard</option>
  <option value="Maestro.">Maestro</option>
  <option value="Laser">Laser</option>
 <option value="Amex">American Express</option>
  </select>
  </br>
</br>
Credit Card Number :<input type="text" name="cardnumber" id="cardnumber" placeholder="1234 5678 9012 3456"> <input type="submit" name="submit" size="20" value="submit" tabindex="13" alt="Click to submit credit card for validation">
</br>
</br> 
Billing Address line 1:<input type="text" name="address1"><br>
</br>
Billing Address line 2:<input type="text" name="address2"><br>
</br>
Post Code:<input type="text" name="post code"><br>
</br>
County:<select>
  <option value="Antrim">Antrim</option>
  <option value="Armagh">Armagh</option>
  <option value="Carlow">Carlow</option>
  <option value="Cavan">Cavan</option>
<option value="Clare">Clare</option>
  <option value="Cork">Cork</option>
  <option value="Donegal">Donegal</option>
  <option value="Down">Down</option>
<option value="Dublin">Dublin</option>
  <option value="Fermanagh">Fermanagh</option>
  <option value="Galway">Galway</option>
  <option value="Kerry">Kerry</option>
<option value="Kildare">Kildare</option>
  <option value="Kilkenny">Kilkenny</option>
  <option value="Laois">Laois</option>
  <option value="Leitrim">Leitrim</option>
<option value="Limerick">Limerick</option>
  <option value="Londonderry">Londonderry</option>
  <option value="Longford">Longford</option>
  <option value="Louth">Louth</option>
<option value="Mayo">Mayo</option>
  <option value="Meath">Meath</option>
  <option value="Monaghan">Monaghan</option>
  <option value="Offaly">Offaly</option>
<option value="Roscommon">Roscommon</option>
  <option value="Sligo">Sligo</option>
  <option value="Tipperary">Tipperary</option>
  <option value="Tyrone">Tyrone</option>
<option value="Waterford">Waterford</option>
  <option value="Westmeath">Westmeath</option>
  <option value="Wexford">Wexford</option>
  <option value="Wicklow">Wicklow</option>
</select>
</br>
Enter Image Text
<input name="captcha" type="text"> <img src="captcha.php"/><br>
</br>
<label for="buy">Buy Now:</label>
<input type="image" id="submitBtn" value="Pay with PayPal" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif">
<input id="type" type="hidden" name="expType" value="light">

</br>
</form>
<script src="https://www.paypalobjects.com/js/external/dg.js" type="text/javascript"></script>
<script>
	var dg = new PAYPAL.apps.DGFlow(
	{
		trigger: 'submitBtn',
		expType: 'instant'
	});
</script>
</body>

</html>
