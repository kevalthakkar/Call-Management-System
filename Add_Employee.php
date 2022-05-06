<!DOCTYPE html>
<html>
<head>
<title>Add_Customer</title>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body style="background-image: url('images/bg10.png');">


  <nav>
    <button onclick="myFunction()" class="dropbtn">Employee</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="Add_Employee.php">Add Employee</a>
        
        <a href="Edit_Employee.php">Edit Employee</a>
      </div>
    <button href="#" onclick="myFunction2()" class="dropbtn2">Customer</button>
      <div id="myDropdown2" class="dropdown-content2">
        <a href="Add_Customer.php">Add Customer</a>
        <a href="Edit_Customer.php">Edit Customer</a>
      </div>
    <button href="#" onclick="myFunction3()" class="dropbtn3">Product</button>
      <div id="myDropdown3" class="dropdown-content3">
        <a href="Add_Sell_Product.php">Add Sell product Details</a>
        <a href="Edit_Sell_Product.php">Edit Sell product Details</a>
      </div>
    <button href="Call_Details.php">Call Details</button>
    <button href="Assign_Call.php">Assign Call</button>
    <button href="#" onclick="myFunction4()" class="dropbtn4">Report</button>
      <div id="myDropdown4" class="dropdown-content4">
        <a href="Assign_Call_Report.php">Assign Call Report</a>
      </div>
    <div class="animation start-employee"></div>
  </nav>

<form action="insert_Employee.php" method="GET">
<center><table>
 
    <tbody>
      <tr>
        <th>Call ID</th>
        <td><input type="number" name="Call_id"></td>
      </tr>

      <tr>
        <th>First Name</th>
        <td><input type="text" name="First_Name"></td>
      </tr>

     <tr>
        <th>Last Name</th>
        <td><input type="text" name="Last_Name"></td>
      </tr>

     <tr>
        <th>Email</th>
        <td><input type="email" name="Email"></td>
      </tr>

      <tr>
        <th>Phone Number 1</th>
        <td><input type="number" name="Phone_number_1"></td>
      </tr>

      <tr>
        <th>Phone Number 2</th>
        <td><input type="number" name="Phone_number_2"></td>
      </tr>

      <tr>
        <th>Address</th>
        <td><input type="text" name="Address"></td>
      </tr>

       <tr>
        <th>Employee Username</th>
        <td><input type="text" name="Emp_Username"></td>
      </tr>

       <tr>
        <th>Employee Password</th>
        <td><input type="text" name="Emp_Pass"></td>
      </tr>



    </tbody>
</table></center>

<center><input type="submit" value="Submit"></center>
</form>

</script>
</body>
</html>