 <!-- connection to database -->
 <?php
$serveruser = "localhost";
$username = "root";
$password = "";
$dbname = "statinoery";
$con=mysqli_connect("$serveruser","$username","$password","$dbname");
if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
}

