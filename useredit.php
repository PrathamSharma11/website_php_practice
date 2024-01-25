<?php 

include "dbcon.php";
$id = $_GET['id'];
$data = "select * from user where id = '$id'";
$result = mysqli_query($con,$data);
$b = mysqli_fetch_array($result);
//print_r($b);




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
        <h1>EDIT FORM</h1>
		<br><br>
	<form method="post" action="userupdate.php">
	    <input type="text" name="id" value="<?php echo $b['id'] ?>">                
		username:
		<input type="text" name="u" value="<?php echo $b['username'] ?>">
		<br><br>
		password:
		<input type="text" name="p" value="<?php echo $b['password'] ?>">
		<br><br>
		<button class="submit">Update</button>
	</form>
    </center>

</body>
</html>