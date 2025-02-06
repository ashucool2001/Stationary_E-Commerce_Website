<?php
include "header.php";
?>

<section class="login-info" id="login-info">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="box">
                    <h2>LOGIN</h2>
<?php
include "login/connection.php";
if(isset($_POST['submit']))
{
$number=$_POST['number'];
$pass=$_POST['password'];
$sel="select * from web_user_login where number='$number' AND password='$pass'";
$r=mysqli_query($con,$sel);
if(mysqli_fetch_array($r))
{
    echo '<script>window.location="index.php"</script>';
    $_SESSION['name']=$user;
}
else
{
  echo "invalid username and password";
}
}
?>

                    <form action="login.php" method="post">
                        <input type="text" placeholder=" Enter Mobile Number" name="number" required>
                        <input type="password" name="password" id="" required placeholder=" Password">
                        <input type="submit" value="Log In" name="submit" class="btn btn-dark">
                    </form>
                    <a href="">Lost your password?</a>
                    <a href="sign_up.php" class="Register-text">Register <i class="fa fa-angle-right"
                            aria-hidden="true"></i></a>

                </div>
            </div>
            <div class="col-lg-3"></div>
            <?php
        //  echo $_COOKIE["ttttttttt"]. "<br />";
         ?>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>