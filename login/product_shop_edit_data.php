<?php
include "admin_header.php";
?>


<?php
    include "connection.php";
    $i=$_GET['id'];
    $sel="select * from product_shop where id = '$i'";
    $r = mysqli_query($con,$sel);
    $row =mysqli_fetch_array($r);
        ?>


<div class="content-body">
    <div class="container" id="content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-sm-12 mt-2">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                        <input type="hidden" name="id" value="<?php echo $row ['id']; ?>">


                            <label for="">Product Name</label>
                            <input type="text" name="heading" placeholder="Enter Product Name" class="input-area" value="<?php echo $row ['heading']; ?>">
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <select class="form-control" name="category" id="">
                                    <option>Select Category</option>
                                  


    <option value="<?php echo $row["category"];?>"><?php echo $row["category"];?>
    </option>




                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Pargraph</label>
                            <textarea type="text" name="editor1"><?php echo $row ['editor1']; ?></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Product Discount Price</label>
                            <input type="text" name="strike_price" placeholder="Product Strike Price"
                                class="input-area" value="<?php echo $row ['strike_price']; ?>">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Product Price</label>
                            <input type="text" name="price" placeholder="Sell Product Price" class="input-area" value="<?php echo $row ['price']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <label for="">Main Product Image</label>
                            <br>
                            <?php echo '<img src="images/'.$row ['image'].'" height="70px" width="70px">';?>
                            <input type="file" name="image">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Hover Image</label>
                            <br>
                            <?php echo '<img src="images/'.$row ['hover_image'].'" height="70px" width="70px">';?>
                            <input type="file" name="hover_image">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Deatils Image2</label>
                            <br>
                            <?php echo '<img src="images/'.$row ['product_image2'].'" height="70px" width="70px">';?>
                            <input type="file" name="product_image2">
                        </div>

                        <div class="col-lg-2">

                            <label for="">Product Deatils Image3</label>
                            <br>
                            <?php echo '<img src="images/'.$row ['product_image3'].'" height="70px" width="70px">';?>
                            <input type="file" name="product_image3">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Deatils Image4</label>
                            <br>
                            <?php echo '<img src="images/'.$row ['product_image4'].'" height="70px" width="70px">';?>
                            <input type="file" name="product_image4">
                        </div>
                        <div class="col-lg-1"></div>

                    </div>

                    <input type="submit" name="submit4" value="Submit" class="btn btn-info text-center">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "admin_footer.php";
?>

<style>
#content-wrapper {
    overflow: scroll;
}

#content-wrapper form {
    border: 1px solid black;
    padding: 15px;
}

#content-wrapper .input-area {
    width: 100%;
    padding: 10px;
    outline: none;
}

#content-wrapper label {
    font-weight: bold;
    margin-top: 15px;
}

#content-wrapper .btn-info {
    width: 25%;
    margin-top: 20px;
}

#content-wrapper table th {
    border: 1px solid black;
    width: 100%;
    height: auto;
    padding: 10px;
    text-align: center;
    display: revert;
    align-items: center;
    justify-content: center;
}

#content-wrapper a {
    text-decoration: none;
    color: black;
}

#content-wrapper .status {
    display: inline;
}
</style>