<?php
session_start();
unset($_SESSION['logged']);
unset($_SESSION['user']);
unset($_SESSION['valid_user'] );
$hour = time() — 3600 *24 * 30;
setcookie('userid',"", $hour);
setcookie('username', "", $hour);
setcookie('active', "", $hour);
header('Location:login.php');
?>
