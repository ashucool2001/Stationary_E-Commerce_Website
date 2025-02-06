<?php
include "connection.php";

// slider-develop_query
if(isset($_POST['submit6']))
{
  $querymax="select MAX(id)+1 from checkout_details"; 
  $resultmax=mysqli_query($con,$querymax);
  $singleRowmax = mysqli_fetch_row($resultmax);
   
    if($singleRowmax['0']=="")
    {
      $maxorderid= "1";

    }
    else
    {
      $maxorderid= $singleRowmax['0'];
    }
  



  $name=$_POST['name'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  $pincode=$_POST['pincode'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $para=$_POST['para'];
  $del=$_POST['delivery'];
  $amo=$_POST['amo'];
  $n_amo=$_POST['n_amo'];
  $uid=$_POST['uid'];




    $ins="insert into checkout_details(`id`,`uid`,`name`,`state`,`city`,`address`,`pincode`,`number`,`email`,`para`,`delivery`,`amount`,`net_amount`)
    values('$maxorderid','$uid','$name','$state','$city','$address','$pincode','$number','$email','$para','$del','$amo','$n_amo')";
     mysqli_query($con,$ins);

     $selsub="SELECT a.pid,a.id as cartidd,b.id,b.heading,b.strike_price,b.price,b.image,a.qty,((b.price-b.strike_price)*a.qty) as total FROM cart AS a INNER JOIN product_shop as b ON a.pid=b.id WHERE a.uid='$uid'";
     $rsub = mysqli_query($con,$selsub);
     $subtotal="0";    $delivery="50";
     while ($rowsub = mysqli_fetch_array($rsub))
     {
    
      $tdiscount=$rowsub ['strike_price']*$rowsub ['qty'];
      $tamount=$rowsub ['price']*$rowsub ['qty'];
      $totalamount=$tamount-$tdiscount;
      
      $pid=$rowsub ['pid'];
      $rate=$rowsub ['price'];
      $qty=$rowsub ['qty'];
      $inssub="insert into order_details(`order_id`,`pid`,`rate`,`discount`,`qty`,`net_amount`)
      values($maxorderid,$pid,$rate,$tdiscount, $qty,$totalamount)";
       mysqli_query($con,$inssub);
     }

echo '<script> window.location = "../order_conformed.php"</script>';
}
?>