<?php
include "admin_header.php";
?>



<?php
    include "connection.php";
    $i=$_GET['id'];
    $sel="select * from blog_view where id = '$i'";
    $r = mysqli_query($con,$sel);
    $row =mysqli_fetch_array($r);
        ?>

<div class="content-body">
    <div class="container-fluid" id="content-wrapper">
        <div class="row">
        <div class="col-lg-3 col-sm-3 mt-2"></div>
            <div class="col-lg-6 col-sm-6 mt-2">
                <form action="update.php" method="post" enctype="multipart/form-data">

                <label for=""></label>
                 <input type="hidden" name="id" value="<?php echo $row ['id']; ?> ">
                 
                    <label for="">Heading Name</label>
                    <input type="text" name="heading" placeholder="Heading Name" value="<?php echo $row ['heading']; ?>" class="input-area">

                    <label for="">Paragraph</label>
                    <textarea name="editor1" ><?php echo $row ['editor1']; ?></textarea>

                    <label for="">Choose File</label>
                    <?php echo '<img src="images/'.$row ['image'].'" height="70px" width="70">';?>
                    <input type="file" name="image" id="file">

                    <input type="submit" name="submit3" value="submit" class="btn btn-info">
                </form>
            </div>
        <div class="col-lg-3 col-sm-3 mt-2"></div>
        </div>
    </div>
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