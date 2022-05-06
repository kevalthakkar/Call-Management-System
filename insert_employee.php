<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body>
<?php
    $servername = "162.244.93.189";
    $username = "root";
    $password = "";
    $dbname = "msquaret_task_manage";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $cid =  $_REQUEST['Call_id'];
    $first_name=  $_REQUEST['First_Name'];
    $last_name = $_REQUEST['Last_Name'];
    $email = $_REQUEST['Email'];
    $pn1 = $_REQUEST['Phone_number_1'];
    $pn2 = $_REQUEST['Phone_number_2'];
    $add = $_REQUEST['Address'];
    $emp_username = $_REQUEST['Emp_Username'];
    $emp_pass = $_REQUEST['Emp_Pass'];
    
    $sql = "INSERT INTO employees  VALUES ('$cid','$first_name','$last_name','$email','$pn1','$pn2','$add','$emp_username','$emp_pass')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            
        } else{
            echo "" . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);

?>
</body>
</html>