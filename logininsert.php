<?php 
session_start();
include "dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];

$data = "select * from login where email = '$email' && password = '$password'";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);


$total = mysqli_num_rows($result);
$a = mysqli_fetch_array($result);
//echo $total;
if ($total==1) {
	$_SESSION['n']=$a['name'];
	$_SESSION['e']=$a['email'];
	header('location:dashboard.php');
}
else{
	$_SESSION['error']= 'wrong email password';
	header('location:login.php');
}

?>