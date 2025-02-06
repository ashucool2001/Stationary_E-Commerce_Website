<?php
session_start();
//setcookie("Auction_Item", "arpit nuwal", time() + 2 * 24 * 60 * 60);
?>
<?php
include "connection.php";


 $pid=$_GET['pid'];
 $query="select MAX(cartid)+1 from cart"; 
 $result=mysqli_query($con,$query);
 $singleRow = mysqli_fetch_row($result);
   $maxx= $singleRow['0'];


 $ins="insert into cart(`pid`,`uid`,`cartid`,`qty`)values('$pid','1','$maxx','1')";
 mysqli_query($con,$ins);
echo '<script> window.location ="../Shop.php"</script>';


?>