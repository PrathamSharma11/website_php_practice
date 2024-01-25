<?php 
include "dbcon.php";
$a = $_POST['u'];
$b = $_POST['p'];


$data="insert into user(username,password)value('$a','$b')";

$result = mysqli_query($con,$data);

if($result){
	header('location:get.php');
}
else{
	echo "no data inserted";
}

?>