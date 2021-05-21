<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href = "register.css" type = "text/css" rel = "stylesheet" />  
<center><form action="add.php" class="form-control">
<h2>Register Here</h2>
  <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="uname" value=""><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" value=""><br>
  <label for="cpassword">Confirm Password:</label><br>
  <input type="password" id="cpassword" name="cpassword" value=""><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value=""><br>
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city" value=""><br><br><br>
  <input type="submit" value="Submit"><br><br><br>
  <div class="alert" id="check">
</form> </center>  
</body>
<script>
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword)
            $("#check").html("Passwords does not match!");
        else
            $("#check").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#cpassword").keyup(checkPasswordMatch);
    });
    </script>

</html>