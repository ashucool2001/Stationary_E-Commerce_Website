<?php 
include "header.php";
?>
   
    <!-- Mobile Device Sidebar Code End -->

<?php 
$i=$_GET['id'];
$sel="select * from product_shop where id =$i";
$r=mysqli_query($con,$sel);
$row=mysqli_fetch_array($r);
?>
    <!-- product-details-start -->
    <section class="product-details" id="product-details">
        <div class="container">
            <div class="heading-section">
                <h2>Product Details</h2>
            </div>

            
            <div class="row">
                <div class="preview col-lg-6 col-sm-6">

                    <div class="preview-pic tab-content">

                        <div class="tab-pane active" id="pic-1"><?php echo '<img src="login/images/'.$row ['image'].'">';?></div>
           

                        <div class="tab-pane" id="pic-2"><?php echo '<img src="login/images/'.$row ['hover_image'].'">';?></div>
                    
                    
                        <div class="tab-pane" id="pic-3">
                        
                        <?php 
                        if($row['product_image2']!=' ')
                        {
                        echo '<img src="login/images/'.$row ['product_image2'].'">';
                        }
                       ?>
                       </div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active">
                            <a data-target="#pic-1" data-toggle="tab"><?php echo '<img src="login/images/'.$row ['image'].'">';?></a>
                        </li>
                        <li>
                            <a data-target="#pic-2" data-toggle="tab"><?php 
                        if($row['hover_image']!=' ')
                        {
                        echo '<img src="login/images/'.$row ['hover_image'].'">';
                        }
                       ?></a>
                        </li>
                        <li>
                            <a data-target="#pic-3" data-toggle="tab">    <?php 
                        if($row['product_image2']!='')
                        {
                        echo '<img src="login/images/'.$row ['product_image2'].'">';
                        }
                       ?></a>
                        </li>
                        <li>
                            <a data-target="#pic-4" data-toggle="tab">    <?php 
                        if($row['product_image3']!='')
                        {
                        echo '<img src="login/images/'.$row ['product_image3'].'">';
                        }
                       ?></a>
                        </li>
                        <li>
                            <a data-target="#pic-5" data-toggle="tab">    <?php 
                        if($row['product_image4']!='')
                        {
                        echo '<img src="login/images/'.$row ['product_image4'].'">';
                        }
                       ?></a>
                        </li>
                     
                    </ul>

                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="product-dtl">
                        <div class="product-info">
                            <div class="product-name"><?php echo $row['heading'];?></div>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" checked />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" checked />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" checked />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <div class="product-price-discount">₹<span><?php echo $row ['strike_price'] ; ?>/-</span><span class="line-through">₹<?php echo $row ['price'] ; ?>/-</span></div>
                        </div>
                        <p><?php echo $row['editor1'];?></p>
                        <div class="product-count">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Quantity</label>
                                      <select class="form-control" name="" id="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-lg-6">
                                <a class="round-black-btn" href="login/add_cart.php?pid=<?php echo $row ['id'] ; ?>">Add to Cart</a>
                                </div>
                            </div>

                        </div>
                        <div class="share-product">
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fas fa-share-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login/wishlist_add.php?pid=<?php echo $row ['id'] ; ?>">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false"> 
                            Product Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        This Fellowes Bankers storage box features a triple layer of board on the end panels and a double layer on the sides and base, for durable, long lasting use. The boxes are supplied flat and feature time saving FastFold automatic assembly. The ergonomic
                        handles are engineered at a 30 degee angle to reduce wrist strain when carrying. Each product is made from 100% recycled board. Purchase any Bankers Box and have a chance at winning enough tree planting to offset it for a whole
                        year. Reinforced, ergonomic hand holes resist tearing and increase comfort when carrying FastFold automatic assembly for quick & easy construction Made from 100% recycled board Dimensions: W390xD560xHx310mm Pack of 10 Colour: Blue
                        and White This promotion is available from 1st July until 30th September 2021 To be in with a chance of winning enough tree planting to offset it for a whole year
                    </div>


                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <h6>Reference demo_1</h6>
                        <h6>In stock 299 Items</h6>

                        <h5>Data sheet</h5>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="text" name="" id="" placeholder="Composition" disabled class="disable-text">
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="text" name="" id="" placeholder="Cotton" disabled class="disable-text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="text" name="" id="" placeholder="Property" disabled class="disable-text">
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <input type="text" name="" id="" placeholder="Short sleeves" disabled class="disable-text">
                            </div>
                        </div>
                    </div>



                    
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="review-heading">REVIEWS</div>
                        <p class="mb-20">There are no reviews yet.</p>
                        <form class="review-form" action="login/insert.php" method="post" >
                            <div class="form-group">
                                <label>Your rating</label>
                               <span>1</span> <input type="radio" name="rating" value ="1" checked>
                               <span>2</span> <input type="radio" name="rating" value ="2">
                               <span>3</span> <input type="radio" name="rating" value ="3">
                               <span>4</span> <input type="radio" name="rating" value ="4">
                               <span>5</span> <input type="radio" name="rating" value ="5">
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" rows="10" name="paragraph"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <input type ="submit" name="submit5" value="Submit Review" class="round-black-btn">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="suggest-product" id="suggest-product">
        <div class="container">
            <h2>YOU MIGHT ALSO LIKE</h2>
            <p>Essential office supplies in our online stationery shop that keep your office operations smooth and efficient</p>
            <div class="row mt-2">
            <?php 
$i=$_GET['id'];
$sel="select * from product_shop order by id desc  limit 0,3";
$r=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($r))
{
?>
                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="box-4">
                    </div>
                    <div class="product-grid">
                        <div class="product-image">
                        
                        <a href="product_details.php? id= <?php echo $row ['id'] ; ?>" class="image">
                                    <?php echo '<img src="login/images/'.$row ['image'].'"class="pic-1">';?>
                                    <?php echo '<img src="login/images/'.$row ['hover_image'].'"class="pic-2">';?>
                                    </a>
                            <span class="product-sale-label">Sale</span>
                        </div>
                        <div class="product-content">
                        <h3 class="title"><a href="product_details.php?id=<?php echo $row['id'];?>"><?php echo $row ['heading'] ; ?></a></h3>
                            <div class="price"><span>₹<?php echo $row ['price'] ; ?>/-</span>₹<?php echo $row ['strike_price'] ; ?>/-</div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <ul class="product-links">
                            <li><a href="login/add_cart.php?pid=<?php echo $row ['id'] ; ?>"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                                <li><a href="login/wishlist_add.php?pid=<?php echo $row ['id'] ; ?>"><i class="fa fa-heart"></i></a></li>
                                <li><a href="product_details.php? id= <?php echo $row ['id'] ; ?>"><i class="fa fa-eye"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
               <?php
}
?>
                
            </div>
        </div>
    </section>
    <!-- product-details-end -->

    <?php
include "footer.php";
    ?>
    <script>
        jQuery(function() {
            var j = jQuery; //Just a variable for using jQuery without conflicts
            var addInput = '#qty'; //This is the id of the input you are changing
            var n = 1; //n is equal to 1

            //Set default value to n (n = 1)
            j(addInput).val(n);

            //On click add 1 to n
            j('.plus').on('click', function() {
                j(addInput).val(++n);
            })

            j('.min').on('click', function() {
                //If n is bigger or equal to 1 subtract 1 from n
                if (n >= 1) {
                    j(addInput).val(--n);
                } else {
                    //Otherwise do nothing
                }
            });
        });
    </script>

</body>

</html>