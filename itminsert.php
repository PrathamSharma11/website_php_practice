<?php
include 'dbcon.php';
$a =  $_POST['u'];
$b =  $_POST['v'];
$c =  $_POST['w'];
$d =  $_POST['x'];


$data = "insert into itm(name,email,city,address)value('$a','$b','$c','$d')";
$result = mysqli_query($con,$data);

if($result){
	header('location:itm.php');
}
else{
	echo "no data inserted";
}

?>