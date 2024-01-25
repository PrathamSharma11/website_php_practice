<?php 
include "dbcon.php";

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$quali = $_POST['quali'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$course = $_POST['intern'];
//echo $name;
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$file = "upload/".$filename;
move_uploaded_file($tmpname,$file);


$data = "insert into pn(name,number,email,address,qualifications,branch,semester,course,image)value('$name','$number','$email','$address','$quali','$branch','$sem','$course','$file')";
$result = mysqli_query($con,$data);
if($result){
	header("location:pn.php");

}else{
	echo "something went wrong";
}




?>