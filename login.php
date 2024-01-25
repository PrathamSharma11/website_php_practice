<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<!--------------nav bar start------------><nav class="navbar navbar-expand-lg  bg-warning ms-auto btn-warning m-auto ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarText" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="internship.php">Add Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logindisplay.php">Display Data</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav><!---------navbarend------><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 " >
				<div class="card shadow-lg" >
					<h2 class="text-center text-info">Login</h2>
					<?php 
					session_start();


					if(isset($_SESSION['error'])){
						echo '<div class="alert alert-warning alert-dismissible fade show 		col-lg-12" role="alert">
								'.$_SESSION['error'].'
  								
							</div>';
						unset($_SESSION['error']);



					}




					?>
					<div class="card-body">
						<form method="post" action="logininsert.php">
							<div class="mb-3">
								<label>Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="mb-3">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<button class="btn btn-info">Login</button>
						</form>
						<a href="registration.php" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#aa" style="float:right;">Registration</a>
						
					</div>
				</div>
				
			</div>
			<div class="col-md-2">
				
			</div>
			
		</div>


		<!-- Button trigger modal -->
<div class="modal fade" id="aa">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration Form</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body">
      	<form method="post" action="registrationinsert.php">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button class="btn btn-info">Submit</button>  
        </form>
        



      </div><!-- modal body--->
  </div><!---model dialog--- end=--->
</div>
<!---modal end--->     




	</div><!--container end--->


</body>
</html>