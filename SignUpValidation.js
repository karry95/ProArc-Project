// JavaScript File

function formValidation()  
{  
var user = document.registration.user;  
var passid = document.registration.pass;  
var ufname = document.registration.name;  
var uadd = document.registration.address;  
var urole = document.registration.role;  
var uemail = document.registration.email;
var ucounty = document.registration.county;
{  
if(passid_validation(passid,7,12))  
{  
if(allLetter(ufname))  
{  
if(alphanumeric(uadd))  
{   
if(roleselect(urole))  
{  
if(ValidateEmail(uemail))  
{  
if(countyselect(ucounty))
{
    
}
}   
 
}   
}  
}  
}  
}  
return false;  
  
} function userid_validation(user,mx,my)  
{  
var user_len = user.value.length;  
if (user_len == 0 || user_len >= my || user_len < mx)  
{  
alert("Username should not be empty / length be between "+mx+" to "+my);  
user.focus();  
return false;  
}  
return true;  
}  

function passid_validation(passid,mx,my)  
{  
var passid_len = passid.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
passid.focus();  
return false;  
} 
else  
{  
alert('Form Succesfully Submitted');  
window.location.reload()  
return true;  
} 
}  


function allLetter(ufname)  
{   
var letters = /^[A-Za-z]+$/;  
if(ufname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Full Name must have alphabet characters only');  
ufname.focus();  
return false;  
}  
}  

function alphanumeric(uadd)  
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(uadd.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User address must have alphanumeric characters only');  
uadd.focus();  
return false;  
}  
}  
function roleselect(urole)  
{  
if(urole.value == "Default")  
{  
alert('Select your Job Role from the list');  
urole.focus();  
return false;  
}  
else  
{  
return true;  
}  
}  
  
function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  
} 

function countyselect(ucounty)  
{  
if(ucounty.value == "Default")  
{  
alert('Select your County from the list');  
ucounty.focus();  
return false;  
}  
else  
{  
return true;  
}  
}