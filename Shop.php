<?php
include "header.php";
?>

<?php
$orderbysql="";
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
if (isset($_GET['filter'])) {
    $filtercode = $_GET['filter'];
}
else {
    $filtercode = 0;
}
if (isset($_GET['categoryid'])) {
    $categoryid = $_GET['categoryid'];
}
else {
    $categoryid = "0";
}



?>
    <section class="shop-categories" id="shop-categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <div class="box">
                        <a href="Shop.php">
                            <h5>Home</h5>
                        </a>
                        <hr>
                        <h5 class="heading-cate">Categories</h5>
                        <?php
                            $sel="select DISTINCT a.category,a.categoryid,(select count(*) from product_shop where categoryid=a.categoryid) as count from product_shop as a ";
                            $r=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_array($r))
                            {
                           ?>
                        <div class="row">
                            <div class="col-lg-9 col-sm-9">
                           
                                <div class="form-check">
                                    <label class="form-check-label">
                                <a href="Shop.php?pageno=1&&filter=<?php echo $filtercode; ?>&&categoryid=<?php echo $row ['categoryid'] ; ?>"><?php echo $row ['category'] ; ?></a>        
                              </label>
                                </div>
                            </div>

                         
                            <div class="col-lg-3 col-sm-3">
                                <span>(<small><?php echo $row ['count'] ; ?></small>)</span>
                            </div>
                        </div>
                      <?php
                            }
                              ?>
                     

                                  
                        <hr>
                        <!-- <h5 class="heading-cate">Price</h5>
                        <div class="range-slider">
                            <span class="rangeValues"></span>
                            <input value="1000" min="1000" max="50000" type="range">
                            <input value="50000" min="1000" max="50000" type="range">
                        </div>
                        <hr> -->
                    </div>
                </div>

                <hr>

                <div class="col-lg-9 col-sm-9">
                    <div class="row mt-2">
                        <div class="col-lg-3 col-sm-3 col-12">
                            <?php
                $sel="select count(*) as count from product_shop";
                $query=mysqli_query($con,$sel);
                while($r=mysqli_fetch_array($query))
                            {
                           ?>
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <span>There are <?php echo $r ['count'] ; ?> products.</span>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-3">
                            <span class="cate-sort">Sort by:</span>
                        </div>
                      

                        
                        <div class="col-lg-4 col-sm-4 col-7">
                            <div class="form-group">
                                <select class="form-control" name="" id="the_select" onchange="window.location='Shop.php?pageno=1&&filter=' + this.value+'&&categoryid='+<?php echo $categoryid; ?>;">
                                <option value ="0" >Select Filter</option>                               
                                <option value ="1" <?php if($filtercode == "1"){ echo 'selected'; } ?>>Name, A to Z</option>
                                <option value ="2" <?php if($filtercode == "2"){ echo 'selected'; } ?>>Name, Z to A</option>
                                <option value ="3" <?php if($filtercode == "3"){ echo 'selected'; } ?>>Price, Low to High</option>
                                <option value ="4" <?php if($filtercode == "4"){ echo 'selected'; } ?>>Price, High to Low</option>
                              </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">

                    <?php
$orderbysql="";
$categorycond="";

    if($filtercode=="0")
    {
        $orderbysql="";

    }
    if($filtercode=="1")
    {
        $orderbysql="order by heading asc";

    }
    if($filtercode=="2")
    {
        $orderbysql="order by heading desc";

    }
    if($filtercode=="3")
    {
        $orderbysql="order by price asc";

    }
    if($filtercode=="4")
    {
        $orderbysql="order by price desc";

    }
    if($categoryid=="0")
    {
        $categorycond="";
    }
    else
    {
        $categorycond="WHERE categoryid='$categoryid'";
    }


   



$no_of_records_per_page = 9;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM product_shop ";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM product_shop  $categorycond $orderbysql LIMIT $offset, $no_of_records_per_page ";
$res_data = mysqli_query($con,$sql);
while($row1 = mysqli_fetch_array($res_data)){
  ?>

                        <div class="col-lg-4 col-sm-4 col-12 mt-1">
                            <div class="box-4">
                            </div>
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="product_details.php?id=<?php echo $row1 ['id'] ; ?>" class="image">
                                    <?php echo '<img src="login/images/'.$row1 ['image'].'"class="pic-1">';?>
                                    <?php echo '<img src="login/images/'.$row1 ['hover_image'].'"class="pic-2">';?>
                                    </a>
                                    <span class="product-sale-label">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="product_details.php?id=<?php echo $row1['id'];?>"><?php echo $row1 ['heading'] ; ?></a></h3>
                                    <?php
                                    $main_price = $row1 ['price'] - $row1 ['strike_price'];
                                    ?>
                                    <div class="price"><span>₹<?php echo $row1 ['price'] ; ?>/-</span>₹<?php echo $main_price ; ?>/-</div>
                                   
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <ul class="product-links">
                                        <li><a href="login/add_cart.php?pid=<?php echo $row1 ['id'] ; ?>"><i class="fa fa-shopping-bag" ></i></a></li>
                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                        <li><a href="login/wishlist_add.php?pid=<?php echo $row1 ['id'] ; ?>"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product_details.php?id= <?php echo $row1 ['id'] ; ?>"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
}
?>
                    </div>

                    <div class="row mt-3">
                    <?php
                $sel="select count(*) as count from product_shop";
                $query=mysqli_query($con,$sel);
                while($r=mysqli_fetch_array($query))
                            {
                           ?>
                        <div class="col-lg-9 col-sm-9 col-4 ">
                            <small>Showing 1-12 of <?php echo $r ['count'] ; ?> items</small>
                            <?php
                            }
                            ?>
                        </div>
                        
                        <div class="col-lg-3 col-sm-3 col-8 ">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                               

        <li><a class="page-link" href="?pageno=1&&filter=<?php echo $filtercode; ?>">First</a></li>
        <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>&&filter=<?php echo $filtercode; ?>&&categoryid=<?php echo $categoryid; ?>">Prev</a>
        </li>
        <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>&&filter=<?php echo $filtercode; ?>&&categoryid=<?php echo $categoryid; ?>">Next</a>
        </li>
        <li><a class="page-link" href="?pageno=<?php echo $total_pages; ?>&&filter=<?php echo $filtercode; ?>&&categoryid=<?php echo $categoryid; ?>">Last</a></li>
    </ul> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script type="text/javascript">
$(function(){
  $("#the_select").change(function(){
    document.location.href = location.href + Shop.php'?id=' + id.value;
  });
});
</script>





    <?php
include "footer.php";
    ?>
