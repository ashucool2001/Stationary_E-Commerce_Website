<?php
include "admin_header.php";
?>
<div class="content-body">
    <div class="container-fluid" id="content-wrapper">
        <div class="row">
            <div class="col-lg-4 col-sm-4 mt-2">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <label for="">Heading</label>
                    <input type="text" name="heading" placeholder="Enter Heading Name" class="input-area">

                    <label for="">Paragraph</label>
                    <input type="text" name="paragraph" placeholder="Enter Paragraph Name" class="input-area">

                    <label for="">Status:</label>
                    <span>Active</span> <input type="radio" name="status" value="1">
                    <span>Deactive</span> <input type="radio" name="status" value="0">
                    <br>
                    <label for="">Choose File</label>
                    <input type="file" name="image">
                    <input type="submit" name="submit" value="submit" class="btn btn-info">
                </form>
            </div>
            <div class="col-lg-8 col-sm-8 mt-2">
                <table>
                    <?php
    include "connection.php";
    $sel="select * from slider_data";
    $r = mysqli_query($con,$sel)
        ?>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Heading</th>
                            <th>Paragraph</th>
                            <th>Status</th>
                            <th>Image</th>
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
                            <th><?php echo $row ['paragraph'] ; ?></th>
                            <th><?php echo $row ['status'] ; ?></th>
                            <th><?php echo $row ['image'] ; ?></th>
                            <th><a href="slider_edit_data.php? id= <?php echo $row ['id'] ; ?>"><i class="fas fa-edit"></i></a>
                            </th>
                            <th><a href="delete.php?id=<?php echo $row ['id']; ?>&image=<?php echo $row['image'];?>&pageid=1">
                                    <i class="fas fa-trash"></i></a></th>
                        </tr>
                        <?php
}
?>
                </table>
            </div>
        </div>
        <!-- #/ container -->
    </div>
















    <?php
include "admin_footer.php";
?>

    <style>
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