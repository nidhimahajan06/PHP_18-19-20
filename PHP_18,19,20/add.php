<!DOCTYPE html>
<html>

<head>
	<title>Add DAta</title>
</head>

<body>

	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "user");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 5 values from the form data(input)
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$uname',
			'$password','$cpassword','$address','$city')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3><b>Inserted Successfully. <br>
			  If you want to update please click on the below button</b></h3>";

			echo nl2br("\n$uname\n $password\n "
				. "$cpassword\n $address\n $city");
				
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		
		?>
	<br><br>
	<button><a href="fetch.php">EDIT/DELETE</a></button></center>
</body>

</html>
