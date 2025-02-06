<?php
include "header.php";
?>

<section class="cart-section" id="cart-section">
    <div class="container">
        <h2 class="mt-5">Wishlist</h2>
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
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
    include "login/connection.php";
    $sel="SELECT wishid,b.id,b.heading,b.price,b.image FROM wishlist AS a INNER JOIN product_shop as b ON a.pid=b.id WHERE a.uid=1;
    ";
    $r = mysqli_query($con,$sel);
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
                                                <a href="product_details.php?id=" class="text-dark d-inline-block align-middle">
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>₹ <?php echo $row ['price'] ; ?>/-</strong></td>
                                <td class="border-0 align-middle">
                                    <a href="wishlist.php?page=vkzniqcu6qojt1topgtuza8ba596fbzh1pualcais47sbq66cpr155260hi5y8sq3&&deleteid=<?php echo $row ['wishid'] ; ?>"
                                        class="text-dark"><i class="fa fa-trash"></i></a></td>

                            </tr>

                            <?php
           }
           ?>
                        </tbody>
                    </table>
                </div>
                <!-- End -->
            </div>
        </div>
    </div>
</section>




<?php
include "login/connection.php";
$pageid ="";
if (isset($_GET['deleteid'])) {
    $pageid = $_GET['deleteid'];
} 




if($pageid !="")
{
 $del1 ="delete from wishlist where wishid ='$pageid'";
 mysqli_query($con,$del1);
echo '<script> window.location ="wishlist.php"</script>';
}
?>

<?php
include "footer.php";
?>
<style>
    a{
        color:black;
    }
</style>