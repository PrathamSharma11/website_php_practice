<?php 

//mysqli_connect("hostname","username","password","databasename");


$con = mysqli_connect('localhost','root','','curd');
if ($con){
	echo "connect";
}
else{
	echo "no connect";
}

?>