<?php 
include "dbcon.php";
$id = $_GET['id'];
// echo $id;
// die();

$data = "select * from itm where id = '$id' ";
$result = mysqli_query($con,$data);
$b = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);


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
<fieldset>
<form method="post" action="itmupdate.php">
	<input type="text" name="id" value="<?php echo $b['id']  ?>">
	name :
	<input type="" name="u" value="<?php echo $b["name"]?>">
	email : 
	<input type="" name="v" value="<?php echo $b["email"]?>">
	city :
	<input type="" name="w" value="<?php echo $b["city"]?>">
	address :
	<input type="" name="x" value="<?php echo $b["address"]?>">
	<button class="submit">Update</button>
</form>
</fieldset>
</center>


</body>
</html>







