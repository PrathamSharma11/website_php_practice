<?php 

include "dbcon.php";
$name = $_POST['name'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$education = $_POST['education'];
// echo "<pre>"
// print_r($education);
// die();
$e = implode(',',$education);
// echo $e;
// die();


$data = "insert into mits(name,college,gender,education)value('$name','$college','$gender','$e')";
$result = mysqli_query($con,$data);
header('location:mits.php');






?>