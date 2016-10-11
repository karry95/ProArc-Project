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
    
    if($_POST[submit])
    {
        
        
    session_start();
    $myusername = $_SESSION['myuser'];
    
    
    
        
        $query_id = "SELECT * FROM UserT WHERE UserName = '$myusername'";
        $result = mysqli_query($connection, $query_id);
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
            //assign pulled data to variables
            $PMaster_id = $row['User_id'];}
            $proname = $_POST['proname']; 
            $Project_Description = $_POST["Project_Description"];
            
            $queryP = "INSERT INTO ProjectsT (Project_id,Project_Title,Project_Desc,ProMaster_id) VALUES
            (null,'$proname','$Project_Description','$PMaster_id')";
        
            $data = mysqli_query ($connection,$queryP)or die(mysqli_error());
            
            
            
            $queryPid = "SELECT * FROM ProjectsT  WHERE ProMaster_id = '$PMaster_id'  ORDER BY Project_id DESC LIMIT 1";
            
            
            $result = mysqli_query($connection, $queryPid);
         while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                
            $Project_id = $row['Project_id'];}
            
        foreach ($_POST['description'] as $key => $value) 
        {   
            
            $description = $_POST["description"][$key];
            $start_date = $_POST["start_date"][$key];
            $role = $_POST["role"][$key];
            $approx_price = $_POST["approx_price"][$key];

            $sql = mysqli_query($connection,"insert into TasksT values ('','$Project_id','$description','$start_date','$role','','','$PMaster_id','$approx_price')"); 
            
            echo "<script>";
            echo "alert('Your Project Has Been Successfully Saved!');";
            echo "</script>";
            
            $_SESSION['myusername'];
            $_SESSION['mypassword']; 
            
            $_SESSION['myuser'] = $myusername;
            
            header("location:ProjectManDashboard.php");
            
           
            
        }
        
    }   ?>