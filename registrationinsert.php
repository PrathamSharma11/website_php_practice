<?php 

include "dbcon.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = "insert into login(name,email,password)value('$name','$email','$password')";
$result=  mysqli_query($con,$data);
if($result){
 header('location:login.php');
}
else{
	echo "no data inserted";
}






?>