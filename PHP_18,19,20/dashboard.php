<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Remember me</title>
</head>
<?php
if(isset($_COOKIE['username'])) $user = $_COOKIE['username'];
if(isset($_SESSION['user'])) $user = $_SESSION['user'];
if(!isset($user)){
echo "Unauthorized access";
 echo "Please <a href='remember.php'>Login</a>";
die();
}
?>
<p>
Welcome <?php echo $user; ?>
<br>
<a href='logout.php'>Logout</a>
</p>
</body>
</html>