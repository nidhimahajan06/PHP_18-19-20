<?php
$conn = mysqli_connect("localhost", "root", "", "user");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
$id = $_GET['id']; 

$qry = mysqli_query($conn,"select * from register where uname='$id'"); 

$data = mysqli_fetch_array($qry);

if(isset($_POST['update'])) 
{
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
	
    $edit = mysqli_query($conn,"update register set password='$password', city='$city' where uname='$uname'");
	
    if($edit)
    {
        mysqli_close($conn);
        header("location:fetch.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="uname" Required>
  <input type="text" name="address" value="<?php echo $data['address'] ?>" placeholder="adddress" Required>
  <input type="text" name="city" value="<?php echo $data['city'] ?>" placeholder="city" Required>
  <input type="submit" name="update" value="Update">
</form>
