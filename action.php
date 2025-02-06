<?php
  require_once 'login/connection.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];


    $sql = "SELECT id,image,heading FROM product_shop  WHERE heading LIKE '%$inpText%' limit 0,5";
    $res_data = mysqli_query($con,$sql);
    while($row1 = mysqli_fetch_array($res_data)){
    echo '<a href="product_details.php?id='.$row1 ['id'].'" class="list-group-item list-group-item-action">'.'<img src="login/images/'.$row1 ['image'].'" height="35px" width="35px">' . $row1 ['heading']  . '</a>';
  }
}
?>
<style>
  .list-group-item{
    background:white;
    /* border: none; */
    font-size:11px;
    font-weight:bold;
  }
  .list-group-item-action{
    position: relative;
    z-index: 9999;
    /* margin-top:13px */
  }
</style>