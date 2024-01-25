<?php
include 'dbcon.php';
$a =  $_POST['name'];
$b =  $_POST['email'];
$c =  $_POST['college'];
$d =  $_POST['gender'];
$e =  $_POST['education'];

$data = "insert into college(name,email,college,gender,education)value('$a','$b','$c','$d','$e')";
$result = mysqli_query($con,$data);

if($result){
	header('location:college.php');
}
else{
	echo "no data inserted";
}

?>