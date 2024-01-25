<?php 

include "dbcon.php";
$id = $_GET['id'];
$data = "delete from itm where id = '$id'";
$result = mysqli_query($con,$data);

header('location:userdisplayitm.php');



?>