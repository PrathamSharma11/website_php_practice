<?php

include "dbcon.php";

$id = $_GET['id'];
$data = "select * from gwalior where id = '$id'";
$result = mysqli_query($con,$data);
$v = mysqli_fetch_array($result);


?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<table class="table table-bordered text-center bg-light">
		<tr>
			<th colspan="6">Info</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>email</th>
			<th>city</th>
			<th>image</th>
			
		</tr>


		<tr>
			<td><?php echo $v["id"] ?></td>
			<td><?php echo $v["name"] ?></td>
			<td><?php echo $v["email"] ?></td>
			<td><?php echo $v["city"] ?></td>
			<td><img src="<?php echo $v["image"] ?>" style= "width: 70px;height: 70px;"></td>
			
		</tr>
		
		
		
	</table>
</div>

</body> 
</html>
