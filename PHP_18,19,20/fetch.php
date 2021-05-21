<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Username</td>
    <td>Password</td>
    <td>Confirm Password</td>
    <td>Address</td>
    <td>City</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

$conn = mysqli_connect("localhost", "root", "", "user");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

$records = mysqli_query($conn,"select * from register"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['uname']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['cpassword']; ?></td>    
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['city']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['uname']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['uname']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
