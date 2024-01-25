<?php 

include "dbcon.php";

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
//$image = $_FILES['image'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" . $filename;
move_uploaded_file($tmpname,$file);

$data = "insert into gwalior (name,email,city,image)value('$name','$email','$city','$file')";
$result = mysqli_query($con,$data);

if ($result) {
	header('location:gwalior.php');
	// code...
}
else{
	echo "something went wrong!!";
}




?>