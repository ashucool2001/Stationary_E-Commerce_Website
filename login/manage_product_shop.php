<?php
include "admin_header.php";
?>

                                 

<div class="content-body">
    <div class="container-fluid" id="content-wrapper">
        <div class="row mt-3">
            <div class="col-lg-12 col-sm-12 mt-2">
                <table class="table">
                    <?php
    include "connection.php";
    $sel="select * from product_shop ";
    $r = mysqli_query($con,$sel)
        ?>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Paragraph</th>
                            <th>Discount Price</th>
                            <th> Price</th>
                            <th>Image Name</th>
                            <th>Hover Image</th>
                            <th>product_image2</th>
                            <th>product_image3</th>
                            <th>product_image4</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while ($row = mysqli_fetch_array($r))
{
    ?>
                        <tr>
                            <th><?php echo $row ['id'] ; ?></th>
                            <th><?php echo $row ['heading'] ; ?></th>
                            <th><?php echo $row ['category'] ; ?></th>
                            <th>
                                <?php 
                            $str1=$row['editor1'];
                            if (strlen($str1) > 100)
                            $str1 = substr($str1, 0, 12) . '...';
                            echo $str1;
                             ?>
                            </th>
                            <th><?php echo $row ['strike_price'] ; ?></th>
                            <th><?php echo $row ['price'] ; ?></th>
                            <th><?php echo $row ['image'] ; ?></th>
                            <th><?php echo $row ['hover_image'] ; ?></th>
                            <th><?php echo $row ['product_image2'] ; ?></th>
                            <th><?php echo $row ['product_image3'] ; ?></th>
                            <th><?php echo $row ['product_image4'] ; ?></th>
                            <th><a href="product_shop_edit_data.php?id=<?php echo $row ['id'] ; ?>"><i class="fas fa-edit"></i></a>
                            </th>
                            <th><a
                                    href="delete.php?id=<?php echo $row ['id']; ?>&image=<?php echo $row['image'];?>&pageid=1">
                                    <i class="fas fa-trash"></i></a></th>
                        </tr>
                        <?php
}
?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include "admin_footer.php";
            ?>

<style>
table tr{
    border: 1px solid black;
    width: 100%;
    height: auto;
    padding: 10px;
    text-align: center;
    display: revert;
    align-items: center;
    justify-content: center;
}
</style>