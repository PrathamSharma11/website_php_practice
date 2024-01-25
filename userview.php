<?php 
include "dbcon.php";
$id  =$_GET['id'];
//echo $id;
//die();
$data = "select * from user where id = '$id'";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b = mysqli_fetch_array($result);
//echo "<pre>";
//print_r($b);





?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<table class="table table-bordered text-center bg-light">
		<tr>
			<th colspan="6">DATA Display</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>username</th>
			<th>password</th>
			
			
		</tr>
		<tr>
			<td><?php echo $b['id'] ?></td>
			<td><?php echo $b['username'] ?></td>
			<td><?php echo $b['password'] ?></td>
			
			
		</tr>
		
		
	</table>