<?php 
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from pn where id = '$id'";
$result = mysqli_query($con,$data);
$b = mysqli_fetch_array($result);





?>


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
	<div class="container-fluid">
		<table class="table table-bordered text-center bg-light">
			<tr>
				<th colspan="9">Internship Info</th>
			</tr>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>Qualifications</th>
			<th>Branch</th>
			<th>Semester</th>
			<th>Course</th>
			<th>Images</th>
			
		    </tr>

		    <tr>
			<td><?php echo $b["id"] ?></td>
			<td><?php echo $b["name"] ?></td>
			<td><?php echo $b["number"] ?></td>
			<td><?php echo $b["email"] ?></td>
			<td><?php echo $b["address"] ?></td>
			<td><?php echo $b["qualifications"] ?></td>
			<td><?php echo $b["branch"] ?></td>
			<td><?php echo $b["semester"] ?></td>
			<td><?php echo $b["course"] ?></td>
			<td><img src="<?php echo $b["image"] ?>" style="width: 70px;height: 70px;"></td>
			
		   </tr>
		
		</table>
	</div>

</body>
</html>