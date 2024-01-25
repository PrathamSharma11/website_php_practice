<?php
include "dbcon.php";
$id = $_POST['id'];
$a =  $_POST['u'];
$b =  $_POST['v'];
$c =  $_POST['w'];
$d =  $_POST['x'];

echo $a,$b,$c,$d;
$data = "update itm set name = '$a',email = '$b',city = '$c',address = '$d' where id = '$id'";
$result = mysqli_query($con,$data);
header('location:userdisplayitm.php');





?>