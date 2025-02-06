<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style 2.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Sign in</a></li>
                    <li class="signup-inactive"><a class="btn">Sign up </a></li>
                </ul>
            </div>
            <div ng-app ng-init="checked = false">


            <?php
include "connection.php";
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$sel="select * from login where username='$user' AND password='$pass'";
$r=mysqli_query($con,$sel);
if(mysqli_fetch_array($r))
{
    echo '<script>window.location="admin.php"</script>';
    $_SESSION['username']=$user;
}
else
{
  echo "invalid username and password";
}
}
?>

                <form class="form-signin" action="login.php" method="post" name="form">
                    <label for="username">Username</label> 
                    <input class="form-styling" type="text" name="username" placeholder="" /> 

                    <label for="password">Password</label> 
                    <input class="form-styling" type="password" name="password" placeholder="" /> 
                    
                    <input name="submit" type="submit"  value="Submit" class="btn btn-info">
                </form>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js'></script>
	<script src="./script.js"></script>

</body>

</html>