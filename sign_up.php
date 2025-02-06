<?php
include "header.php";
?>
<section class="sign-info" id="sign-info">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="box">
                    <h3>SIGN-UP</h3>
                    <?php
                    include "login/connection.php";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password != $cpassword)
    {
       echo "Passwords Doesn't Match";
   }

   else
   {
    $ins="insert into web_user_login(`name`, `email`, `number`, `password`,`cpassword`)values('$name', '$email','$number', '$password','$cpassword')";
    $result= mysqli_query($con,$ins);
    if($result)
    {
    echo '<script>window.location="login.php"</script>';
       $msg = "User Created Successfully.";  

    }
    }
}


                        ?>
                    <form action="sign_up.php" method="post">
                        <input type="text" placeholder=" Enter Your Name..." required name="name">
                        <input type="number" placeholder=" Enter Your Mobile Number..." required name="number">
                        <input type="email" placeholder=" Enter Your E-mail..." required name="email">                       
                        <input type="password" placeholder=" Enter Your Password" required name="password">
                        <input type="password" placeholder=" Conform Password" required name="cpassword">
                        <input type="submit" class="btn btn-dark" value="Sign Up" name="submit">
                    </form>
                    <a name="" id="" class="btn btn-primary" href="login.php" role="button">Login</a>

                </div>
            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>
</section>




<?php
include "footer.php";
 ?>
 <!-- Modal
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> E-mail Verification Otp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder=" Enter Otp....">
                <p>Please Check Your Message Box </p>
                <input type="submit" class="btn btn-outline-success" name="otp" value="Verify OTP">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-outline-info" value="Resend" name="resend">
            </div>
        </div>
    </div>
</div> -->