<?php
include "header.php";

?>
<!-------------------------- slider-start------------------------ -->

<section class="Slider-1" id="Slider-1">
    <div id="carouselId" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
$sel = "select * from slider_data order by id desc limit 0,2";
$r = mysqli_query($con,$sel);
while($row=mysqli_fetch_array($r))
{
?>
            <div class="carousel-item <?php if ($row['status']==1){?>active<?php } ?>">
                <?php echo '<img src="login/images/'.$row ['image'].'" height="400px" width="100%">';?>
                <div class="carousel-caption ">
                    <h3><?php echo $row ['heading'] ; ?></h3>
                    <p><?php echo $row ['paragraph'] ; ?></p>
                    <a name="" id="" class="btn btn-primary btn-primary-1" href="Shop.php" role="button">shop
                        now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php
}
?>
        </div>

        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <div class="s-box">
                <span><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <div class="s-box">
                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            </div>
        </a>
    </div>
</section>
<!-------------------------- slider-end------------------------ -->

<!--------------------- service-section-start----------- -->
<section class="service-section" id="service-section">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-3 col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3">
                            <i class="fas fa-truck" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9">
                            <h6>Fast Delivery</h6>
                            <p>For All Orders Over $120</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3">
                            <i class="fas fa-credit-card " aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9">
                            <h6>
                                Safe Payments</h6>
                            <p>100% Secure Payment</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3">
                            <i class="fas fa-gift" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9">
                            <h6>Discount Coupons</h6>
                            <p>Enjoy Huge Promotions
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3">
                            <i class="fas fa-comment" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9">
                            <h6>Quality Support</h6>
                            <p>Dedicated 24/7 Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------- service-section-end----------- -->


<!--------------------- banner-section-start----------- -->
<section class="banner-section" id="banner-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 col-sm-4 col-12">
                <div class="img-1 img-text">
                    <p>Sale Up To 15% Off</p>
                    <h4>Home Office Desks</h4>
                    <a name="" id="" class="btn " href="Shop.php" role="button">Shop Now <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-4 col-12">
                <div class="img-2 img-text">
                    <p>All Page Types</p>
                    <h4>Notebooks</h4>
                    <a name="" id="" class="btn " href="Shop.php" role="button">Shop Now <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></a>

                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-12">
                <div class="img-3 img-text">
                    <p>Office / Home</p>
                    <h4>Metal Pens</h4>
                    <a name="" id="" class="btn " href="Shop.php" role="button">Shop Now <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></a>

                </div>

                <div class="img-4 img-text">
                    <p>Office Adhesive</p>
                    <h4>Tape</h4>
                    <a name="" id="" class="btn " href="Shop.php" role="button">Shop Now <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------- banner-section-end----------- -->

<!--------------------- Tabs-section-start----------- -->
<section id="project-tab" class="project-tab">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 col-sm-12">
                <nav>

                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Featured</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">On Sale</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Top Rated</a>
                    </div>

                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-fluid mt-3">
                            <?php
                            $sel="select * from product_shop where category='Featured'";
                            $r=mysqli_query($con,$sel);
                           ?>
                            <div class="package-slider">
                                <div id="demo" class="demo">
                                    <div class="row">
                                        <div id="owl-demo1" class="owl-carousel">
                                            <?php
                                             while($row=mysqli_fetch_array($r))
                                             {
                                                 
                                             ?>
                                            <div class="product-grid">
                                                <div class="product-content">
                                                    <h3 class="title"><a
                                                            href="product_details.php?id=<?php echo $row ['id'] ; ?>">
                                                            <?php echo $row ['heading'] ; ?>
                                                        </a></h3>
                                                    <div class="price">
                                                        <span>₹<?php echo $row ['strike_price'] ; ?>/-</span>₹<?php echo $row ['price'] ; ?>/-
                                                    </div>
                                                    <ul class="rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <ul class="product-links">
                                                        <li><a href="login/add_cart.php?pid=<?php echo $row['id'] ; ?>"><i
                                                                    class="fa fa-shopping-bag"></i></a></li>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a>
                                                        </li>
                                                        <li><a href="login/wishlist_add.php?pid=<?php echo $row['id'] ; ?>"><i class="fa fa-heart"></i></a>
                                                        </li>
                                                        <li><a
                                                                href="product_details.php?id=<?php echo $row ['id'] ; ?>"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product_details.php?id=<?php echo $row ['id'] ; ?>"
                                                        class="image">
                                                        <?php echo '<img src="login/images/'.$row ['image']. '"class="pic-1">';?>
                                                        <?php echo '<img src="login/images/'.$row ['hover_image']. '"class="pic-2">';?>
                                                    </a>
                                                    <!-- <span class="product-sale-label">Sale</span> -->
                                                </div>
                                            </div>
                                            <?php
                                             }
                                             ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container-fluid mt-3">
                            <?php
                            $sel="select * from product_shop where category='On Sale'";
                            $r=mysqli_query($con,$sel);
                           ?>
                            <div class="package-slider">
                                <div id="demo" class="demo">
                                    <div class="row">
                                        <div id="owl-demo2" class="owl-carousel">
                                            <?php
                                             while($row=mysqli_fetch_array($r))
                                             {
                                                 
                                             ?>
                                            <div class="product-grid">
                                                <div class="product-content">
                                                    <h3 class="title"><a
                                                            href="product_details.php?id=<?php echo $row ['id'] ; ?>">
                                                            <?php echo $row ['heading'] ; ?>
                                                        </a></h3>
                                                    <div class="price">
                                                        <span>₹<?php echo $row ['strike_price'] ; ?>/-</span>₹<?php echo $row ['price'] ; ?>/-
                                                    </div>
                                                    <ul class="rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <ul class="product-links">
                                                        <li><a
                                                                href="login/add_cart.php?pid=<?php echo $row ['id'] ; ?>"><i
                                                                    class="fa fa-shopping-bag"></i></a></li>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a>
                                                        </li>
                                                        <li><a href="login/wishlist_add.php?pid=<?php echo $row['id'] ; ?>"><i class="fa fa-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="product_details.php?id=<?php echo $row ['id'] ; ?>"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product_details.php? id= <?php echo $row ['id'] ; ?>"
                                                        class="image">
                                                        <?php echo '<img src="login/images/'.$row ['image']. '"class="pic-1">';?>
                                                        <?php echo '<img src="login/images/'.$row ['hover_image']. '"class="pic-2">';?>
                                                    </a>
                                                    <!-- <span class="product-sale-label">Sale</span> -->
                                                </div>
                                            </div>
                                            <?php
                                             }
                                             ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="container-fluid mt-3">
                            <?php
                            $sel="select * from product_shop where category='Top Rated' OR category='Featured'";
                            $r=mysqli_query($con,$sel);
                           ?>
                            <div class="package-slider">
                                <div id="demo" class="demo">
                                    <div class="row">
                                        <div id="owl-demo3" class="owl-carousel">
                                            <?php
                                             while($row=mysqli_fetch_array($r))
                                             {
                                                 
                                             ?>
                                            <div class="product-grid">
                                                <div class="product-content">
                                                    <h3 class="title"><a
                                                            href="product_details.php?id=<?php echo $row ['id'] ; ?>">
                                                            <?php echo $row ['heading'] ; ?>
                                                        </a></h3>
                                                    <div class="price">
                                                        <span>₹<?php echo $row ['strike_price'] ; ?>/-</span>₹<?php echo $row ['price'] ; ?>/-
                                                    </div>
                                                    <ul class="rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                    </ul>
                                                    <ul class="product-links">
                                                        <li><a href="login/add_cart.php?pid=<?php echo $row['id'] ; ?>"><i
                                                                    class="fa fa-shopping-bag"></i></a></li>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-random"></i></a>
                                                        </li>
                                                        <li><a href="login/wishlist_add.php?pid=<?php echo $row['id'] ; ?>"><i class="fa fa-heart"></i></a>
                                                        </li>
                                                        <li><a
                                                                href="product_details.php?id= <?php echo $row ['id'] ; ?>"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-image">
                                                    <a href="product_details.php?id=<?php echo $row ['id'] ; ?>"
                                                        class="image">
                                                        <?php echo '<img src="login/images/'.$row ['image']. '"class="pic-1">';?>
                                                        <?php echo '<img src="login/images/'.$row ['hover_image']. '"class="pic-2">';?>
                                                    </a>
                                                    <!-- <span class="product-sale-label">Sale</span> -->
                                                </div>
                                            </div>
                                            <?php
                                             }
                                             ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------- tabs-section-end----------- -->


<!--------------------- banner-section-2-start----------- -->
<section class="banner-section-2" id="banner-section-2">
    <div class="container">

        <?php
$sel = "select * from deal_zone order by id desc";
$r = mysqli_query($con,$sel);
($row=mysqli_fetch_array($r));
{
?>
        <div class="row">
            <div class="col-lg-12">
                <p>LIMITED QUANTITIES</p>
                <h2><?php echo $row ['heading'] ; ?></h2>
                <p class="banner-text"><?php echo $row ['paragraph'] ; ?></p>
                <div id="timer" class="timer"></div>
                <button type="button" class="btn btn-primary">View All Deals <i class="fa fa-arrow-right ml-2"
                        aria-hidden="true"></i></button>
                <?php
}
?>
            </div>
        </div>
    </div>
</section>
<!--------------------- banner-section-2-end----------- -->



<!--------------------- banner-section-3-start----------- -->
<section class="banner-section-3" id="banner-section-3">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6 col-sm-6 col-12">
                <img src="images/banner-3.jpg" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-sm-6 col-12 mt-5 text-center">
                <div class="media-text">
                    <h6>THE STATIONERO</h6>
                    <h2>The Stationery Company</h2>
                    <p>Our office supplies will help you organize your <br> workspace from all kinds of desk
                        essentials to top <br> quality staplers, calculators and organizers.</p>
                    <button type=" button " class="btn btn-primary ">Find out more <i
                            class="fa fa-arrow-right "></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------- banner-section-3-end----------- -->

<!--------------------- banner-section-4-start----------- -->
<section class="banner-section-4" id="banner-section-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h6>100% Stationery Product</h6>
                <p>Open Up To A New Experience.</p>
                <a name="" id="" class="btn btn-primary" href="#" role="button">All collection <i
                        class="fa fa-arrow-right"></i> </a>
            </div>
        </div>
    </div>
</section>
<!--------------------- banner-section-4-end----------- -->


<!-- blog-cards-section-start -->
<section class="home-blog-section" id="home-blog-section">
    <div class="container">
        <h3>From Our Blog</h3>
        <div class="row mt-4">
            <?php
$sel = "select * from blog_view order by id desc limit 0,3";
$r = mysqli_query($con,$sel);
while($row=mysqli_fetch_array($r))
{
?>


            <div class="col-lg-4 col-4 col-12">
                <div class="box">
                    <?php echo '<img src="login/images/'.$row ['image'].'" height="400px" width="100%">';?>
                    <a href="blog_details.php?id=<?php echo $row ['id'] ; ?>">
                        <h5><?php echo $row ['heading'] ; ?></h5>
                    </a>
                    <p><?php 
                            $str1=$row['editor1'];
                            if (strlen($str1) > 150)
                            $str1 = substr($str1, 0, 100) . '...';
                            echo $str1;
                             ?></p>

                    <a name="" id="" class="btn btn-primary" href="blog_details.php?id=<?php echo $row ['id'];?>"
                        role="button">Read More <i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>
<!-- blog-cards-section-end -->

<?php
include "footer.php";
?>
<script>
// product First Slider start
$(document).ready(function() {
    var owl = $("#owl-demo1");
    owl.owlCarousel({
        autoPlay: 3000,
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        pagination: false
    });
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })
});
// product First Slider end
</script>

<script>
// product First Slider start
$(document).ready(function() {
    var owl = $("#owl-demo2");
    owl.owlCarousel({
        autoPlay: 3000,
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        pagination: false
    });
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })
});
// product First Slider end
</script>

<script>
// product First Slider start
$(document).ready(function() {
    var owl = $("#owl-demo3");
    owl.owlCarousel({
        autoPlay: 3000,
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        pagination: false
    });
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })
});
// product First Slider end
</script>

<!-- auto complete data -->