<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PURHCASE REQUEST TRACKING SYSTEM</title>
    <link rel="stylesheet" href="unicons.iconscout.com">
	
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>


	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3">
						<span><i class="fas fa-briefcase"></i>OFFICE</span>
						<span><i class="fas fa-user-tie"></i>ADMIN</span></h6>
			          	<input class="checkbox " type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<img src="https://csu.edu.ph/img/csulogo.png" alt="CSU Logo" class="logo-img">
<<<<<<< HEAD
											<h4 class="mb-4 pb-3 ">Office Portal</h4>
											<form action="actions/action-user-login.php" method="POST" name="myForm" enctype="multipart/form-data" onsubmit="return checkForm(this);">
											<div class="form-group">
												<input type="text" name="user_name" class="form-style" placeholder="Your Username" id="user_id" autocomplete="off">
=======
											<h4 class=" pb-3 ">Student Portal</h4>
											<h3 class="text-white">Online Faculty Evaluation System</h3>
											<div class="form-group">
												<input type="text" name="student_id" class="form-style" placeholder="Your Student ID Number" id="student_id" autocomplete="off">
>>>>>>> 729ce3634590f1fe487f7e4d531d72dc3028fef1
												<i class="input-icon fa fa-id-card" aria-hidden="true" ></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon fa fa-lock" aria-hidden="true"></i>
											</div>
											<button type="submit" name="user_id" class="btn btn-primary mt-4 fa fa-sign-in" aria-hidden="true" onclick="return checkForm(this);" >Login</button>
											</form>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<img src="https://csu.edu.ph/img/csulogo.png" alt="CSU Logo" class="logo-img">
											<h4 class="mb-4 pb-3">Admin Portal</h4>
											<form action="actions/action-admin-login.php" method="POST" name="myForm" enctype="multipart/form-data" onsubmit="return checkForm(this);">
											<div class="form-group">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon fa fa-envelope" aria-hidden="true"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon fa fa-lock" aria-hidden="true"></i>
											</div>
											<button type="submit" name="admin_id" class="btn btn-primary mt-4 fa fa-sign-in" aria-hidden="true">Login</button>
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
<link rel="stylesheet" href="style/indexstyle.css">
</html>