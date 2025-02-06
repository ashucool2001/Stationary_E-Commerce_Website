<?php
include "connection.php";
 $pageid = $_GET['pageid'];
 $i = $_GET['id'];
 
 if($pageid=="1")
{  $img=$_GET['image'];
    unlink("images/".$img);
 $del1 ="delete from product_shop where id ='$i'";
 mysqli_query($con,$del1);
echo '<script> window.location ="product_shop.php"</script>';
}


elseif ($pageid=="2")
{
    $img=$_GET['image'];
    unlink("images/".$img);
 $del ="delete from slider where id ='$i'";
 mysqli_query($con,$del);
echo '<script> window.location ="slider_data.php"</script>';
}

elseif ($pageid=="3")
{
    $img=$_GET['image'];
    unlink("images/".$img);
 $del ="delete from big_deal_area where id ='$i'";
 mysqli_query($con,$del);
echo '<script> window.location ="deal_zone.php"</script>';
}

elseif ($pageid=="4")
{
    $img=$_GET['image'];
    unlink("images/".$img);
 $del ="delete from blog_view where id ='$i'";
 mysqli_query($con,$del);
echo '<script> window.location ="blog_data.php"</script>';
}


 ?>

 