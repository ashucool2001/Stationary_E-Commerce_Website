<?php
include "header.php";

?>
    <!-- contact-section-start -->
    <?php
include "login/connection.php";
if(isset ($_POST['submit']))
{
    $cate=$_POST['category'];
    $e=$_POST['email'];
    $m=$_POST['message'];

    $filename=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $foldername="images/".$filename;
    move_uploaded_file ($temp, $foldername);

    $ins="insert into contact_user(`category`,`email`,`message`,`image`)values('$cate','$e','$m','$filename')";
    mysqli_query($con,$ins);
    echo '<script> window.location = "Contact.php"</script>';
}
?>

<?php
if(isset($_POST["contact_save"]))
{
$to ="mukeshteli.spmplindia@gmail.com";
$subject="Enquiry Mail";
$information= '  
............................
Message Category : '.$_POST['category'].'
Email : '.$_POST["email"].'
Message : '.$_POST["information"].'
............................
';

$headers='From:'.$_POST["email"]."\r\n".
'Reply-To:'.$_POST["email"]."\r\n".
'X-Mailer: PHP/'.phpversion();
$retval=mail($to, $subject, $information,$headers);
if ($retval==true) {

header("Location:contact.html");

}                      
else{
echo "Record not inserted!";
}  

 }

?>


    <section id="contact-section" class="contact-section">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-3 col-sm-3 col-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <span class="breadcrumb-item active">Contact us</span>
                    </nav>
                </div>
                <div class="col-lg-9 col-sm-9">
                    <div class="box">
                        <h2>Our Location</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57694.2294962987!2d74.59671652835185!3d25.34149398323759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3968c2368c070a55%3A0xc92f70a42dcb5294!2sBhilwara%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1645698324359!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0; margin-top: 25px;" allowfullscreen="" loading="lazy"></iframe>
                        <h2>Drop Us A Line</h2>
                        <small>Have a question or comment? Use the form below to send us a message or contact us by mail</small>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <form action="Contact.php" method ="post" enctype="multipart/form-data">
                                <select class="custom-select" name="category" id="">
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Webmaster">Webmaster</option>
                                    </select>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="email" name="email" id="" placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="file" name="image" id="">
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mt-2">
                                <p>optional</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 col-sm-12">
                                <textarea name="message" id="" rows="4" placeholder="How can we help?"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info" name="submit" value="Post Comment">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- contact-section-end -->
    
    <?php
include "footer.php";
?>