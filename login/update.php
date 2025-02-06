<?php
include "connection.php";

if(isset($_POST['submit']))
{
// database-flied-names
$i=$_POST['id'];
$head=$_POST['heading'];
$para=$_POST['paragraph'];
$s=$_POST['status'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$flodername="images/".$filename;
if($tempname != "")
{
move_uploaded_file($tempname,$flodername);
$up="update slider_data set `id`= '$i', `heading`= '$head', `paragraph`='$para', `status`='$s' , `image`='$filename' where id =$i";
}
else{
    $up="update slider_data set  `id`= '$i', `heading`= '$head', `paragraph`='$para',`status`='$s' where id =$i";
}
mysqli_query($con,$up);
echo'<script>window.location="slider_data.php"</script>';
}


elseif(isset($_POST['submit2']))
{
    $i=$_POST['id'];
$head=$_POST['heading'];
$para=$_POST['paragraph'];
$up="update deal_zone set `id`= '$i', `heading`= '$head', `paragraph`='$para' where id =$i";
mysqli_query($con,$up);
echo'<script>window.location="deal_zone.php"</script>';
}


elseif(isset($_POST['submit3']))
{
$i=$_POST['id'];
$head=$_POST['heading'];
$ck=$_POST['editor1'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$flodername="images/".$filename;
if($tempname != "")
{
move_uploaded_file($tempname,$flodername);
$up="update blog_view set `id`= '$i', `heading`= '$head', `editor1`='$ck',`image`='$filename' where id =$i";
}
else
{
    $up="update blog_view set  `id`= '$i', `heading`= '$head', `editor1`='$ck' where id =$i";
}
mysqli_query($con,$up);
echo'<script>window.location="blog_view.php"</script>';
}


elseif(isset($_POST['submit4']))
{
$i=$_POST['id'];
$head=$_POST['heading'];
$ck=$_POST['editor1'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$flodername="images/".$filename;
if($tempname != "")
{
move_uploaded_file($tempname,$flodername);
$up="update product_shop set `id`= '$i', `heading`= '$head', `editor1`='$ck',`image`='$filename' where id =$i";
}
else
{
    $up="update product_shop set  `id`= '$i', `heading`= '$head', `editor1`='$ck' where id =$i";
}
mysqli_query($con,$up);
echo'<script>window.location="product_shop.php"</script>';
}

?>