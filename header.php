<?php
session_start();
//setcookie("Auction_Item", "arpit nuwal", time() + 2 * 24 * 60 * 60);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Statinoery </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Min.css">

    <!-- fa-icon link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- !-- PRODUCT SLIDER LINK -->
    <link rel='stylesheet' href='https://owlgraphic.com/owlcarousel/assets/css/bootstrapTheme.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>




</head>
<?php
include "login/connection.php";
?>

<body onload="myFunction()">

    <!-- Page Loader Satrt -->
    <section class="page-loader" id="page-loader">
        <div class='loader'>
            <img src="images/loader-img.gif" alt="">
        </div>
    </section>
    <!-- Page Loader End -->

    <section style="display:none;" id="myDiv">
        <!------------------------ top-navbar-start---------------------------- -->

        <section class="top-navbar" id="top-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <a href="">Call: (+880) 123 4567</a>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-12">
                        <span>Summer Sale Discount <font style="color:  #E84F69; font-weight: 600;">50% Off.</font>
                        </span>
                    </div>


                    <div class="col-lg-4 col-sm-4 col-12 ">
                        <div class="nav-list">
                            <ul>
                                <li>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" type="button" id="triggerId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            English
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="index.php">English</a>
                                            <a class="dropdown-item" href="index.php">Fraincais</a>
                                            <a class="dropdown-item" href="index.php">Deutsch</a>
                                        </div>
                                    </div>
                                </li>

                                <?php
    $sel = "select * from web_user_login";
    mysqli_query($con,$sel);
    
                                ?>
                                <li>
                                    <?php
if (isset($_SESSION["username"]))
{
    ?>
                                    <div class="dropdown">
                                        <a class="btn  dropdown-toggle" type="button" id="triggerId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profile
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="index.php">
                                                <?php
if (isset($_SESSION["name"]))
{
echo "Hi." . $_SESSION["name"] . "";
}

?>
                                            </a>
                                            <a class="dropdown-item" href="#">My Order</a>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </div>
                                    </nav>
                                    <?php
}
?>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------ top-navbar-end---------------------------- -->

        <!------------------------ second-top-navbar-start---------------------------- -->

        <section class="top-navbar-1 d-none d-lg-block d-sm-block" id="top-navbar-1">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-8 col-sm-3 mt-2">
                        <img src="images/logo.png" alt="">
                    </div>

                    <div class="col-lg-3 col-sm-3 col-4 overlay-2 d-lg-none d-block">
                        <ul>
                            <li><a href=" "><i class="fa fa-user " aria-hidden="true "></i></a></li>
                            <li><a href=" "><i class="fa fa-heart-o " aria-hidden="true "></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12 col-sm-6 mt-2 ">
                        <div class="row overlay-1">

                            <div class="col-lg-7  col-6 col-sm-7">
                                <input type="text" name="search" id="search1" placeholder="Search Products..."
                                    autocomplete="off" required>
                            </div>


                            <div class="col-lg-4 col-4 col-sm-3 ">

                                <select class="form-control" name="" id=""
                                    onchange="window.location='?pageno=1&&filter=0&&categoryid='+ this.value;">
                                    <option>All category</option>

                                    <?php
                            $sel="select DISTINCT category,categoryid from product_shop $orderbysql";
                            $r=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_array($r))
                            {
                           ?>
                                    <option value="<?php echo $row ['categoryid'] ; ?>">
                                        <?php echo $row ['category'] ; ?></a>
                                    </option>
                                    <?php
                            }
                            ?>
                                </select>

                            </div>
                            <div class="col-lg-1 col-2 col-sm-2 mt-2 ">
                                <a href="#"> <i class="fa fa-search " style="color: #000;"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7  col-6 col-sm-7" style="z-index:9999;  position: absolute;">
                                <div class="list-group" id="show-list"></div>
                            </div>
                            <div class="col-lg-5 col-5 col-sm-5 ">
                            </div>
                        </div>


                    </div>


                    <div class="col-lg-3 col-sm-3 col-12 overlay-2  d-lg-block d-none">

                        <ul>
                            <li>
                                <?php

//setcookie("Auction_Item", "arpit nuwal", time() + 2 * 24 * 60 * 60);
?>
                                <?php
if (isset($_SESSION["username"]))
{
    ?>
                                <nav class="breadcrumb ">
                                    <a class="breadcrumb-item" href="myaccount.php">My Account</a>

                                </nav>
                                <?php
}
else
{
    ?>
                                <nav class="breadcrumb ">
                                    <a class="breadcrumb-item" href="login.php">Login</a>
                                    <a class="breadcrumb-item" href="sign_up.php">Register</a>
                                </nav>

                                <?php
}
?>
                            </li>
                            <?php
                            $query="select  count(1) AS countdata from cart"; 
                            $result=mysqli_query($con,$query);
                            $singleRow = mysqli_fetch_row($result);
                              $maxx= $singleRow['0'];                         
                            ?>

                            <?php
                            $query2="select  count(1) AS countdata from wishlist"; 
                            $result2=mysqli_query($con,$query2);
                            $singleRow2 = mysqli_fetch_row($result2);
                              $maxx2= $singleRow2['0'];                         
                            ?>
                            <li><a href="wishlist.php"><i class="fa fa-heart-o "
                                        data-count="<?php echo $maxx2 ['0'] ; ?>" aria-hidden="true "></i></a></li>
                            <li><a href="add_cart.php"><i class="fa fa-shopping-cart "
                                        data-count="<?php echo $maxx ['0'] ; ?>" aria-hidden="true "></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <!------------------------ second-top-navbar-end---------------------------- -->

        <!------------------------------ header-navbar-start ----------------->
        <section class="navbar-section d-none d-lg-block d-sm-block " id="navbar-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark    ">
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                                aria-label="Toggle navigation"></button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">HOME</a>
                                    </li>

                                    <li class="nav-item dropdown-1">
                                        <a class="nav-link dropdown-toggle" href="Shop.php" id="dropdownId"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SHOP</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h6>Board And Display Equipment</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">Whiteboards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Combination Boards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Notice Boards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Clipboards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Display Boards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Easels And Flipcharts</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Literature Holders</a>
                                                            </li>

                                                            <li>
                                                                <a href="Shop.php">Pin Boards</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Frames</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Presentation Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Sign Holders</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Whiteboard Cleaners And
                                                                    Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Chalk Boards And Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h6>File Storage And Archiving</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">Lever Arch Files And Ring
                                                                    Binders</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Dividers</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Square Cut And Manilla Folders</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Box Files</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Document Wallets</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Card Index And Supplies</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Clip Files And Folders</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Plastic Wallets And Folders</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Report Covers</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Storage Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Suspension Filing</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h6>Office Basics And Stationery</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">Hole Punches</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Glues And Adhesives</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Post-It And Sticky Products</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Ink Stamps</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Name Badges And Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Scissors</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Calculators</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Office Clips And Fasteners</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Staplers And Staples</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Paper Trimmers And Cutters</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Cash Boxes And Cash Drawers</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Rulers</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Storage Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">Adhesive Tape</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <img src="images/menu-1.jpg" alt="" srcset="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown-2">
                                        <a class="nav-link dropdown-toggle" href="Shop.php" id="dropdownId-1"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">PRODUCT</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId-1">

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Writing Supplies</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Ballpoint Pens
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Marker Pens
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Fineliners
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Pencils
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Fountain Pens
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Gel Pens
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Rollerball Pens
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Pen Refills
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Pencil Cases
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Correction
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Rubbers And Erasers
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Stationery Sets
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Writing Accessories
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <img src="images/menu-2.jpg" alt="" srcset="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown-3">
                                        <a class="nav-link dropdown-toggle" href="Shop.php" id="dropdownId-2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId-2">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Product List Style</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 1(DF)
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 2
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 3
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 4
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 6
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 7
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 8
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 9
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 10
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 11
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product list style 12
                                                                </a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6>Product Page Styles</h6>
                                                        <ul>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product thumbs bottom
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product thumbs left
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product thumbs right
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product no thumbs
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product no thumbs center
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product no thumbs fullwidth
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="Shop.php">
                                                                    Product Gallery
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Blog.php">BLOG</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Contact.php">CONTACT</a>
                                    </li>
                                </ul>


                            </div>
                            <ul class="navbar-nav-1">
                                <li class="nav-item ">
                                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                    <span>Clearance Up <b style="color: #E84F69;"> To 30% Off</b></span>

                                </li>
                            </ul>
                        </nav>
                    </div>

                    <button class="openbtn" id="category_n" onclick="openNav()"><i class="fa fa-bars"
                            aria-hidden="true">Browser Categroy</i>
                    </button>
                </div>
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                        ×
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-calculator"></i>
                        <span>Calculator</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-home"></i>
                        <span>Conference Pad</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-book"></i>
                        <span>Files And Floder</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-brush"></i>
                        <span>Artist Supplies</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-pen"></i>
                        <span>School Supplies</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-folder"></i>
                        <span>Printing Supplies</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-archive"></i>
                        <span>Paper Trays</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-toolbox"></i>
                        <span>Tools</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-video"></i>
                        <span>Tools Photo</span>
                    </a>
                    <a href="Shop.php">
                        <i class="fas fa-book-open"></i>
                        <span>Paper Notebook</span>
                    </a>
                </div>
                <div id="main">
                </div>
            </div>
            </div>
        </section>
        <!------------------------ header-navbar-end------------------------- -->

        <!-- Mobile Device Sidebar Code Start -->
        <section class="sidebar-section d-block d-lg-none d-sm-block " id="sidebar-section">
            <div id="mySidenav-2" class="sidenav">
                <div class="header-top">
                    <div class="header">
                        <img src="images/logo.png" alt="Logo">
                    </div>
                    <div class="close">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
                    </div>
                </div>
                <div class="navbar-sidenav">
                    <div class="search">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="Search Your Products"
                                aria-describedby="helpId">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="menus">
                        <a class="nav-link" href="index.html">Home</a>
                        <div id="accordianId" role="tablist" aria-multiselectable="true">
                            <!-- Collapse 1 -->
                            <div class="card-header" role="tab" id="about-us">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#about" aria-expanded="true"
                                    aria-controls="about"> Categroy <i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div id="about" class="collapse in" role="tabpanel" aria-labelledby="about-us">
                                <div class="card-body">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#shop1"
                                        aria-expanded="true" aria-controls="about">Board And Display Equipment <i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>

                                    <div id="shop1" class="collapse in" role="tabpanel" aria-labelledby="about-us">
                                        <div class="card-body">
                                            <a href="Shop.php">Whiteboards</a>
                                            <a href="Shop.php">Combination Boards</a>
                                            <a href="Shop.php">Notice Boards</a>
                                            <a href="Shop.php">Clipboards</a>
                                            <a href="Shop.php">Wall Planners</a>
                                            <a href="Shop.php">Cue Cards</a>
                                            <a href="Shop.php">Display Boards</a>
                                            <a href="Shop.php">Easels And Flipcharts</a>
                                            <a href="Shop.php">Presentation Accessories</a>
                                            <a href="Shop.php">Literature Holders</a>
                                            <a href="Shop.php">Pin Boards</a>
                                            <a href="Shop.php">Frames</a>
                                        </div>
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#shop2"
                                        aria-expanded="true" aria-controls="about">File Storage And Archiving<i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <div id="shop2" class="collapse in" role="tabpanel" aria-labelledby="about-us">
                                        <div class="card-body">
                                            <a href="Shop.php">Lever Arch Files And Ring Binders</a>
                                            <a href="Shop.php">Dividers</a>
                                            <a href="Shop.php">Square Cut And Manilla Folders</a>
                                            <a href="Shop.php">Box Files</a>
                                            <a href="Shop.php">Document Wallets</a>
                                            <a href="Shop.php">Card Index And Supplies</a>
                                            <a href="Shop.php">Display Boards</a>
                                            <a href="Shop.php">Clip Files And Folders</a>
                                            <a href="Shop.php">Plastic Wallets And Folders</a>
                                            <a href="Shop.php">Report Covers</a>
                                            <a href="Shop.php">Storage Boxes</a>
                                            <a href="Shop.php">Suspension Filing</a>
                                        </div>
                                    </div>
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#shop3"
                                        aria-expanded="true" aria-controls="about">Office Basics And Stationery<i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <div id="shop3" class="collapse in" role="tabpanel" aria-labelledby="about-us">
                                        <div class="card-body">
                                            <a href="Shop.php">Hole Punches</a>
                                            <a href="Shop.php">Glues And Adhesives</a>
                                            <a href="Shop.php">Post-It And Sticky Products</a>
                                            <a href="Shop.php">Ink Stamps</a>
                                            <a href="Shop.php">Name Badges And Accessories</a>
                                            <a href="Shop.php">Scissors</a>
                                            <a href="Shop.php">Calculators</a>
                                            <a href="Shop.php">Office Clips And Fasteners</a>
                                            <a href="Shop.php">Staplers And Staples</a>
                                            <a href="Shop.php">Paper Trimmers And Cutters</a>
                                            <a href="Shop.php">Cash Boxes And Cash Drawers</a>
                                            <a href="Shop.php">Rulers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Collapse 1 -->

                            <a class="nav-link" href="">Blog</a>
                            <a class="nav-link" href="#">Contact Us</a>

                        </div>
                    </div>
                    <div class="information">
                        <div class="company">
                            <div class="single-mobile-header-info">
                                <a href="#"><i class="fa fa-user"></i>&nbsp; Login / Register </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#"><i class="fa fa-envelope"></i>&nbsp;
                                    demo@demo.com </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#"><i class="fa fa-phone"></i>&nbsp; (+84)-01234 - 5678 </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <i class="fa fa-clock-o"></i>&nbsp; Monday – Friday: 9:00-20:00 Saturday: 11:00 – 15:00
                            </div>
                        </div>
                    </div>
                    <div class="follow">
                        <h6>STAY CONNECTED</h6>
                        <div class="fa-icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="fa-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="fa-icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        <div class="fa-icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </div>
                    <div class="footer">
                        <b>Copyright © 2021 stationero. All Rights Reserved.</b>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sidebar">
                    <div class="logo">
                        <a href=""><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="bar" onclick="openNav2()">
                        <i class="fa fa-bars" aria-hidden="true" style="color: #000 !important;"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mobile Device Sidebar Code End -->