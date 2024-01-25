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
			<th>College</th>
			<th>Gender</th>
			<th>Education</th>
			<th>Action</th>
		</tr>
<?php
		include "dbcon.php";
		$data ="select * from mits order by id desc";
		$result = mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($result);
		// die();
		$a = mysqli_fetch_array($result);
		// echo "<pre>";
		// print_r($a);
		// die();
    
    while($a = mysqli_fetch_array($result)) {
    	//code...
    	//echo "<pre>";
    	//print_r($a);
    
		  
		






?>
		<tr>
			<td><?php echo $a["id"] ?></td>
			<td><?php echo $a["name"] ?></td>
			<td><?php echo $a["college"] ?></td>
			<td><?php echo $a["gender"] ?></td>
			<td><?php echo $a["education"] ?></td>
			<td>
				<a href="mitsview.php?id=<?php echo $a["id"]   ?>" class="btn btn-info">View</a>
				<a href="mitsedit.php?id=<?php  echo $a["id"] ?>" class="btn btn-warning">Edit</a>
				<a href="" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
    }
		?>
		
		
	</table>
</div>

</body>
</html>