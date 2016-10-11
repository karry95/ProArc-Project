<?php
    
    
   
    //Connect to the database
    $host = "127.0.0.1";
    $user = "x14500057";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "ProArc";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysqli_error());
    


        mysqli_select_db($connection,$db) or die(mysqli_error($connection));
        
        // username and password sent from form 
        $myusername=$_POST['user']; 
        $mypassword=$_POST['pass']; 
        
        // To protect MySQL injection (more detail about MySQL injection)
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        
        $myusername = mysqli_real_escape_string($connection,$myusername);
        $mypassword = mysqli_real_escape_string($connection,$mypassword);
        
       
        
        $mypasswordsecure = md5($mypassword); // Encrypted Password
        
        $sql = "SELECT * FROM UserT WHERE UserName = '$myusername' and Password ='$mypasswordsecure'"; 
        
        
        
        // .md5($password).
        
        $result=mysqli_query($connection,$sql);
        
        // Mysql_num_row is counting table row
        $count=mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count==1){
        session_start();
        
        //And now to perform a simple query to make sure it's working
        $query = "SELECT u.* , r.* FROM UserT u,RolesT r WHERE u.User_id = r.User_id AND UserName = '$myusername'";
       
        $result = mysqli_query($connection, $query);
        //loop
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
            $tempRole = $row['Project_Manager'];
            
            }if($tempRole != '1'){
                
            // Register $myusername, $mypassword and redirect to file "login_success.php"
            $_SESSION['myusername'];
            $_SESSION['mypassword']; 
            
            $_SESSION['myuser'] = $myusername;
            
            header("location:tradesman-dashboard/tradesmandashboard.php");
            
             }else {
            $_SESSION['myusername'];
            $_SESSION['mypassword']; 
            
            $_SESSION['myuser'] = $myusername;
            
            header("location:tradesman-dashboard/ProjectManDashboard.php");
        
        
        
        }}else {
        echo "Wrong Username or Password";
        }
        

  ?>