<?php 

include "dbcon.php";
$id = $_POST['id'];
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$qualifications = $_POST['quali'];
$branch = $_POST['branch'];
$semester = $_POST['sem'];
$course = $_POST['intern'];

$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/" . $filename;
move_uploaded_file($tmpname,$file);
//echo $id, $name ,$email, $file;
if ($filename == "") {
	// code...
	$data = "update pn set name = '$name',number = '$number',email = '$email',address = '$address',qualifications = '$qualifications',branch = '$branch',semester = '$semester',course = '$course' where id = '$id'";
    $result = mysqli_query($con,$data);
    header('location:pndisplay.php');

} else {
	// code...
	$data = "update pn set name = '$name',number = '$number',email = '$email',address = '$address',qualifications = '$qualifications',branch = '$branch',semester = '$semester',course = '$course',image = '$file' where id = '$id'";
    $result = mysqli_query($con,$data);
    header('location:pndisplay.php');
}















?>