<!DOCTYPE html>
<html>
<head>
	<title>Online News Portal</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!--js-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
</head>
<body>
	<!--<div class="navbar-fixed">-->
		<section class="top_menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-md top_menu_item">
								  <a class="navbar-brand brand_top_menu" href="#"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>Dhaka,Bangladesh</a>
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
									    <span class="navbar-toggler-icon"></span>
									</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
							    <ul class="navbar-nav top_nav_ul">
							      <li class="nav-item">
							        <a class="nav-link" href="#"><i class="far fa-envelope" aria-hidden="true"></i>ww.onlinenews@gmail.com</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#"><i class="fas fa-phone-alt" aria-hidden="true"></i>01799675512</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#"><i class="fas fa-globe" aria-hidden="true"></i>24/7 News</a>
							      </li>    
							    </ul>
							</div>
							<?php
							include_once "../sessionstart.php";
							if (!isset($_SESSION['uid'])) 
							{
								?>
								<div class="signup">
								<p align="right" class="signupbtn" style="margin-right: 10px;"><a href="../signup.php">Signup</a></p>
							</div>
							<div class="login">
								<p align="right" class="loginbtn" style="margin-right: 10px;"><a href="../login.php">Login</a></p>
							</div>
							<?php

							}
							else
							{
							?>
								 <div class="login">
								    <p align="right" class="loginbtn" style="margin-right: 10px;"><a href="../logout.php">Logout</a></p>
							     </div>
							<?php
							}
							?>  
			            </nav>
					</div>
				</div>
			</div>		
	   </section>
	<!--</div>-->
<!-- Menu-->
	<section class="menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
						  <a class="navbar-brand" href="#"></a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
						    <ul class="navbar-nav">
						    	 <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
							      <li class="nav-item"><a class="nav-link" href="politics.php">Politics</a></li>
								  <li class="nav-item"><a class="nav-link" href="economic.php">Economic</a></li>
								  <li class="nav-item"><a class="nav-link" href="bangladesh.php">Bangladesh</a></li>
								  <li class="nav-item"><a class="nav-link" href="international.php">International</a></li>
								  <li class="nav-item"><a class="nav-link" href="sports.php">Sports</a></li>
								  <li class="nav-item"><a class="nav-link" href="trade.php">Trade</a></li>
								  <li class="nav-item"><a class="nav-link" href="job.php">Job</a></li>   
						    </ul>
						</div>  
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Menu-X-->

</body>
</html>