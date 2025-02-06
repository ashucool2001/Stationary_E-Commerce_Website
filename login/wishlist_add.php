<?php
include "connection.php";


 $pid=$_GET['pid'];
 $query="select MAX(wishid)+1 from wishlist"; 
 $result=mysqli_query($con,$query);
 $singleRow = mysqli_fetch_row($result);
   $maxx= $singleRow['0'];


 $ins="insert into wishlist(`pid`,`uid`,`wishid`)values('$pid','1','$maxx')";
 mysqli_query($con,$ins);
echo '<script> window.location ="../Shop.php"</script>';


?>