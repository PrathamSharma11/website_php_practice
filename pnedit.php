<?php
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from pn where id = '$id'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);



?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PN Infosys</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!----JavaScript Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>

<body>
	<div class="container">
		<div class="row">
		<div class="col-md-12 bg-white">
 				<br>
 				<h3 class="text-info text-center">Registration Form 2021</h3>
 				<form method="post" action="pnupdate.php">
 					<div class="form-group">
         	        <input type="hidden" name="id" value="<?php echo $e['id']?>">
			        <label class="text-dark">Student Name:</label>
			        <input type="text" name="name" placeholder="Enter Name"class="form-control" value="<?php echo $e['name'] ?>">



                   </div>



                  <div class="form-group">

         	      <label class="text-dark">Mobile Number:</label>
         	      <input type="Number" name="number" placeholder="Enter Number" class="form-control" value="<?php echo $e['number'] ?>">
         	

                  </div>


                 <div class="form-group">
         	     <label class="text-dark">Email:</label>
         	     <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo $e['email'] ?>">
         	


                 </div>


                <div class="form-group">
         	    <label class="text-dark">Address:</label>
         	    <input type="text" name="address" class="form-control" value="<?php echo $e['address'] ?>">
         	

                </div>
                <div class="form-group">
        	    <label class="text-dark">Qualifications:</label>
        	    <select name="quali" class="form-control" value="<?php echo $e['qualifications'] ?>">
        		
        		<option>Btech</option>
        		<option>Mtech</option>
        		
        	    </select> 
        	
                </div>



               <div class="form-group">
        	    <label class="text-dark">Branch:</label>
        	    <select name="branch" class="form-control" value="<?php echo $e['branch'] ?>">
        		
        		<option>CS</option>
        		<option>IT</option>
        		<option>Mech</option>
        		<option>EC</option>
        		
        	   </select> 
        	
              </div>


                <div class="form-group">
        	    <label class="text-dark">Semester:</label>
        	    <select name="sem" class="form-control" value="<?php echo $e['semester'] ?>">
        		
        		<option>3rd</option>
        		<option>5th</option>
        		<option>7th</option>
        		<option>Graduate</option>
        		
        	   </select> 
        	
              </div>


        
        	    <div class="form-group">
        	    <label class="text-dark">Internship Course:</label>
        	    <select name="intern" class="form-control" value="<?php echo $e['course'] ?>">
        		
        		<option>Web Designing</option>
        		<option>Web Development</option>
        		<option>Python</option>
        		<option>Django</option>
        		
        	    </select> 
        	
                </div><br>
                Image:
                <input type="file" name="image"><br><br>
                <img src="<?php echo $e['image']?>" style="width: 70px;height: 70px;">

               <input type="submit" name="" value="Update" class="btn btn-info" style="position: relative; top: 15px;">


         
 					
 				</form>
 			</div>
 		</div>
 		<!----------div class row ends--------------->
 	</div>



	
</body>