<?php
include "header.php";
?>

<?php
$i=$_GET['id'];
$sel = "select * from blog_view";
$r = mysqli_query($con,$sel);
?>

<section class="blog_details" id="blog_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <div class="box">
                <a href="Blog.php">
                        <h5>Home</h5>
                    </a>
                    <hr>
                    <input type="search" placeholder="Search">
                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    <ul>
                        <li>
                            <a href="">Best articles</a>
                        </li>
                        <li>
                            <a href="">Latest articles</a>
                        </li>
                        <li>
                            <a href="">Articles favorite</a>
                        </li>
                    </ul>
                </div>
                <div class="box">
                    <h5>Popular Articles</h5>
                    <hr>
                    <?php
                    $sel="select * from blog_view ";
                    $query=mysqli_query($con,$sel);
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-sm-6 col-6">
                        <?php echo '<img src="login/images/'.$row ['image'].'" height="200px" width="100%">';?>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 text-center">
                            <h6 class="mt-2"><a href="blog_details.php?id=<?php echo $row['id'];?>"><?php echo $row ['heading'] ; ?></a></h6>
                            <small><?php echo $row ['date'] ; ?></small>

                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="box">
                    <h5>Tags Post</h5>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <ul class="blog-tags">
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">leotheme</a>
                                    </div>

                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">prestashop</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">theme</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">theclickypost</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">magento</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <ul class="blog-tags">
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">template</a>
                                    </div>

                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">joomla</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">wordpress</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">edjelley.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-box1">
                                        <a href="Blog.php">opencart</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9 col-sm-9 col-12">
            <?php
                ($row=mysqli_fetch_array($r));
{
?>
                <h2 class="blog-heading"><?php echo $row ['heading'] ; ?></h2>
                <ul class="blog-list">
                        <li>
                            <i class="fa fa-share"></i>
                            <span> Share</span>
                        </li>
                        <li>
                            <i class="fa fa-facebook-square"></i>
                            <span><a href=""> Facebook </a></span>
                        </li>
                        <li>
                            <i class="fa fa-twitter"></i>
                            <span><a href=""> Twitter </a></span>
                        </li>
                    </ul>
                
                <?php echo '<img src="login/images/'.$row ['image'].'">';?>

                <p><?php echo $row ['editor1'] ; ?></p>
                <?php
}
?>
            </div>

        </div>
    </div>
</section>
<?php
include "footer.php";
?>