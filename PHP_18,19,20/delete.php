<?php
$conn = mysqli_connect("localhost", "root", "", "user");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM register WHERE uname='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }  	
    ?>