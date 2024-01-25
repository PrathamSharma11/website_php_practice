<?php 

include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];

$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" . $filename;
move_uploaded_file($tmpname,$file);
//echo $id, $name ,$email, $city, $file;
if ($filename == "") {
	// code...
	$data = "update gwalior set name = '$name',email = '$email',city = '$city' where id = '$id'";
    $result = mysqli_query($con,$data);
    header('location:gwaliordisplay.php');

} else {
	// code...
	$data = "update gwalior set name = '$name',email = '$email',city = '$city',image = '$file' where id = '$id'";
    $result = mysqli_query($con,$data);
    header('location:gwaliordisplay.php');
}


//$data = "update gwalior set name = '$name',email = '$email',city = '$city',image = '$file' where id = '$id'";
//$result = mysqli_query($con,$data);












?>