<?php 
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from mits where id = '$id'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);
$a = $e['education'];
$ed = explode(',',$a);
// echo <"pre">;
// print_r($ed);
// die();







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
	<form method="post" action="mitsinsert.php">
                
		Name:<input type="text" name="name" value="<?php echo $e['name']    ?>">
   
		<br>
		<br>
		College:<select name="college">
			<option value="select">Select</option>
			<option value="rjit"

                     <?php 
                     if ($e['college'] == 'rjit'){
                     	echo "selected";
                     }



                    ?>

			>RJIT</option>
			<option value="mpct"

			<?php 
                     if ($e['college'] == 'mpct'){
                     	echo "selected";
                     }



                    ?>






			>mpct</option>
			<option value="itm"
			<?php 
                     if ($e['college'] == 'itm'){
                     	echo "selected";
                     }



                    ?>




			>itm</option>
			<option value="jaincollege"
			<?php 
                     if ($e['college'] == 'jaincollege'){
                     	echo "selected";
                     }



                    ?>



			>jain college</option>
		    </select>
			<br>
			<br>
              Gender:<input type="radio" name="gender" value="male"
              <?php 

              if ($e['gender'] == 'male') {
              	echo "checked";
              }



              ?>



              >Male
	           <input type="radio" name="gender" value="female"
	           <?php 

              if ($e['gender'] == 'female') {
              	echo "checked";
              }



              ?>




	           >FeMale
	           <input type="radio" name="gender" value="other"
	           <?php 

              if ($e['gender'] == 'other') {
              	echo "checked";
              }



              ?>




	           >other
               <br>
               <br>
              Education:<input type="checkbox" name="education[]" value="mca"
              <?php
              if(in_array('mca', $ed)){
              	echo "checked";
              }



              ?>


              >MCA
              <input type="checkbox" name="education[]" value="ca"
              <?php
              if(in_array('ca', $ed)){
              	echo "checked";
              }



              ?>



              >CA      
               <input type="checkbox" name="education[]" value="ma"
               <?php
              if(in_array('ma', $ed)){
              	echo "checked";
              }



              ?>


               >MA
               <input type="checkbox" name="education[]" value="bba"
               <?php
              if(in_array('mca', $ed)){
              	echo "checked";
              }



              ?>



               >BBA
              <br><br>

        

        
		<input type="submit" name="a" value="Submit">
		


	</form>

</body> 
</html>