<?php 
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from gwalior where id = '$id'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);






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
	<form method="post" action="gwaliorupdate.php" enctype="multipart/form-data">
		id:
		<input type="hidden" name="id" value="<?php echo $e['id']   ?>"> <br><br>
		name:
		<input type="text" name="name" value = "<?php echo $e['name']   ?>"> <br><br>
		email:
		<input type="text" name="email" value = "<?php echo $e['email']   ?>"> <br><br>
		city:
		<input type="text" name="city" value = "<?php echo $e['city']   ?>"> <br><br>
		image:
		<input type="file" name="image" value = ""> <br><br>
		<img src="<?php echo $e['image']   ?>" style= "width: 50px;height: 50px;">
		<button>UPDATE</button>
	</form>

</body> 
</html>