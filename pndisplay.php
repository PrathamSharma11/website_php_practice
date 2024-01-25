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
			<th>Image</th>
			<th>Actions</th>
		    </tr>
            
            <?php
            

            include "dbcon.php";
            $data = "select * from pn order by id desc";
            $result = mysqli_query($con,$data);
            // echo "<pre>";
            // print_r($result);
            // die();
            $a = mysqli_fetch_array($result);
            while($a = mysqli_fetch_array($result)){

            







            ?>







		    <tr>
			<td><?php echo $a["id"] ?></td>
			<td><?php echo $a["name"] ?></td>
			<td><?php echo $a["number"] ?></td>
			<td><?php echo $a["email"] ?></td>
			<td><?php echo $a["address"] ?></td>
			<td><?php echo $a["qualifications"] ?></td>
			<td><?php echo $a["branch"] ?></td>
			<td><?php echo $a["semester"] ?></td>
			<td><?php echo $a["course"] ?></td>
			<td><img src="<?php echo $a["image"] ?>" style= "width: 70px;height: 70px;"></td>
			<td>
				<a href="pnview.php?id=<?php echo $a["id"] ?>" class="btn btn-info">View</a>
				<a href="pnedit.php?id=<?php echo $a["id"]?>" class="btn btn-warning">Edit</a>
				<a href="pndelete.php?id=<?php echo $a["id"] ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
	    }

		?>
			
		</table>
	</div>

</body>
</html>