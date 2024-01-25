<?php
include "dbcon.php";
$id = $_GET['id'];
$data = "delete from gwalior where id = '$id'";
$result = mysqli_query($con,$data);
header('location:gwaliordisplay');



?>