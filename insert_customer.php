<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
<?php
	$servername = "162.244.93.189";
	$username = "msquaret_task_manage";
	$password = "Msquare@123";
	$dbname = "msquaret_task_manage";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}


	$cid =  $_REQUEST['Call_id'];
	$firm_name =  $_REQUEST['Fm_n'];
   	$gst = $_REQUEST['GST'];
    $first_name=  $_REQUEST['Fn'];
    $last_name = $_REQUEST['Ln'];
    $email = $_REQUEST['Email'];
    $pn1 = $_REQUEST['Phn_no1'];
    $pn2 = $_REQUEST['Phn_no2'];
    $add = $_REQUEST['Add'];
    $totalpc = $_REQUEST['Totalpc'];
    $total_laptop = $_REQUEST['Total_Laptop'];
    $total_cctv = $_REQUEST['Total_cctv'];
    $google_link = $_REQUEST['Google_link'];
    

	$sql = "INSERT INTO customer  VALUES ('$cid','$firm_name', 
            '$gst','$first_name','$last_name','$email','$pn1','$pn2','$add','$totalpc','$total_laptop','$total_cctv','$google_link')";
          
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