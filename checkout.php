<?php
include "header.php";
?>


<!-- billing-details-start -->
<?php

 if (isset($_SESSION["userid"]))
 {
    $userid = $_SESSION['userid'];
 }
 else{
    echo '<script>window.location="login.php"</script>';
 }

if (isset($_GET['stateid'])) {
    $state_data = $_GET['stateid'];
}
else {
    $state_data = "0";
}
if (isset($_GET['districtid'])) {
    $district_data = $_GET['districtid'];
}
else {
    $district_data = "0";
}
?>

<section class="billing-details" id="billing-details">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-sm-7">
                <div class="box">
                    <h6>BILLING DETAILS</h6>
                    <form action="login/insert.php" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">
                                <label for="">Name *</label>
                                <input type="text" class="form-control" name="name" id=""
                                    aria-describedby="helpId" placeholder="" required>
</div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">
                                <label for="">State *</label>
                                <?php                    
                            $sel="select * from state";
                            $r=mysqli_query($con,$sel);
                           ?>


                                <select name="state" id="" style="width: 100%;"
                                onChange="doReload(this.value, <?php echo  $district_data ;?> ); ">
                                    <option value="">Select State</option>
                                    <?php
                                             while($row=mysqli_fetch_array($r))
                                             {
                                             ?>
                                    <option value="<?php echo $row ['state_id'];?>"  <?php if($state_data ==$row ['state_id'] ){ echo 'selected'; } ?>><?php echo $row ['state_title'];?>
                                    </option>
                                    <?php
                                             }
                                             ?>
                                </select>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">
                                <?php
                            $sel="select * from district where state_id='$state_data'";
                            $r=mysqli_query($con,$sel);
                           ?>
                                <label for="">District *</label>
                                <select name="city" id="" style="width: 100%;"
                                onChange="doReload1(<?php echo  $state_data ;?>, this.value ); ">
                                    <option value="">Select District</option>
                                    <?php
                                             while($row=mysqli_fetch_array($r))
                                             {
                                             ?>
                                    <option value="<?php echo $row ['districtid'] ; ?>" <?php if($district_data ==$row ['districtid'] ){ echo 'selected'; } ?>>
                                        <?php echo $row ['district_title'] ; ?></option>
                                    <?php
                                             }
                                             ?>

                                </select>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">

                                <label for="">Street address *</label>
                                <input type="text" class="form-control mt-2" name="address" id=""
                                    aria-describedby="helpId" placeholder="House number and street name" required>

                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">

                                <label for="">Pincode *</label>
                                <input type="text" class="form-control mt-2" name="pincode" id=""
                                    aria-describedby="helpId" placeholder="" required>

                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">

                                <label for="">Phone *</label>
                                <input type="number" class="form-control mt-2" name="number" id=""
                                    aria-describedby="helpId" placeholder="" required>

                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">

                                <label for="">Email address *</label>
                                <input type="email" class="form-control mt-2" name="email" id=""
                                    aria-describedby="helpId" placeholder="" required>

                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 mt-2">
                                <label for="">Order notes (optional)</label>
                                <textarea class="form-control" name="para" id="" rows="2"
                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div>
                        </div>

                </div>
            </div>

            <div class="col-lg-5 col-sm-5">
                <div class="box1">
                    <hr>
                    <h6>YOUR ORDER</h6>
                    <div class="checkout-info">
                        <p class="bill-1"> PRODUCT</p>
                        <p class="bill-2 mr-3">TOTAL</p>
                    </div>

                    <div class="row mt-3">
                        <?php
    include "login/connection.php";
    $sel="SELECT a.id as cartidd,b.id,b.heading,b.strike_price,b.price,b.image,a.qty,((b.price-b.strike_price)*a.qty) as total FROM cart AS a INNER JOIN product_shop as b ON a.pid=b.id WHERE a.uid='1'";
    $r = mysqli_query($con,$sel);
    $subtotal="0";    $delivery="50";
    while ($row = mysqli_fetch_array($r))
    {
        ?>
                        <div class="col-lg-8 col-sm-8 col-6">
                            <div class="checkout-info-1">
                                <h6><a href="product_details.php?id=<?php echo $row ['id'] ; ?>"><?php echo $row ['heading'] ; ?></a>
                                </h6>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-6">
                            <div class="checkout-info-2">
                                <h6>₹<?php echo $row['total'];?>/-</h6>
                            </div>
                        </div>
                        <?php
 $subtotal=$subtotal+ $row ['total'];
?>
                        <?php
    }
    ?>
    <input type="hidden" class="form-control mt-2" name="amo" id=""
aria-describedby="helpId" placeholder="" value="<?php echo  $subtotal;?>">
                    </div>
                    <hr>

                    <h6>SHIPPING</h6>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-6">
                            <div class="input-group">

                                <span class="input-group-addon">
                                    <span>Delivery Charge</span>
                                </span>

                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-6">
                            <h6 style="float: right;">₹<?php echo $delivery;?>/-</h6>
                            <input type="hidden" class="form-control mt-2" name="delivery" id=""
                                    aria-describedby="helpId" placeholder="" value="<?php echo $delivery;?>">
                          
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-8 col-sm-8 col-6">
                            <h5 style="float: left;">TOTAL</h5>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-6">
                            <h5 style="float: right;">₹<?php echo $delivery+$subtotal;?>/-</h5>                            
                            <input type="hidden" class="form-control mt-2" name="n_amo" id=""
                                    aria-describedby="helpId" placeholder="" value="<?php echo $delivery+$subtotal;?>">
                        </div>
                    </div>
                    <hr>
                    <h6>PAYMENT METHOD</h6>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" name="name" id="name-1" aria-label="" checked>
                            <span>Cash On Delivery </span>
                        </span>


                        <span class="input-group-addon">
                            <input type="radio" name="name" id="name-1" aria-label="" checked>
                            <span>Direct Bank Transfer</span>
                        </span>
                    </div>
                    <?php
if (isset($_SESSION["userid"]))
{
    ?>
                    <input type="hidden" class="form-control mt-2" name="uid" id=""
                     aria-describedby="helpId" placeholder="" value="<?php echo $_SESSION["userid"]?>">

                     <?php
}
?>
                    <p class="mt-2">Your personal data will be used to process your order, support your experience
                        throughout this website, and for other purposes described in our <a href="FAQ.php"><u> privacy
                                policy </u></a> .</p>
                    <div class="col-lg-12 col-sm-12 col-12 ml-4 mt-2 ">

                        <label class="form-check-label ">
                            <input type="checkbox" class="form-check-input " name="" id="" value="checkedValue">
                            I have read and agree to the website <a href="FAQ.php"> <u>terms and conditions</u></a> *
                        </label>
                    </div>
                    <input type="submit" value="Place Order" name="submit6" class="btn btn-dark buttoncheck">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- billing-details-end -->

<script language="javascript" type="text/javascript">
function doReload(stateid, the) {
    document.location = 'checkout.php?stateid=' + stateid + '&&districtid=' + the;
}
</script>

<script language="javascript" type="text/javascript">
function doReload1(stateid, the) {
    document.location = 'checkout.php?stateid=' + stateid + '&&districtid=' + the;
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