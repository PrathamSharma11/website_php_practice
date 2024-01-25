<?php
include "dbcon.php";

$title = $_POST['title'];
//$image = $_FILES['image'];

// echo "<pre>";
// print_r($_FILES['image']);

$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
//echo $tmpname;
$file = "upload/" .$filename;
//echo $file;

move_uploaded_file($tmpname, $file);




$data = "insert into image(title,image)value('$title','$file')";
$result = mysqli_query($con,$data);

header('location:image.html');


?>