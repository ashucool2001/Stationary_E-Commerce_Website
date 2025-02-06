<?php
include "admin_header.php";
?>
<div class="content-body">
    <div class="container" id="content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-sm-12 mt-2">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Product Name</label>
                            <input type="text" name="heading" placeholder="Enter Product Name" class="input-area">
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <select class="form-control" name="category" id="">
                                    <option>Select Category</option>
                                    <option>Featured</option>
                                    <option>On Sale</option>
                                    <option>Top Rated</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Pargraph</label>
                            <textarea type="text" name="editor1" ></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Product Strike Price</label>
                            <input type="text" name="strike_price" placeholder="Product Strike Price"
                                class="input-area">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Product Price</label>
                            <input type="text" name="price" placeholder="Sell Product Price" class="input-area">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <label for="">Main Product Image</label>
                            <br>
                            <input type="file" name="image">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Hover Image</label>
                            <br>
                            <input type="file" name="hover_image">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Deatils Image2</label>
                            <br>
                            <input type="file" name="product_image2">
                        </div>

                        <div class="col-lg-2">

                            <label for="">Product Deatils Image3</label>
                            <br>
                            <input type="file" name="product_image3">
                        </div>
                        <div class="col-lg-2">

                            <label for="">Product Deatils Image4</label>
                            <br>
                            <input type="file" name="product_image4">
                        </div>
                        <div class="col-lg-1"></div>

                    </div>

                    <input type="submit" name="submit2" value="submit" class="btn btn-info text-center">
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