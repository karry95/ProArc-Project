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
    
    if(isset($_POST['submit']))
    { 

    $name = $_POST['name']; 
    $user = $_POST['user']; 
    $address = $_POST['address'];
    $county = $_POST['county'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
    $passcode = md5($pass);
    
    $subscription_start = date('Y-m-d');
    $trial_plan = strtotime($subscription_start);
    $plan = strtotime("+7 day", $trial_plan);
    $subscription_end = date('Y-m-d', $plan);
    
    //check Roles of User "True or False"
        if(isset($_POST['Project_Manager']))
    {
        $Project_Manager ='1';
    }
    else
    {
        $Project_Manager ='0';
    }
    
       if(isset($_POST['Builder']))
    {
        $Builder ='1';
    }
    else
    {
        $Builder ='0';
    }
      if(isset($_POST['Electrician']))
    {
        $Electrician ='1';
    }
    else
    {
        $Electrician ='0';
    }
    if(isset($_POST['Plumber']))
    {
        $Plumber ='1';
    }
    else
    {
        $Plumber ='0';
    }
    if(isset($_POST['Carpenter']))
    {
        $Carpenter ='1';
    }
    else
    {
        $Carpenter ='0';
    }
    if(isset($_POST['Plasterer']))
    {
        $Plasterer ='1';
    }
    else
    {
        $Plasterer ='0';
    }
    if(isset($_POST['Painter']))
    {
        $Painter ='1';
    }
    else
    {
        $Painter ='0';
    }
    
    $Other = $_POST['Other']; 

$query = mysqli_query($connection,"SELECT UserName FROM UserT WHERE UserName='".$user."'");

  if (mysqli_num_rows($query) != 0)
  {
      echo "<script type='text/javascript'>alert('username already exists');</script>";
  }

  else{
    
    $queryU = "INSERT INTO UserT (User_id,Name,UserName,Address,County,Email,Password,Subscription_Start,Subscription_End) VALUES 
    (null,'$name','$user','$address','$county','$email','$passcode','$subscription_start','$subscription_end')";
    
    $data = mysqli_query ($connection,$queryU)or die(mysqli_error());
    
    $query_id = "SELECT * FROM UserT WHERE UserName = '$user'";
    $result = mysqli_query($connection, $query_id);
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
            //assign pulled data to variables
            $tempUser_id = $row['User_id'];}
            
    $queryR = "INSERT INTO RolesT (User_id,Project_Manager,Builder,Electrician,Plumber,Carpenter,Plasterer,Painter,Other) VALUES 
    ($tempUser_id,'$Project_Manager','$Builder','$Electrician','$Plumber','$Carpenter','$Plasterer','$Painter','$Other')";
                
    
    $data = mysqli_query ($connection,$queryR)or die(mysqli_error()); 
    
    if($data) 
    {
     session_start();
     
      
            
           
            
            if($Project_Manager != 1){
                
            // Register $myusername, $mypassword and redirect to file "login_success.php"
            $_SESSION['myusername'];
            $_SESSION['mypassword']; 
            
            $_SESSION['myuser'] = $user;
            
            header("location:tradesman-dashboard/tradesmandashboard.php");
            
             }else {
            $_SESSION['myusername'];
            $_SESSION['mypassword']; 
            
            $_SESSION['myuser'] = $user;
            
            header("location:tradesman-dashboard/ProjectManDashboard.php");
                 
             }
            
    } 
    } 
}





mysqli_close($connection);

    ?>
    