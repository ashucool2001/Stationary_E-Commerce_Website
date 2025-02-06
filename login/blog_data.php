<?php
include "admin_header.php";
?>


<div class="content-body">
    <div class="container-fluid" id="content-wrapper">
        <div class="row">
            <div class="col-lg-6 col-sm-6 mt-2">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <label for="">Heading Name</label>
                    <input type="text" name="heading" placeholder="Heading  Name" class="input-area">

                    <label for="">Paragraph</label>
                    <textarea name="editor1" class="input-area"></textarea>

                    <label for="">Choose File</label>
                    <input type="file" name="image" class="input-area">

                    <input type="submit" name="submit4" value="submit" class="btn btn-info">
                </form>
            </div>
            <div class="col-lg-6 col-sm-6 mt-2">
                <table>
                    <?php
    include "connection.php";
    $sel="select * from blog_view ";
    $r = mysqli_query($con,$sel)
        ?>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Heading </th>
                            <th>Paragraph</th>
                            <th>image</th>
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
                            <th> <?php 
                                                   $str1=$row['editor1'];
                                                    if (strlen($str1) > 100)
                                                    $str1 = substr($str1, 0, 12) . '...';
                                                  echo $str1;
                                                    ?> </th>
                            <th><?php echo $row ['image'] ; ?></th>
                            <th><a href="blog_view_edit_data.php? id=<?php echo $row ['id'] ; ?>"><i class="fas fa-edit"></i></a>
                            </th>
                            <th><a
                                    href="delete.php? id= <?php echo $row ['id']  ; ?>&image=<?php echo $row['image'];?>&pageid=4"><i
                                        class="fas fa-trash"></i></a></th>
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
#content-wrapper {
overflow:scroll;
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