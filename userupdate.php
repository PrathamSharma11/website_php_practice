<?php
include "dbcon.php";
$id = $_POST['id'];
$a = $_POST['u'];
$b = $_POST['p'];
echo $a,$b;


$data = "update user set username = '$a',password = '$b' where id = '$id'";
$result = mysqli_query($con,$data);
header('location:userdisplay.php');



?>