<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>

<body>

<?php
include "login/connection.php";
?>


    <?php
    if(isset($_POST['submit']))
 {

    



 $sel="SELECT a.pid,a.id as cartidd,b.id,b.heading,b.strike_price,b.price,b.image,a.qty,((b.price-b.strike_price)*a.qty) as total FROM cart AS a INNER JOIN product_shop as b ON a.pid=b.id WHERE a.uid='1'";
 $r = mysqli_query($con,$sel);
 $subtotal="0";    $delivery="50";
 while ($row = mysqli_fetch_array($r))
 {

  $tdiscount=$row ['strike_price']*$row ['qty'];
  $tamount=$row ['price']*$row ['qty'];
  $totalamount=$tamount-$tdiscount;
  
  $pid=$row ['pid'];
  $rate=$row ['price'];
  $qty=$row ['qty'];
  $ins="insert into order_details(`order_id`,`pid`,`rate`,`discount`,`qty`,`net_amount`)
  values(5,$pid,$rate,$tdiscount, $qty,$totalamount)";
   mysqli_query($con,$ins);
 }

echo '<script> window.location = "test.php?id='.$maxorderid.'"</script>';

                    }




                    ?>


    <form action="test.php" method="post">

        <input type="submit" value="Log In" name="submit" class="btn btn-dark">
    </form>

</body>

</html>


if(isset($_POST['submit']))
{
    $h=$_POST['heading'];
    $p=$_POST['paragraph'];
    $s=$_POST['status'];

    $query="select MAX(id)+1 from slider_data"; 
    $result=mysqli_query($con,$query);
    $singleRow = mysqli_fetch_row($result);
      $maxx= $singleRow['0'];
      $filename1 = $maxx.".jpg";


    $filename1=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $foldername="images/".$filename1;
    move_uploaded_file ($temp, $foldername);


    $ins="insert into slider_data(`heading`,`paragraph`,`status`,`image`)values('$h','$p','$s','$filename1')";
     mysqli_query($con,$ins);
echo '<script> window.location = "slider_data.php"</script>';
}

//  product_shop query
elseif(isset($_POST['submit2'])){
    $h=$_POST['heading'];
    $st=$_POST['strike_price'];
    $price=$_POST['price'];
    $cat=$_POST['category'];
    $ck=$_POST['editor1'];

    $query="select MAX(id)+1 from product_shop"; 
    $result=mysqli_query($con,$query);
    $singleRow = mysqli_fetch_row($result);
      $maxx= $singleRow['0'];
      $filename1 = $maxx."_1.jpg";
      $filename2 = $maxx."_2.jpg";
      $filename3 = $maxx."_3.jpg";
      $filename4 = $maxx."_4.jpg";
      $filename5 = $maxx."_5.jpg";

      $temp=$_FILES['image']['tmp_name'];
      $foldername="images/".$filename1;
      move_uploaded_file ($temp, $foldername);

    $temp1=$_FILES['hover_image']['tmp_name'];
    if($temp1==null)
    {
      $filename2 ="";
    }

    else
    {
    $foldername1="images/".$filename2;
    move_uploaded_file ($temp1, $foldername1);
    }

    $temp2=$_FILES['product_image2']['tmp_name'];
   if($temp2==null)
    {
      $filename3 ="";
    }

    else
    {
    $foldername2="images/".$filename3;
    move_uploaded_file ($temp2, $foldername2);
    }

    $temp3=$_FILES['product_image3']['tmp_name'];
    if($temp3==null){
      $filename4 ="";
    }
    else
    {
    $foldername3="images/".$filename4;
    move_uploaded_file ($temp3, $foldername3);
    }

    
    $temp4=$_FILES['product_image4']['tmp_name'];
    if($temp4==null){
      $filename5 ="";
    }

    else
    {
    $foldername4="images/".$filename5;
    move_uploaded_file ($temp4, $foldername4);
    }
   

    $ins="insert into product_shop (`heading`, `category`, `editor1` , `strike_price` , `price` , `image`, `hover_image`, `product_image2`, 
    `product_image3`, `product_image4`)values ('$h', '$cat', '$ck', '$st', '$price', '$filename1', '$filename2', '$filename3', '$filename4', '$filename5')";
     mysqli_query($con,$ins);
echo "<script>window.location='product_shop.php'</script>";
} 


// big-deal-area_query
elseif(isset($_POST['submit3']))
{
    $h=$_POST['heading'];
    $p=$_POST['paragraph'];
    $ins="insert into deal_zone(`heading`,`paragraph`)values('$h','$p')";
     mysqli_query($con,$ins);
echo '<script> window.location = "deal_zone.php"</script>';
}

// blog-query
elseif(isset($_POST['submit4']))
{
    $h=$_POST['heading'];
    $ck=$_POST['editor1'];


    $filename=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $foldername="images/".$filename;

    
    move_uploaded_file ($temp, $foldername);
    $ins="insert into blog_view(`heading`, `editor1`, `image`)values('$h', '$ck', '$filename')";
     mysqli_query($con,$ins);
echo '<script> window.location = "blog_data.php"</script>';
}


elseif(isset($_POST['submit5']))
{
  $n=$_POST['name'];
  $e=$_POST['email'];
  $para=$_POST['paragraph'];
  $pid =$_GET['product_id'];
  $uid=$_GET ['uid'];
  $rating=$_POST['rating'];
    $ins="insert into product_rating(`name`, `email`, `paragraph`,`product_id`,`uid`,`rating`)values('$n', '$e', '$para','$pid','$uid','$rating')";
     mysqli_query($con,$ins);
echo '<script> window.location = "../product_details.php"</script>';
}


else
