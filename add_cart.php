<?php
include "header.php";
?>

<section class="cart-section" id="cart-section">
    <div class="container">
        <h2 class="mt-5">Add Cart</h2>
        <div class="row">
            <div class="col-lg-12 bg-white rounded shadow-sm mb-5">

                <!-- Shopping cart table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>

                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Discount</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Total</div>
                                </th>

                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
    include "login/connection.php";
    $sel="SELECT a.id as cartidd,b.id,b.heading,b.strike_price,b.price,b.image,a.qty,((b.price-b.strike_price)*a.qty) as total FROM cart AS a INNER JOIN product_shop as b ON a.pid=b.id WHERE a.uid=1";
    $r = mysqli_query($con,$sel);
    $subtotal="0";    $delivery="50";
    while ($row = mysqli_fetch_array($r))
    {
        ?>
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <a href="product_details.php?id=<?php echo $row ['id'] ; ?>">
                                            <?php echo '<img src="login/images/'.$row ['image'].'" height="40px" width="40px">';?></a>
                                        <a
                                            href="product_details.php?id=<?php echo $row ['id'] ; ?>"><?php echo $row ['heading'] ; ?></a>
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0">
                                                <a href="product_details.php? id="
                                                    class="text-dark d-inline-block align-middle">
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>₹
                                        <?php echo $row ['price'] ; ?>
                                        /-</strong></td>
                                <td class="border-0 align-middle"><strong>₹
                                        <?php echo $row ['strike_price'] ; ?>/-</strong></td>
                                <td class="border-0 align-middle">
                                    <?php
$test=$row ['cartidd'] ;
?>
                                    <select name="qty" id="selectbox"
                                        onChange="doReload(this.value, <?php echo $test ;?> ); ">
                                        <?php
for ($x = 1; $x <= 5; $x++) {
  if($row ['qty']==$x)
  {
    echo "<option selected='selected' value='$x'" ;echo">$x</option>";
  }
  else
  {
  echo "<option value = '$x'"; echo ">$x</option>";}
}
?>
                                    </select>
                                </td>
                                <td class="border-0 align-middle"><strong>₹<?php echo $row['total'];?>/-</strong></td>
                                <td class="border-0 align-middle">
                                    <a href="add_cart.php?page=vkzniqcu6qojt1topgtuza8ba596fbzh1pualcais47sbq66cpr155260hi5y8sq3&&deleteid=<?php echo $row ['cartidd'];?>"
                                        class="text-dark"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>

                            <?php
                            $subtotal=$subtotal+ $row ['total'] ;
           }
           ?>
                        </tbody>
                    </table>
                </div>
                <!-- End -->
            </div>
        </div>

        <div class="row bg-white rounded shadow-sm">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have
                        entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order
                                Subtotal </strong><strong>₹<?php echo $subtotal;?>/-</strong>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                class="text-muted">Shipping and
                                handling</strong><strong>₹<?php echo $delivery;?>/-</strong></li>

                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">₹<?php echo $delivery+$subtotal;?>/-</h5>
                        </li>
                    </ul><a href="checkout.php" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to
                        checkout</a>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<?php
include "login/connection.php";

$pageid ="";$qid="";$cartid2="";
if (isset($_GET['deleteid'])) {
      $pageid = $_GET['deleteid'];
 $del1 ="delete from cart where id ='$pageid'";
 mysqli_query($con,$del1);
echo '<script> window.location ="add_cart.php"</script>';
} 
//&&isset($_GET['pid'])
if (isset($_GET['qty'])&&isset($_GET['pid'])) {
    $qid = $_GET['qty'];   
    $cartid2 = $_GET['pid'];

    $del2 ="update  cart set qty=' $qid' where id ='$cartid2'";
 mysqli_query($con,$del2);
    
// $del2 ="update from  cart set qty=' $qid' where id ='$cartid2'";
// mysqli_query($con,$del2);
echo '<script> window.location ="add_cart.php"</script>';
} 
?>
<script language="javascript" type="text/javascript">
function doReload(catid, the) {
    document.location = 'add_cart.php?qty=' + catid + '&&pid=' + the;
}
</script>
<?php
include "footer.php";
?>
<style>
a {
    color: black;
}
</style>