<!DOCTYPE html>
<?php
    session_start();
    $myusername = $_SESSION['myuser'];
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet" />
    
    
    <!-- Calencar link -->
    
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="calendarview.css"/>
    <script type="text/javascript" src="calendarview.js"></script>
    <script type="text/javascript" src="prototype.js"></script>
    
    
    
    
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
		
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		
		<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
        <script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
		
		<script src="jQuery.js" type="text/javascript"></script>
    <script src="functions.js" type="text/javascript"></script>
  <!--link  href="http://yui.yahooapis.com/3.17.2/build/fancy-widget/assets/skins/sam/fancy-widget-skin.css" rel="stylesheet" type="text/css" /!-->
  
   <meta charset="utf-8">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet" />
		<link href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" rel="stylesheet" />
		<link href="http://arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css" rel="stylesheet" />
		
		<!-- SCRIPTS -->
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    
    <title>ProArc - <?php
                                
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
                                    
                                    
                                    $tempName = $row['Name'];
                                    $my_id = $row['User_id'];
                                    
                                    $_SESSION['my_id'] = $my_id;
                                }
                                    
                                    
                                    //Displays pulled data
                                    echo
                                    $tempName;
                                
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
                
                <script language="javascript">
     function addRow(tableID) { 

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        cell1.innerHTML = "";

        var cell2 = row.insertCell(1);
        cell2.innerHTML = "<input type='text' style='width:450px;' name='description[]' required = 'required'>";
        
        var cell3 = row.insertCell(2);
        var element2 = document.createElement("input");
        element2.type = "date";
        element2.name="start_date[]";
        element2.class="form-control";
        element2.id = "registration-date"
        element2.required = 'required';
        cell3.appendChild(element2);

        var cell4 = row.insertCell(3);
        cell4.innerHTML =  '<select name="role[]" required ><option value = "">Select Profession</option><option value"1">Builder</option><option value"2">Electrician</option><option value"3">Plumber</option><option value"4">Carpenter</option> <option value"5">Plasterer</option><option value"6">Painter</option></select>'; 
    					      
        
        var cell5 = row.insertCell(4);
        cell5.innerHTML =  "<input type='text'  name='approx_price[]' required = 'required' />";
        
        var cell6 = row.insertCell(5);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name="chkbox[]";
        cell6.appendChild(element1);
        }
        
        
        
        
        
        

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[5].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        }catch(e) {
            alert(e);
        }
    }

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
    animation-duration: 0.4s;
    
    font-size:18px;
    font-style: italic;}

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
    padding-bottom:5%;
    background-color:none ;
    color: black;
    border-radius:15px;
  
  }

     
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
                

</head>

<body><?php include('Connection.php');

            $My_id = $_SESSION['my_id'];
            
            $query = "SELECT * From RequestsT Where Reciever_id = '$My_id' AND Status = 'Pending' Limit 1";
            $result = mysqli_query($connection, $query);
            
            
                                //loop
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                     if ($row['Status'] == 'Pending'){
                                    
                                        
                                            
                                        $userRole = $row['Role'];
                                        $_SESSION['UserRole'] = $userRole;
                                        
        					 	        $Request_id = $row['Request_id'];
        					 	        $_SESSION['Curr_ReqID'] = $Request_id;
        					 	        
        					 	        $Project_id = $row['Project_id'];
        					 	        $_SESSION['Project_id'] = $Project_id;
        					 	        
        					 	        
        					 	    
        					 	    echo "<script language = 'javascript'>";
        					 	    echo '$(document).ready(function () {
                                    
                                        //select the POPUP FRAME and show it
                                        $("#popup").hide().fadeIn(1000);
                                    
                                        //close the POPUP if the button with id="close" is clicked
                                        $("#close").on("click", function (e) {
                                            e.preventDefault();
                                            $("#popup").fadeOut(1000);
                                        });
                                        
                                        
                                    
                                    });';
                                    echo "</script>";}
                                     else{
                                                echo "<script>";
                                                   echo "alert('Welcome To Your Dashboard');";
                                                  echo "</script>";
                                               
                                            }
                                }
                                   
                                    
?>
           
            <div id="popup" class="modall" style="display:none;">

				<div class="modal-contentt">
					 <div class="modal-headerr">
					 	
					 	<h3 class="modal-title">Job Requests</h3>
					 </div>
					 <div class="modal-bodyy">
					     
					 	<?php 
					 	        $SenderID = $_SESSION['Sender_id'];
					 	        $Project_idS = $_SESSION['Project_id'];
					 	        $SUserRole = $_SESSION['UserRole'];
					 	        
					 	         
					 	        include('Connection.php');
					 	        
					 	        $query = "SELECT * From ProjectsT Where Project_id = '$Project_idS'";
                                $result = mysqli_query($connection, $query);
					 	
					        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					 	
					                $SProjectTitle = $row['Project_Title'];}
                                    
					 	       $query = "SELECT * FROM UserT Where User_id = '$SenderID'";
                                $result = mysqli_query($connection, $query);
					 	
					        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					 	
					                $SenderName = $row['Name'];
                                    $SenderUserName = $row['UserName'];}
                                    
                                    echo "<br>Project Name: <b>".$SProjectTitle."</b> <br>From: <b> ".$SenderUserName."</b><br><br> Hi My Name is ".$SenderName." I Would like to Work in your project under the following role <b>:".$SUserRole."</b>";
					 	        ?>
					 
					 </div>

					 <div class="modal-footerr">
					     <form method="post">
					 	<!--<button type="submit" id="close" class="btn btn-lg btn-danger pull-left" value="Decline" name="submitD">Decline </button>-->
					 	<!--<button type="submit" id="closeA" class="btn btn-lg btn-success pull-right" value="Accept" name="submitA">Accept </button>-->
					 	<INPUT type="submit" class="btn btn-lg btn-success pull-right" value="Accept" name="submitA" />
					 	<INPUT type="submit" class="btn btn-lg btn-danger pull-left" value="Decline" name="submitD" />
					 	</form>
					 	
					 	<?php
                                         include('Connection.php');

                                        $Request_id = $_SESSION['Curr_ReqID'];
                                        
                                        $query = "SELECT * From RequestsT Where Request_id = '$Request_id' ";
                                        $result = mysqli_query($connection, $query);
                                        
                                        
                                                            //loop
                                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                            
                                            $SenderID = $row['Sender_id'];}
                                            $_SESSION['Sender_id'] = $SenderID;
                                        
                                        
                                        
                                        $my_id = $_SESSION['my_id'];
                                        $Request_id = $_SESSION['Curr_ReqID'];
                                        
                                        $Project_id = $_SESSION['Project_id'];
                                       
                                        $userRole = $_SESSION['UserRole'];
                                        
                                        
                                        if(isset($_POST['submitA']))
                                        {       
                                            
                                            $SQLT = "UPDATE TasksT SET user_id = '$SenderID' Where Project_id = '$Project_id' AND role = '$userRole' ";
                                             $result = mysqli_query($connection,$SQLT);
                                             
                                             $SQL = "UPDATE RequestsT SET Status = 'Accepted' Where Request_id = '$Request_id'";
                                             $result = mysqli_query($connection,$SQL);
                                             
                                            //  $SQLT = "UPDATE TasksT SET user_id = '$Sender_id' Where Project_id = '$Project_id' AND role = '$userRole' ";
                                            //  $result = mysqli_query($connection,$SQLT);
                                        }
                                        else if(isset($_POST['submitD'])){
                                        
                                             $SQL = "UPDATE RequestsT SET Status = 'Declined' Where Request_id = '$Request_id'";
                                             $result = mysqli_query($connection,$SQL);
                                        }
                                        ?>
					 	<br>
					 </div>
				</div>

			</div>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    
                </button>
                <a class="navbar-brand" href="../index.html">ProArc</a>
                
                 <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">
                <li class="dropdown nav-item active">
                    
                    <li class="dropdown nav-item">
                    <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                                
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
                                    
                                    
                                    //Displays pulled data
                                    echo
                                    $tempForename;
                                
                                     }?>
                                     <b class="caret"></b></a>
                                     
                    <ul class="dropdown-menu" style="right: 10px; left: auto;">
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
            
            
            
                       
        </nav>

        <div id="page-wrapper"  >

            <div class="container-fluid"  >
                
                

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
                                        <div class="huge">Add Project</div>
                                        <div>Add new Project here</div>
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
                                        <div class="huge">Current Projects</div>
                                        <div>Projects</div>
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
                                        <div class="huge">Projects Completed</div>
                                        <div>Projects Completed</div>
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
                                        <div>Tasks displayed on calander here</div>
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
                <div class="row clearfix">
                    <div class="col-xl-12 text-xs-center">
                        
                        <div id ="Ratings1" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
                                       <h2>Project Title:</h2>
                                     <div class="col-md-12 table-responsive" >
                                         <table class="table table-bordered table-hover table-sortable" id="tab_logic">
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

                                     $sql = "SELECT p.* , t.* FROM ProjectsT p,TasksT t WHERE p.Project_id=t.Project_id";
                                        $result = $connection->query($sql);
                                        
                                         while($row = $result->fetch_assoc()) {
                                        $Project_Title = $row["Project_Title"];
                                        $Project_Desc = $row["Description"];}
                                        
                                        echo "<h1>".$Project_Title."</h1>";
                                        echo "<h1>".$Project_Desc."</h1>";
                                        $sql = "SELECT p.* , t.* FROM ProjectsT p,TasksT t WHERE p.Project_id=t.Project_id";
                                        $result = $connection->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            echo "<table class='table table-bordered table-hover table-sortable'><tr><th>Task No.</th><th>Description</th><th>Start Date</th><th>Role</th><th>Client</th></tr>";
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr><td></td><td>".$row["Description"]."</td><td> ".$row["Start_Date"]."</td><td> ".$row["Role"]."</td><td><input type='checkbox' name='check[]' value='...'/></td></tr>";
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
                            </div>
                        </div>
                        </div>
                        
                        
                        
                        <div id ="Project1" class="card card-default" style="display: none;">
                            <div class="card-block">
                              
    <div class="row clearfix" style="text-align:center;">
    	<div class="col-md-12 table-responsive" >
		<form action="ProjectSave.php" method="post" name="f"> 
		
		<input type="textarea" name="proname" placeholder="Project Name">
                                            <br>
                                            <br>
                                            <input name="Project_Description" id="taid" cols="35" wrap="soft" placeholder="Project Description..."></input>
                                            <br>
                                            <br>
                                           
		    
		    
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
                        
                        <col width="90">
                        <col width="350">
                        <col width="190">
                        <col width="180">
                        <col width="110">
                        <thead>
					        <tr>
						        <th class="text-center" >Task No. </th>
						        <th class="text-center">Description</th>
						        <th class="text-center ">Start Date:</th>
            					<th class="text-center  ">Role</th>
        						<th class="text-center  ">Approx. Price :</th>
        						<th class="text-center  " style="width:50px">Check</th>
        					</tr>
				</thead>
				<tbody id="dataTable">
			 </tbody>
                </TABLE>
    				
</div><div>
    <INPUT type="button" class="btn btn-lg btn-primary " value="Add Row" onClick="addRow('dataTable')" />

<INPUT type="button" class="btn btn-lg btn-danger " value="Delete Row" onClick="deleteRow('dataTable')" />

<INPUT type="submit" class="btn btn-lg btn-success" value="Save" name="submit" />
</div>



<br><br><h style="text-align:center;"> Select tradesmen below to Notify: </h><br><br>
<div class="list-group" >
        <a  class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Carpenter </a>
            <a  class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Plumber </a>
            <a  class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Electrician </a>
            <a  class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Engineer</a>
             <a  class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Plasterer</a>
             <a class="list-group-item"  data-toggle ="modal" data-target="#myModal">
            <i class="fa fa-user"></i> Painter</a>
    </div>     
    
    
    </form>
    <br><br>	<!-- onClick="location.href='../connectivity-project'" -->
                
                <input type="submit" onClick="save();" value="Save Project"/>
                                <script>
                                %(document) function save()  { 
                                val = document.myform.rowClearfix.value; 
                                mydoc = document.open(); 
                                mydoc.write(val); 
                                mydoc.execCommand("saveAs",true,".txt"); 
                                history.go(-1);
                                } 
                                
                                </script> 
<!-- Code after fading div checkbox to notify tradesmen by email -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

    	<div class="modal-content" >

	    	<div class="modal-header">
		    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    	<h3 class="modal-title" id="myModalLabel">Tradesmen</h3>
	    	</div> <!-- /.modal-header -->

			<div class="modal-body">
				<form role="form">
	 
	<div class="check" data-toggle="buttons">
	
	    <a class="btn btn-primary bt-primary"><span    class="fa fa-check-square" ></span> Please notify this person</a>
	    </span checked ><br>
	    <a class="btn btn-primary btn-primary"><span class="fa fa-check-square" :checked></span> Please notify this person</a>
	    </span><br>
	    <a class="btn btn-primary btn-primary"><span class="fa fa-check-square"></span> Please notify this person</a>
	    </span><br>
	    <a class="btn btn-primary btn-primary"><span class="fa fa-check-square"></span> Please notify this person</a>
	    </span><br>
	    <a class="btn btn-primary btn-primary"><span class="fa fa-check-square"></span> Please notify this person</a>
	    </span><br>
	    <a class="btn btn-primary btn-primary" :checked><span class="fa fa-check-square" ></span> Please notify this person</a>
	    </span><br>
	    
	    
    				
    </div>
<br><br>



<style>
    
.btn span.  {    			
    opacity: 0;				
}
.btn.active span. {				
	opacity: 1;				
}
</style>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Send email notification
						</label>
                        
					</div> <!-- /.checkbox -->
                    
                     <button type="button" class="btn btn-info">Notify</button>
				</form>

			</div> <!-- /.modal-body -->

			<div class="modal-footer">
			<button class="form-control btn btn-primary">Finish</button>

			<br><br>	<div class="progress">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
						<span class="sr-only">progress</span>
					</div>
				</div>
            </div>
            </div> <!-- /.modal-header -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div>




<style>

/* For Auto Task Numbering on Table */
table {
    counter-reset: rowNumber+1;
}

table tr:not(:first-child) {
    counter-increment: rowNumber+1;
}

table tr td:first-child::before {
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
}




.modal-body{
    
     height:auto;
    
}

#myModal{
    margin:0 auto;
    top:100px;
    bottom:50px;
   
   
}
.modal-dialog {
    width: 350px;
    
}
    
.modal-footer {
    height: 70px;
    margin: 0;
}
.modal-footer .btn {
    font-weight: bold;
    margin-left:auto;
    margin-right:auto;
    
}
.modal-footer .progress {
    display: none;
    height: 32px;
    margin: 0;
}

.state-icon {
    left: -5px;
}
.input-group-addon {
    color: #fff;
    background: #3276B1;
}

.list-group{
    text-align:left;
    left:30px;
    right:220px;
    margin:0 auto;
}    



</style>

<script>
    $(document).ready(function(){
    $('.modal-footer button').click(function(){
		var button = $(this);

		if ( button.attr("data-dismiss") != "modal" ){
			var inputs = $('form input');
			var title = $('.modal-title');
			var progress = $('.progress');
			var progressBar = $('.progress-bar');

			inputs.attr("disabled", "disabled");

			button.hide();

			progress.show();

			progressBar.animate({width : "100%"}, 100);

			progress.delay(1000)
					.fadeOut(600);

			button.text("Close")
					.removeClass("btn-primary")
					.addClass("btn-success")
    				.blur()
					.delay(1600)
					.fadeIn(function(){
						title.text("Notification sent successfully");
						button.attr("data-dismiss", "modal");
					});
		}
	});




	$('#myModal').on('hidden.bs.modal', function (e) {
		var inputs = $('form input');
		var title = $('.modal-title');
		var progressBar = $('.progress-bar');
		var button = $('.modal-footer button');

		inputs.removeAttr("disabled");

		title.text("Tradesmen");+-

		progressBar.css({ "width" : "0%" });

		button.removeClass("btn-success")
				.addClass("btn-primary")
				.text("Finish")
				.removeAttr("data-dismiss");
                
	});
});
</script>




      
                   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
           
            
                                                    
                                                   
                    <!--<button id="">Toggle</button>-->

                    <!--<p>This is a paragraph with little content.</p>-->
                    <!--<p>This is another small paragraph.</p>-->
                           
                           
                           
                            </div>
                        </div>
                        
                         <div id ="ProjectFin" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
                                   
                  
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

                                     $sql = "SELECT p.* , t.* FROM ProjectsT p,TasksT t WHERE p.Project_id=t.Project_id";
                                        $result = $connection->query($sql);
                                        
                                         while($row = $result->fetch_assoc()) {
                                        $Project_Title = $row["Project_Title"];
                                        $Project_Desc = $row["Description"];}
                                        
                                        echo "<h1>".$Project_Title."</h1>";
                                        echo "<h1>".$Project_Desc."</h1>";
                                        $sql = "SELECT p.* , t.* FROM ProjectsT p,TasksT t WHERE p.Project_id=t.Project_id";
                                        $result = $connection->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            echo "<table class='table table-bordered table-hover table-sortable'><tr><th>Task No.</th><th>Description</th><th>Start Date</th><th>Role</th><th>Client</th></tr>";
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr><td></td><td>".$row["Description"]."</td><td> ".$row["Start_Date"]."</td><td> ".$row["Role"]."</td><td> ".$row["Start_Date"]."</td></tr>";
                                            }
                                            
                                            
                                            echo "</table>";
                                        } else {
                                            echo "0 results";
                                        }
                                        $connection->close();
                                       
                                     ?> 
                                     <img src="../assets/img/accepted.png"  alt="text">
                                     
                                     <style>
                                         
                                             img {    
                                             position:absolute;
                                             right:35%;
                                             top:40%;
                                             width:35%;
                                             height:40%;
                                             opacity: 0.9;
                                             filter: alpha(opacity=40); /* For IE8 and earlier */
                                                }
                                                
                                                img:hover {
                                                    opacity: 0.1;
                                                    filter: alpha(opacity=100); /* For IE8 and earlier */
                                                }
                                         
                                     </style>
                               </div>
                            </div>
                        </div>
                        
                        
                        
                        <div id ="Schedule" class="card card-default" style="display: none;">
                            <div class="card-block">
                               <div class="container">
                                   
                                   
                                   
                                   
                                   
                                   
                             
                 
                 
                        <div style=" margin-left: auto; margin-right: auto; width: 100%">
                          <div style="height: 400px;  background-color: #efefef;  -webkit-border-radius: 8px; -moz-border-radius: 8px; margin:auto;">
                            <h3 style="text-align: center; background-color: #efefef ; -webkit-border-radius: 4px; -moz-border-radius: 4px; margin-top: 10px; margin-bottom: 10px;  padding: 5px">
                             Calendar
                            </h3>
                            
                              <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
                             <div class="calendar">
                                 <!--table>
                                     <thead>
                                         <tr>
                                             <td colspan="7" class="title">April 2016</td>
                                         </tr>
                                        
                                         <tr>
                                             <th class="weekend">S</th>
                                             <th>M</th>
                                             <th>T</th>
                                             <th>W</th>
                                             <th>T</th>
                                             <th>F</th>
                                             <th class="weekend">S</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="days">
                                             <td class="otherDay weekend">27</td>
                                             <td class="otherDay">28</td>
                                             <td class="otherDay">29</td>
                                             <td class="otherDay">30</td>
                                             <td class="otherDay">31</td>
                                             <td class>1</td>
                                             <td class="weekend">2</td>
                                         </tr>
                                         <tr class="days">
                                             <td class="weekend">3</td>
                                             <td class="">4</td>
                                             <td class="">5</td>
                                             <td class="">6</td>
                                             <td class="">7</td>
                                             <td class="selected today">8</td>
                                             <td class="weekend">9</td>
                                        </tr>
                                        <tr class="days">
                                            <td class="weekend">10</td>
                                            <td class="">11</td>
                                            <td class="">12</td>
                                            <td class="">13</td>
                                            <td class="">14</td>
                                            <td class="">15</td>
                                            <td class="weekend">16</td>
                                        </tr>
                                        <tr class="days">
                                            <td class="weekend">17</td>
                                            <td class="">18</td>
                                            <td class="">19</td>
                                            <td class="">20</td>
                                            <td class="">21</td>
                                            <td class="">22</td>
                                            <td class="weekend">23</td>
                                        </tr>
                                        
                                         <tr class="days">
                                             <td class="weekend">24</td>
                                             <td class=>25</td>
                                             <td class=>26</td>
                                             <td class=>27</td>
                                             <td class=>28</td>
                                             <td class=>29</td>
                                             <td class="weekend">30</td>
                                         </tr>
                                         <tr class="days" style="display: none;">
                                             <td class="otherDay weekend">1</td>
                                             <td class="otherDay">2</td>
                                             <td class="otherDay">3</td>
                                             <td class="otherDay">4</td>
                                             <td class="otherDay">5</td>
                                             <td class="otherDay">6</td>
                                             <td class="otherDay weekend">7</td>
                                             </tr>
                                     </tbody>
                                 </table>
                             </div>
                              </div>
                              <br />
                              <div id="embeddedDateField" class="dateField">
                                Selected Date:
                              </div>
                              <br />
                            </div>
                          </div>
                        </div>
                            </div>
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                        <script>
                          function setupCalendars() {
                            // Embedded Calendar
                            Calendar.setup(
                              {
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
                        
                        

                      
                     
                     <style>
                      body {
                        font-family: Trebuchet MS;
                      }
                      div.calendar {
                        max-width: 400px;
                        margin:auto;
                       
                        
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
                    
 div.calendar
{
  font-size: smaller;
  color: #000;
 
}

.button{
  position:inherit;
    margin:0 auto;
}

div.calendar table
{
  background-color: #eee;
  border: 1px solid #aaa;
  border-collapse: collapse;
  margin:0 auto;
  
  
}

div.calendar thead {
  background-color: white;
}

div.calendar td,
div.calendar th
{
  padding: 3px;
  text-align: center;
}

div.calendar td.title
{
  font-weight: bold;
}

div.calendar th
{
  background: #ddd;
  border-bottom: 1px solid #ccc;
  border-top: 1px solid #ccc;
  font-weight: bold;
  color: #555;
}

div.calendar tr.days td {
  width: 2em;
  color: #555;
  text-align: center;
  cursor: pointer;
}

div.calendar tr.days td:hover,
div.calendar td.button:hover
{
  background-color: #34ABFA;
  cursor: pointer;
}

div.calendar tr.days td:active
div.calendar td.button:active

{
  background-color: #cde;
}

div.calendar tr.days td.selected
{
  font-weight: bold;
  background-color: #fff;
  color: #000;
}

div.calendar tr.days td.today
{
  font-weight: bold;
  color: #D50000;
}

div.calendar tr.days td.otherDay
{
  color: #bbb;
}
           </style-->
                 
                <script>
                        setCal()
                        
                        function getTime() {
                            
                        // initialize time-related variables with current time settings
                        var now = new Date()
                        var hour = now.getHours()
                        var minute = now.getMinutes()
                        now = null
                        var ampm = "" 
                        
                        // validate hour values and set value of ampm
                        if (hour >= 12) {
                        hour -= 12
                        ampm = "PM"
                        } else
                        ampm = "AM"
                        hour = (hour == 0) ? 12 : hour
                        
                        // add zero digit to a one digit minute
                        if (minute < 10)
                        minute = "0" + minute // do not parse this number!
                        
                        // return time string
                        return hour + ":" + minute + " " + ampm
                        }
                        
                        function leapYear(year) {
                        if (year % 4 == 0) // basic rule
                        return true // is leap year
                        /* else */ // else not needed when statement is "return"
                        return false // is not leap year
                        }
                        
                        function getDays(month, year) {
                        // create array to hold number of days in each month
                         
                        var ar = new Array(12)
                        ar[0] = 31 // January
                        ar[1] = (leapYear(year)) ? 29 : 28 // February
                        ar[2] = 31 // March
                        ar[3] = 30 // April
                        ar[4] = 31 // May
                        ar[5] = 30 // June
                        ar[6] = 31 // July
                        ar[7] = 31 // August
                        ar[8] = 30 // September
                        ar[9] = 31 // October
                        ar[10] = 30 // November
                        ar[11] = 31 // December
                        
                        // return number of days in the specified month (parameter)
                        return ar[month]
                        }
                        
                        function getMonthName(month) {
                        // create array to hold name of each month
                        var ar = new Array(12)
                        ar[0] = "January"
                        ar[1] = "February"
                        ar[2] = "March"
                        ar[3] = "April"
                        ar[4] = "May"
                        ar[5] = "June"
                        ar[6] = "July"
                        ar[7] = "August"
                        ar[8] = "September"
                        ar[9] = "October"
                        ar[10] = "November"
                        ar[11] = "December"
                        
                        // return name of specified month (parameter)
                        return ar[month]
                        }
                        
                        function setCal() {
                        // standard time attributes
                        var now = new Date()
                        var year = now.getYear()
                        if (year < 1000)
                        year+=1900
                        var month = now.getMonth()
                        var monthName = getMonthName(month)
                        var date = now.getDate()
                        now = null
                        
                        // create instance of first day of month, and extract the day on which it occurs
                        var firstDayInstance = new Date(year, month, 1)
                        var firstDay = firstDayInstance.getDay()
                        firstDayInstance = null
                        
                        // number of days in current month
                        var days = getDays(month, year)
                        
                        // call function to draw calendar
                        drawCal(firstDay + 1, days, date, monthName, year)
                        }
                        
                        function drawCal(firstDay, lastDate, date, monthName, year) {
                       
                       
                        // constant table settings
                        var headerHeight = 50 // height of the table's header cell
                        var border = 2 // 3D height of table's border
                        var cellspacing = 4 // width of table's border
                        var headerColor = "black" // color of table's header
                        var headerSize = "+3"  // size of tables header font
                        
                        var colWidth = 60 // width of columns in table
                        var dayCellHeight = 25 // height of cells containing days of the week
                        var dayColor = "darkblue" // color of font representing week days
                        var cellHeight = 40 // height of cells representing dates in the calendar
                        var todayColor = "red" // color specifying today's date in the calendar
                        var timeColor = "purple" // color of font representing current time
                        
                        
                        
                      
                        
                        
                        // create basic table structure
                        var text = "" // initialize accumulative variable to empty string
                        text += '<CENTER>'
                        text += '<TABLE BORDER=' + border + ' CELLSPACING=' + cellspacing + '>' // table settings
                        text += '<TH COLSPAN=7 HEIGHT=' + headerHeight + '>' // create table header cell
                        text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>' // set font for table header
                        text += monthName + ' ' + year 
                        text += '</FONT>' // close table header's font settings
                        text += '</TH>' // close header cell
                        
                        // variables to hold constant settings
                        var openCol = '<TD WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>'
                        openCol += '<FONT COLOR="' + dayColor + '">'
                        var closeCol = '</FONT></TD>'
                        
                        // create array of abbreviated day names
                        var weekDay = new Array(7)
                        weekDay[0] = "Sun"
                        weekDay[1] = "Mon"
                        weekDay[2] = "Tues"
                        weekDay[3] = "Wed"
                        weekDay[4] = "Thu"
                        weekDay[5] = "Fri"
                        weekDay[6] = "Sat"
                        
                        // create first row of table to set column width and specify week day
                        text += '<TR ALIGN="center" VALIGN="center">'
                        for (var dayNum = 0; dayNum < 7; ++dayNum) {
                        text += openCol + weekDay[dayNum] + closeCol 
                        }
                        text += '</TR>'
                        
                        // declaration and initialization of two variables to help with tables
                        var digit = 1
                        var curCell = 1
                        
                        for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {
                        text += '<TR ALIGN="right" VALIGN="top">'
                        for (var col = 1; col <= 7; ++col) {
                        if (digit > lastDate)
                        break
                        if (curCell < firstDay) {
                        text += '<TD></TD>';
                        curCell++
                        } else {
                        if (digit == date) { // current cell represent today's date
                        text += '<TD HEIGHT=' + cellHeight + '>'
                        text += '<FONT COLOR="' + todayColor + '">'
                        text += digit
                        text += '</FONT><BR>'
                        text += '<FONT COLOR="' + timeColor + '" SIZE=2>'
                        text += '<CENTER>' + getTime() + '</CENTER>'
                        text += '</FONT>'
                        text += '</TD>'
                        } else
                        text += '<TD HEIGHT=' + cellHeight + '>' + digit + '</TD>'
                        digit++
                        }
                        }
                        text += '</TR>'
                        }
                        
                        // close all basic table tags
                        text += '</TABLE>'
                        text += '</CENTER>'
                        
                        // print accumulative HTML string
                        document.write(text) 
                        }
                        
                        
                        
                        
                   
                        </script>
                       

                 
                 
                 
                 
         
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
