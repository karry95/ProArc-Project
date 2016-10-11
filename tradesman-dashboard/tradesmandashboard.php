<!DOCTYPE html>
<?php
        session_start();
        $myusername = $_SESSION['myuser'];?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <!-- Bootstrap CSS -->
    <script type="text/css" rel="stylesheet" href="css/bootstrap-rtl.css"></script>
  
  <!--//stuff for calendar -->
  
          <link rel="stylesheet" href="calendarview.css">
    <style>
      body {
        font-family: Trebuchet MS;
      }
      div.calendar {
        max-width: 240px;
        margin-left: auto;
        margin-right: auto;
      }
      div.calendar table {
        width: 100%;
      }
      div.dateField {
        width: 140px;
        padding: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        color: #555;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
      div#popupDateField:hover {
        background-color: #cde;
        cursor: pointer;
      }
    </style>
    <script src="js/prototype.js"></script>
    <script src="calendarview.js"></script>
    <script>
      function setupCalendars() {
        // Embedded Calendar
        Calendar.setup(
          {
            dateField: 'embeddedDateField',
            parentElement: 'embeddedCalendar'
          }
        )

        // Popup Calendar
        Calendar.setup(
          {
            dateField: 'popupDateField',
            triggerElement: 'popupDateField'
          }
        )
      }

      Event.observe(window, 'load', function() { setupCalendars() })
    </script>
    
    <style type="text/css">
/* The Modal (background) */
.modall {
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
.modal-contentt {
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

.modal-headerr {
    padding: 5px 35px;
    background-color:black ;
    color: white;
 border-radius:15px;

  
}

.modal-bodyy {padding: 2px 16px;
  
}

.modal-footerr {
    padding: 5px 35px;
    background-color:none ;
    color: black;
border-radius:15px;
  
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
  
}


</style>
  

    <title>ProArc - <?php
                               
                                
                               
                                //Connect to the database
                                $host = "127.0.0.1";
                                $user = "x14500057";                     //Your Cloud 9 username
                                $pass = "";                                  //Remember, there is NO password by default!
                                $db = "ProArc";                                  //Your database name you want to connect to
                                $port = 3306;                                //The port #. It is always 3306
                                
                                $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
                                
                                $query = "SELECT * FROM UserT Where  userName =  '$myusername'" ;
                                $result = mysqli_query($connection, $query);
                                //loop
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                    //assign pulled data to variables
                                    
                                    
                                    $tempname = $row['Name'];}
                                    
                                    
                                    //Displays pulled data
                                    echo
                                    $tempname;
                                
                                     ?></title>
                                     

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
                 <script>
                    $(document).ready(function(){
                        $("#Button1").click(function(){
                            $("#Ratings1").hide();
                            $("#ProjectFin").hide();
                             $("#Schedule").hide();
                             $("#Icons").hide();
                            $("#Project1").show();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $("#Button2").click(function(){
                            $("#Project1").hide();
                            $("#ProjectFin").hide();
                            $("#Icons").hide();
                            $("#Schedule").hide();
                            $("#Ratings1").show();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $("#Button3").click(function(){
                            $("#Project1").hide();
                            $("#Ratings1").hide();
                            $("#Icons").hide();
                             $("#Schedule").hide();
                            $("#ProjectFin").show();
                        });
                    });
                </script>
                 <script>
                    $(document).ready(function(){
                        $("#Button4").click(function(){
                            $("#Project1").hide();
                            $("#Ratings1").hide();
                            $("#Icons").hide();
                            $("#ProjectFin").hide();
                            $("#Schedule").show();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $("#DashButton").click(function(){
                            $("#Project1").hide();
                            $("#Ratings1").hide();
                            $("#ProjectFin").hide();
                            $("#Schedule").hide();
                            $("#Icons").show();
                        });
                    });
                </script>
                
                <?php          
                                // session_start();
                                $myusername = $_SESSION['myuser'];
                               
                                //Connect to the database
                                $host = "127.0.0.1";
                                $user = "x14500057";                     //Your Cloud 9 username
                                $pass = "";                                  //Remember, there is NO password by default!
                                $db = "ProArc";                                  //Your database name you want to connect to
                                $port = 3306;                                //The port #. It is always 3306
                                
                                $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
                                
                                $query = "SELECT * FROM UserT Where  UserName =  '$myusername'" ;
                                $result = mysqli_query($connection, $query);
                                //loop
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                    //assign pulled data to variables
                                    
                                    
                                    $tempForename = $row['Name'];
                                    
                                    
                                    $tempsubscription_end = $row['Subscription_End'];
                                    $tempsubscription_end = strtotime( $tempsubscription_end );
                                    $curdate=strtotime('2017-04-04'); //expired example
                                    // $curdate=strtotime('2016-04-04'); //valid example
                                    
                                    
                                    // $subscription_start = strtotime('2015-05-10');
                                    
                                if($curdate > $tempsubscription_end)
                                            {
                                                
                                               echo " <script>";
                                  //with this first line we're saying: "when the page loads (document is ready) run the following script"
                                   echo ' $(document).ready(function () {
                                    
                                        //select the POPUP FRAME and show it
                                        $("#popup").hide().fadeIn(1000);
                                    
                                        //close the POPUP if the button with id="close" is clicked
                                        $("#close").on("click", function (e) {
                                            e.preventDefault();
                                            $("#popup").fadeOut(1000);
                                        });
                                    
                                    })';
                                    echo "</script>";}
                              else{
                                                echo "<script>";
                                                   echo "alert('This is an alert from JavaScript!');";
                                                  echo "</script>";
                                               
                                            }
                                   
                                     }?>
                

</head>

<body>
    
                                    <script>
                                // Get the modal
                                var modal = document.getElementById('myModal');
                                
                                // Get the button that opens the modal
                                var btn = document.getElementById("myBtn");
                                
                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];
                               
                                
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
    
                                <div id="popup" class="modall" style="display:none;">
                            
                              <!-- Modal content -->
                              
                              <div class="modal-contentt">
                                <div class="modal-headerr">
                                  <span class="close">X</span>
                                  <h2>Subscription Ended.</h2>
                                </div>
                                <div class="modal-bodyy">
                                
                            <form action='../Paypal/checkout.php' METHOD='POST'>
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
                            <!-- Now this is the button which closes the popup-->
                            <button id="close" class="btn btn-lg btn-danger pull-right">Close </button>
                            <br>
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
                                <div class="modal-footerr">
                              <h3>ProArc.ie</h3>
                              
                                
                                </div>
                              </div>
                            
                            </div>
                            
                        <!-- Wrapper Div -->
                        <div id="wrapper">
                            <!-- Navigation -->
                            <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        
                                    </button>
                                    <a class="navbar-brand" href="index.html">ProArc</a>
                
                                <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">
                                <li class="dropdown nav-item active">
                                    
                                    <!--Dropdown Bar -->
                                    <li class="dropdown nav-item">
                                    <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                                
                                <?php
                                // session_start();
                                $myusername = $_SESSION['myuser'];
                               
                                //Connect to the database
                                $host = "127.0.0.1";
                                $user = "x14500057";                     //Your Cloud 9 username
                                $pass = "";                                  //Remember, there is NO password by default!
                                $db = "ProArc";                                  //Your database name you want to connect to
                                $port = 3306;                                //The port #. It is always 3306
                                
                                $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
                                
                                $query = "SELECT * FROM UserT Where  UserName =  '$myusername' Limit 1";
                                $result = mysqli_query($connection, $query);
                                //loop
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                    //assign pulled data to variables
                                    
                                    
                                    $tempName = $row['Name'];
                                    
                                    //Displays pulled data
                                    echo
                                    $tempName;
                                
                                     }?>
                                     
                                     <b class="caret"></b></a>
                                     
                                        <ul class="dropdown-menu" style="right: 0; left: auto;">
                                            <li class="dropdown-item">
                                                <a href="javascript:;"><i class="fa fa-fw fa-user"></i> Profile</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:;"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:;"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-item">
                                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!--<div class="collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse">-->
            <!--    <ul class="nav navbar-nav side-nav list-group">-->
            <!--        <li class="list-group-item">-->
            <!--            <a href="tradesmandashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>-->
            <!--        </li>-->
                    
                    
                    
                    
                    
            <!--        <li class="list-group-item">-->
            <!--            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>-->
            <!--            <ul id="demo" class="list-group collapse">-->
            <!--                <li class="list-group-item">-->
            <!--                    <a href="javascript:;">Dropdown Item</a>-->
            <!--                </li>-->
            <!--                <li class="list-group-item">-->
            <!--                    <a href="javascript:;">Dropdown Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--        <li class="list-group-item">-->
            <!--            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
            <!--        </li>-->
                    
                   
                    
            <!--    </ul>-->
                
            <!--</div>-->
            
                       
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row">
                     
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <div><button id ="DashButton" type="button" class="btn btn-lg btn-info" style="width:100%; background-color:#393131;">Dashboard</button></div>
                    </div>
                </div>
                <!-- /.row -->
               
                
                <div id = "Icons" class="row" >
                    
                    <div class="col-xl-6 col-lg-6">

                        <div class="card card-primary card-inverse">
                            <div class="card-header card-primary">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">Jobs Available</div>
                                        <div>Check Available Jobs Here</div>
                                    </div>
                                </div>
                            </div>
                            <div id = "Button1" class="card-footer card-default">
                                <a href="javascript:;">
                                    <span  class="pull-xs-left">View Details</span>
                                    <span  class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6">
                        
                        <div class="card card-green card-inverse">
                            <div  class="card-header card-green">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">Current Jobs</div>
                                        <div>Jobs Currently Working On</div>
                                    </div>
                                </div>
                            </div>
                            <div id = "Button2" class="card-footer card-green">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card card-yellow card-inverse">
                            <div class="card-header card-yellow">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list-ul fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">Jobs Completed</div>
                                        <div>List Of Jobs Completed</div>
                                    </div>
                                </div>
                            </div>
                            <div id="Button3" class="card-footer card-yellow">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card card-red card-inverse">
                            <div class="card-header card-red">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">Schedule</div>
                                        <div>Tasks Displayed On Calander Here</div>
                                    </div>
                                </div>
                            </div>
                            <div id="Button4" class="card-footer card-red">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                
                
                
                <!---->
                <!---->
                <!---->
                       
                
                
                
                
                

                <!--This will be where your buttons display information-->
                <div class="row">
                    <div class="col-xl-12 text-xs-center">
                        
                        <div id ="Ratings1" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
    
                               <h2> Project list goes here</h2>
                               
                               <?php
                               
                                                               //Connect to the database
                                    $host = "127.0.0.1";
                                    $user = "x14500057";                     //Your Cloud 9 username
                                    $pass = "";                                  //Remember, there is NO password by default!
                                    $db = "ProArc";                                  //Your database name you want to connect to
                                    $port = 3306;                                //The port #. It is always 3306
                                    
                                    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysqli_error());
                                    if (!$connection) { 
                                    die('Could not connect: ' . mysqli_connect_error()); 
                                }
                                
                                    mysqli_select_db($connection,$db) or die(mysqli_error($connection));
                                    
                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                
                                // session_start();
                                $myusername = $_SESSION['myuser'];
                                
                                $query = "SELECT u.* , r.* FROM UserT u,RolesT r WHERE u.User_id = r.User_id AND UserName = '$myusername' Limit 1";
                                $result = mysqli_query($connection, $query);
                                //loop
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                    
                                  echo  $User_id = $row['User_id']."<br>";
                                  echo  $BuilderBoolean = $row['Builder'];
                                  echo  $ElectricianBoolean = $row['Electrician'];
                                  echo  $Plumber = $row['Plumber'];
                                  echo  $Carpenter = $row['Carpenter'];
                                  echo  $Plasterer = $row['Plasterer'];
                                  echo  $Painter = $row['Painter'];}
                                  
                                  $_SESSION['my_id'] = $User_id; 
                                  
                               
                                    if($Builder == '1')
                                        {$Builder = 'Builder';}
                                        
                                    else{$Builder ='0';}
                                    
                                    if($Electrician =='1')
                                        {$Electrician ='Electrician';}
                                    
                                    else{$Electrician = '0';}
                                    
                                    if($Plumber =='1')
                                        {$Plumber ='Plumber';}
                                    
                                    else{$Plumber ='0';}
                                    
                                    if($Carpenter =='1')
                                        {$Carpenter ='Carpenter';}
                                    
                                    else{$Carpenter ='0';}
                                    
                                    if($Plasterer =='1')
                                        {$Plasterer ='Plasterer';}
                                        
                                    else{$Plasterer ='0';}
                                    
                                    if($Painter =='1')
                                        {$Painter ='Painter';}
                                        
                                    else{$Painter ='0';}
                                    
                                
                                
                                $queryJ = "SELECT * FROM TasksT  
                                            WHERE 
                                            
                                            Role = '$Builder' AND user_id = 0 
                                            OR 
                                            Role  = '$Electrician' AND user_id = 0 
                                            OR 
                                            Role  = '$Plumber' AND user_id = 0 
                                            OR 
                                            Role  = '$Carpenter' AND user_id = 0 
                                            OR 
                                            Role  = '$Plasterer' AND user_id = 0 
                                            OR 
                                            Role  = '$Painter' AND user_id = 0
                                            Limit 1";
                                    //loop
                                $result = $connection->query($queryJ);
                                        
                                        if ($result->num_rows > 0 ) {
                                                 // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $ProjectID = $row["Project_id"];
                                                $RoleOpt = $row["Role"];
                                                
                                                $_SESSION['projectOpt1'] = $ProjectID;
                                                $_SESSION['RoleOpt1'] = $RoleOpt;
                                            }
                                            
                                            
                                            echo "</table>";
                                        } else {
                                            echo "0 results";
                                        }
                                        $connection->close();
                                       
                                     ?>
                                    
    
                    
                           
                           
                               </div>
                            </div>
                        </div>
                        
                        
                        
                        <div id ="Project1" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
   
    	<div style="padding:25px;  left:15px;">
		
    		<?php
    		$servername = "127.0.0.1";      //host
            $username = "eveoconnor";       //cloud9 username
            $password = "";                 //no password
            $dbname = "ProArc";             //database to connect to
            $port = 3306;                   //port number is lways 3306
    		
    		?>
    		<div style="position:absolute; font-size:20px; "><?php 
    		
                                                                            		                         //Connect to the database
                                                                    $host = "127.0.0.1";
                                                                    $user = "x14500057";                     //Your Cloud 9 username
                                                                    $pass = "";                                  //Remember, there is NO password by default!
                                                                    $db = "ProArc";                                  //Your database name you want to connect to
                                                                    $port = 3306;                                //The port #. It is always 3306
                                                                    
                                                                    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    		                                                        
    		                                                       $ProjectOpt1 = $_SESSION['projectOpt1']; 
    		                                                       $RoleOpt1 = $_SESSION['RoleOpt1'];
    		                                                       
    		                                                        $query = "SELECT * From ProjectsT WHERE Project_id = '$ProjectOpt1'";
                                                                    $result = mysqli_query($connection, $query);
                                                                    //loop
                                                                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                                                        //assign pulled data to variables
                                                                        
                                                                         $ProjectOpt1Desc = $row['Project_Desc'];
                                                                         $ProjectOpt1Title = $row['Project_Title'];
                                                                         $ProjectOpt1PM = $row['ProMaster_id'];}
                                                                    
                                                                        $_SESSION['ProMasterOpt1_id'] = $ProjectOpt1PM;
                                                                        $_SESSION['ProTitleOpt1'] = $ProjectOpt1Title;
                                                                        $_SESSION['ProDescOpt1'] = $ProjectOpt1Desc;
                                                                        
                                                                        echo $ProjectOpt1Title;
                                                                        
                                                                        
                                                                    
    		                                                     ?>
    		 </div>
    		
    		
    		<div style="float:right;"><div class="container"></div>
	        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Show</button>
        		<div class="modal fade" id="modal-1">
        			<div class="modal-dialog modal-lg">
        				<div class="modal-content">
        					 <div class="modal-header">
        					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
        					 	<h3 class="modal-title"><?php echo $_SESSION['ProTitleOpt1']; ?></h3>
        					 </div>
        					 <div class="modal-body">
        					 	<?php include('Connection.php');
        					 	
        					 	$ProjectOpt1 = $_SESSION['projectOpt1']; 
                                $RoleOpt1 = $_SESSION['RoleOpt1'];
                                $ProjectOpt1Desc = $_SESSION['ProDescOpt1'];
                                
                                $sql = "SELECT * From TasksT Where Project_id = '$ProjectOpt1' AND Role = '$RoleOpt1'";
        					 	$result = $connection->query($sql);
        					 	
        					 	if ($result->num_rows > 0) {
                                            echo "<h4>".$ProjectOpt1Desc."</h4>";
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<ul><li>".$row["Description"]."</li></ul>";
                                            }
        					 	}
        					 	?>
        					 </div>
        
        					 <div class="modal-footer">
        					 	
        					 	
                                    <form method="post">
                                        <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                                        <INPUT type="submit" class="btn btn-lg btn-success" value="Apply" name="submit1" />
                                    </form>
                                    
                                    <?php
                                        include('Connection.php');
                                        $ProjectOpt1PM = $_SESSION['ProMasterOpt1_id'];
                                        $ProjectOpt1 = $_SESSION['projectOpt1']; 
                                        $RoleOpt1 = $_SESSION['RoleOpt1'];
                                        $my_id = $_SESSION['my_id'];
                                        
                                        if(isset($_POST['submit1']))
                                        {
                                             $SQL = "INSERT INTO RequestsT (Request_id,Project_id,Role,Sender_id,Reciever_id,Status) VALUES (null,'$ProjectOpt1','$RoleOpt1','$my_id','$ProjectOpt1PM','Pending')";
                                             $result = mysqli_query($connection,$SQL);
                                        }
                                        ?>
        					 	
        					 </div>
        				</div>
        			</div>
        		</div>
        	</div> 
	
	
	<br><br><br>
	
	
	
	
	<div style="position:absolute; font-size:15px; ">Project 2</div>
    		
    		
    		<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-2">Show</button>
		<div class="modal fade" id="modal-2">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div> 
	
	
	
	
	<br><br><br>
	
	
	
	
	<div style="position:absolute; font-size:15px; ">Project 3</div>
    		
    		
    		<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-3">Show</button>
		<div class="modal fade" id="modal-3">
			<div class="modal-dialog modal-lg">
			    
			    <!-- pop up content -->
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">project 3 bitches</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
				
				
			</div>
		</div>
	</div> 
	
	<br><br><br>
	
	
	
	<div style="position:absolute; font-size:15px; ">Project 4</div>
    		
    		
    		<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-4">Show</button>
		<div class="modal fade" id="modal-4">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div> 
	
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 5</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-5">Show</button>
		<div class="modal fade" id="modal-5">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 6</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-6">Show</button>
		<div class="modal fade" id="modal-6">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 7</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-7">Show</button>
		<div class="modal fade" id="modal-7">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 8</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-8">Show</button>
		<div class="modal fade" id="modal-8">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 9</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-9">Show</button>
		<div class="modal fade" id="modal-9">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<br><br><br>
	
	<div style="position:absolute; font-size:15px; ">Project 10</div>
	
	<div style="float:right;"><div class="container"></div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-10">Show</button>
		<div class="modal fade" id="modal-10">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">yo</h3>
					 </div>
					 <div class="modal-body">
					 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at pharetra sapien. Nulla scelerisque ex eget ligula ornare, vel efficitur quam dictum. Proin malesuada posuere risus suscipit mattis. Suspendisse potenti. Donec et odio nibh. Praesent auctor erat at nunc gravida tincidunt. Ut facilisis, ex ultricies scelerisque aliquam, ex lectus fermentum urna, quis auctor eros ante non dui. 
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	<a href="" class="btn btn-primary">Download</a>
					 </div>
				</div>
			</div>
		</div>
	</div>
			
		</div>
	
    	
    	
    	
    	
</div>
      
                   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
           
            
                                                    
                                                   
                    <!--<button id="">Toggle</button>-->

                    <!--<p>This is a paragraph with little content.</p>-->
                    <!--<p>This is another small paragraph.</p>-->
                           
                           
                           
                            </div>
                        </div>
                        
                         <div id ="ProjectFin" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
                  
                                     <h2> Project Completed list goes here</h2>    
                                     
                               </div>
                            </div>
                        </div>
                        
                        
                        
                        <div id ="Schedule" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
       
                                  <h2> blah</h2>
                  
                        
                
             
                
                  <div id="leftcolumn" class="yui3-u">
                    
                     <div id="mycalendar"></div>
                  </div>
                  <div id="rightcolumn" class="yui3-u">
                   <div style="padding-left:20px;">
                       
                       
                       <!--<div style="float: left; width: 50%">
      <div style="height: 400px; background-color: #efefef; padding: 10px; -webkit-border-radius: 12px; -moz-border-radius: 12px; margin-right: 10px">
        <h3 style="text-align: center; background-color: white; -webkit-border-radius: 10px; -moz-border-radius: 10px; margin-top: 0px; margin-bottom: 20px; padding: 8px">
          Embedded Calendar
        </h3>-->
        <div id="embeddedExample" style="">
          <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
          </div>
          <br />
          <div id="embeddedDateField" class="dateField">
            Select Date
          </div>
          <br />
        </div>
      <!--</div>
    </div>-->
                      
                      
                      
                      
                      
                   </div>
                  </div>
                </div>
                
                
                
                               </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- /.row -->
                
                <!---->
                <!---->
                <!---->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
