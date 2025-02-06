<?php
include "header.php";
?>

<section class="blog-section" id="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="Blog.php">Home</a>
                    <span class="breadcrumb-item active">Blog</span>
                </nav>
            </div>
        </div>
        <div class="row ">
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
                    $sel="select * from blog_view order by id desc";
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
            <div class="col-lg-9 col-sm-9">
                <div class="main-blog-section">

                    <h2>Lastest Blogs</h2>

                    <?php
if (isset($_GET['pageno']))
 {
    $pageno = $_GET['pageno'];
} 
else {
    $pageno = 1;
}
$no_of_records_per_page = 2;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM blog_view ";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM blog_view LIMIT $offset, $no_of_records_per_page ";
$res_data = mysqli_query($con,$sql);
while($row1 = mysqli_fetch_array($res_data))
{
?>

<?php echo '<img src="login/images/'.$row1 ['image'].'" height="400px" width="100%">';?>
                    <h2><a href="blog_details.php?id=<?php echo $row1['id'];?>"><?php echo $row1 ['heading'] ; ?></a></h2>
                    <ul>
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
                    <br>
                    <p><?php 
                        $str1=$row1['editor1'];
                        if (strlen($str1) > 1000)
                        $str1 = substr($str1, 0, 250) . '...';
                        echo $str1;
                        ?> </p>

                    <b>Posted By:</b>
                    <span><a href="blog_details.php"><?php echo $row1 ['heading'] ; ?></a></span>
                    <span><?php echo $row1 ['date'] ; ?></span>
                    <br>
                    <a href="blog_details.php?id=<?php echo $row1['id'];?>"><input type="submit" class="btn btn-primary" value="Read More"></a>
                    <?php
}
?>
                    <div class="row mt-3">
                    <?php
                $sel="select count(*) as count from blog_view";
                $query=mysqli_query($con,$sel);
                while($r=mysqli_fetch_array($query))
                            {
                           ?>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <small>Showing 1 - 2 of <?php echo $r ['count'] ; ?> items</small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">

                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li><a class="page-link" href="?pageno=1">First</a></li>
                                    <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a class="page-link"
                                            href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                    </li>
                                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a class="page-link"
                                            href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Optional JavaScript -->
<script src="main.js"></script>
<?php
include "footer.php";
?>