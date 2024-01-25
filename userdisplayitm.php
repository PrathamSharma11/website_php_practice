<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<!--------------------- navbar starts ----------------------->
 <nav class="navbar navbar-expand-lg navbar-light bg-info">
   <div class="container-fluid">
	<a class="navbar-brand" href="#">ITM</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
	  <ul class="navbar-nav ms-auto">
	    <li class="nav-item">
	    <a class="nav-link active" aria-current="page" href="#">Home</a>
	    </li>
	    <li class="nav-item">
	    <a class="nav-link" href="get.php">Add Data</a>
	    </li>
	    <li class="nav-item">
	    <a class="nav-link" href="userdisplay.php">Display Data</a>
	    </li>

	  </ul>
	</div>
   </div>
  </nav>
<!---------------------- navbar ends ----------------------------->
<br><br><br>
<div class="container">
	<table class="table table-bordered text-center bg-light">
		<tr>
			<th colspan="6">Admission Info</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
<?php
		include "dbcon.php";
		$data ="select * from itm order by id desc";
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
			<td><?php echo $a["email"] ?></td>
			<td><?php echo $a["city"] ?></td>
			<td><?php echo $a["address"] ?></td>
			<td>
				<a href="itmview.php?id=<?php echo $a["id"] ?>" class="btn btn-info">View</a>
				<a href="itmedit.php?id=<?php echo $a["id"] ?>" class="btn btn-warning">Edit</a>
				<a href="itmdelete.php?id=<?php echo $a["id"] ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
    }
		?>
		
		
	</table>
</div>

</body>
</html>