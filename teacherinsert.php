<?php
include 'dbcon.php';
$a =  $_POST['u'];
$b =  $_POST['v'];
$c =  $_POST['w'];
$d =  $_POST['x'];
$e =  $_POST['y'];

$data = "insert into teacher(name,email,phone_number,city,college)value('$a','$b','$c','$d','$e')";
$result = mysqli_query($con,$data);

if($result){
	header('location:teacher.php');
}
else{
	echo "no data inserted";
}

?>