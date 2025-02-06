<?php
include "admin_header.php";
?>


<section class="content-wrapper" id="content-wrapper">
            <div class="container">
                <div class="row ">

                    <div class="col-lg-4 col-sm-4">

                    </div>

                    <?php
    include "connection.php";
    $i=$_GET['id'];
    $sel="select * from deal_zone where id = '$i'";
    $r = mysqli_query($con,$sel);
    $row =mysqli_fetch_array($r);
        ?>

                    <div class="col-lg-4 col-sm-4 mt-5">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <label for=""></label>
                            <input type="hidden" name="id" value="<?php echo $row ['id']; ?> ">

                            <label for="">Heading</label>
                            <input type="text" name="heading" value="<?php echo $row ['heading']; ?>"
                                placeholder="Enter Heading Name" class="input-area">

                            <label for="">Paragraph</label>
                            <input type="text" name="paragraph" value="<?php echo $row ['paragraph']; ?> "
                                placeholder="Enter Paragraph Name" class="input-area">
                            <input type="submit" name="submit2" value="submit" class="btn btn-info">
                        </form>
     
                    </div>
                    <div class="col-lg-4 col-sm-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "admin_footer.php";
?>

<style>
      #content-wrapper{
         
      }
    #content-wrapper form{
        border:1px solid black;
        padding: 15px;
    }
    #content-wrapper .input-area {
    width: 100%;
    padding: 10px;
    outline: none;
}
   #content-wrapper label{
       font-weight:bold;
       margin-top:15px;
   }
   #content-wrapper .btn-info{
    width:25%;
    margin-top:20px;
   }
   #content-wrapper table th{
    border:1px solid black;
    width: 100%;
    height:auto;
    padding:10px;
    text-align:center;
    display:revert;
    align-items:center;
    justify-content:center;
   }
   #content-wrapper a{
    text-decoration:none;
    color:black;
   }
   #content-wrapper .status{
       display: inline;
   }
</style>