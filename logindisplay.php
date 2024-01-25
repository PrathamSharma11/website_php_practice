<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>display</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<table class="table table-bordered text-center bg-light">
			<tr><td colspan="4">Registered People</td></tr>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Actions</th>
			</tr>
			<?php 
			include "dbcon.php";
			$data = "select * from login order by id desc";
			$result = mysqli_query($con,$data);
			$d = mysqli_fetch_array($result);
			while ($d = mysqli_fetch_array($result)) {
				// code...
			




			?>
			<tr>
				<td><?php echo $d['id']  ?></td>
				<td><?php echo $d['name']  ?></td>
				<td><?php echo $d['email']  ?></td>
				<td><?php echo $d['password']  ?></td>
				<td>
				<a href="" class="btn btn-info">View</a>
				<a href="" class="btn btn-warning">Edit</a>
				<a href="" class="btn btn-danger">Delete</a>
			</td>
			<?php
			} 

			?>
			</tr>
		</table>
	</div>

</body>
</html>