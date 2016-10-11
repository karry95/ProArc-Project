<!DOCTYPE html>
<html>
<head>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: silver;
    margin: auto;
    padding: 20px;
    border: 2px solid #888;
    border-radius: 35px;
    width: 35%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
    font-family:Impact,Helvetica,sans-serif;
    font-size:18px;
    font-style: italic;
 
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: grey;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 5px 35px;
    background-color:black ;
    color: white;
 border-radius:15px;
font-family:Impact,Helvetica,sans-serif;
  
}

.modal-body {padding: 2px 16px;
  font-family:Impact,Helvetica,sans-serif;
}

.modal-footer {
    padding: 5px 35px;
    background-color:none ;
    color: black;
border-radius:15px;
  font-family:Impact,Helvetica,sans-serif;
  }
 
  input[name = 'amount']+span{
    font-family:Impact;
    font-size: 15px;
    color: red;
    margin: 6px 2px;
    line-height:28px;
  }

input[name = 'amount']:checked+span{
  color:green;
}

input[name = 'amount']{
  display:none;
}

input[name = 'amount']+span:before{
  content:"";
  display:inline-block;
  width:15px;
  height:15px;
  border:2px solid blue;
  margin-right:6px;
  margin-bottom:-4px;
  border-radius:50%;
  box-shadow:0 0 3px #000;

  }
input[name = 'amount']:checked+span:before{
  background: radial-gradient(#000 , #ddd , #fff);
  
}

input[type = "text"]
{
  font-size:18px;
  padding:12px 6px;
  border:1px solid black;
  border-radius:10%;
  color:black;
}

#myBtn{
border:1px solid black;
border-radius:15px;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  
}
  
input[placeholder="Username"]{
  font-family:Impact,Helvetica,sans-serif;
    font-size:18px;
    font-style: italic;
 border-radius:15px;
 background:whitesmoke;
}

input[placeholder="Password"]{
  font-family:Impact,Helvetica,sans-serif;
    font-size:18px;
    font-style: italic;
 border-radius:15px;
 background:whitesmoke;
}

h3{
  font-size:20px;
}


</style>

</head>
<body>



<!-- Trigger/Open The Modal -->
<button id="myBtn">Continue</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">X</span>
      <h2>Payment Info</h2>
    </div>
    <div class="modal-body">
    
<form action='checkout.php' METHOD='POST'>
</br>
Username:<br><input type="text" name="usern" id="usern" placeholder="Username"> </br>
</br>
Password:<br><input type="text" name="usern" id="usern" placeholder="Password"> </br>
</br>
Payment Plan:
<label>
<input type="radio" name="amount" value='20'  required="required" id="option"> <span>20 euro for 1 month</span> 
 </label>
 <label>
 <input type="radio"  name="amount" value='50' required="required" id="option"><span> 50 euro for 3 months </span>
 </label>
</br>    
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
    </div>
    <div class="modal-footer">
  <h3>ProArc.ie</h3>
    
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
