<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "user");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>remember me</title>
</head>
<?php
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $query = "select * from users where user_name = '".$user_name."' and user_pass = '".$user_pass . "'";
    $result = mysqli_query( $conn, $query);
    $row = mysqli_fetch_array($result);
    $num_rows = mysqli_num_rows($result);
if($num_rows==1){
$_SESSION['logged'] = 1;
$_SESSION['user'] = $user_name;
$_SESSION['valid_user'] =1;
if( ($_POST['remember_me']==1) || ($_POST['remember_me']=='on')) {
$hour = time()+3600 *24 * 30;
setcookie('userid', $row['user_id'], $hour);
setcookie('username', $user_name, $hour);
setcookie('active', 1, $hour);
}
header("Location:dashboard.php");
}
else{
header("Location:login.php?error=1");
}
}else{
echo "Unauthorized access. Please <a href='login.php'>Login</a>";
die();
}
?>
</body>
</html>