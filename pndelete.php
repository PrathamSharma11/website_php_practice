<?php 

include "dbcon.php";
$id = $_GET['id'];
$data = "delete from pn where id = '$id'";
$result = mysqli_query($con,$data);

header('location:pndisplay.php');



?>