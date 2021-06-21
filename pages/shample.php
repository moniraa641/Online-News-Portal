<!DOCTYPE html>
<html>
<head>
	<title>News Portal</title>
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
	<!--<section class="top_menu">
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
						</div>-->
						<?php
						//include_once "sessionstart.php";
						include('header.php');
						if (!isset($_SESSION['uid'])) 
						{
							?>
							<!--<div class="signup">
							<p align="right" class="signupbtn" style="margin-right: 10px;"><a href="signup.php">Signup</a></p>
						</div>
						<div class="login">
							<p align="right" class="loginbtn" style="margin-right: 10px;"><a href="login.php">Login</a></p>
						</div>-->
						<?php

						}
						else{
							?>
								<!--<div class="login">
							    <p align="right" class="loginbtn" style="margin-right: 10px;"><a href="logout.php">Logout</a></p>
						</div>-->
						<?php

						}
						?>  
		            </nav>
				</div>
			</div>
		</div>
	</section>
<!-- Menu-->
	<!--<section class="menu">
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
	</section>-->
	<!-- Menu-X-->

	<!--Selider-->
	<section class="selider">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
			<ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			</ul>
		  
		  <!-- The slideshow -->
		   <div class="carousel-inner main_slide_cover">
			    <div class="carousel-item active">
			      <img src="image/news2.png" alt="Los Angeles" width="1100" height="500">
			      <div class="carousel-caption carousel_caption_post">
			      	<h1>Online News Portal</h1>
			      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="image/news3.jpg" alt="Chicago" width="1100" height="500">
			      <div class="carousel-caption carousel_caption_post">
				      <h1>Online News Portal</h1>
				      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="image/news7.jpg" alt="New York" width="1100" height="500">
			        <div class="carousel-caption carousel_caption_post">
				      <h1>Online News Portal</h1>
				      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			        </div>
			    </div>
		    </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</section>
	<!--Selider-X-->	
	<!--<section class="top_menu">
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
						<div class="signup">
							<p align="right" class="signupbtn" style="margin-right: 10px;"><a href="signup.php">Signup</a></p>
						</div>
						<div class="login">
							<p align="right" class="loginbtn" style="margin-right: 10px;"><a href="login.php">Login</a></p>
						</div>  
		            </nav>
				</div>
			</div>
		</div>
	</section>-->
<!-- Menu-->
	<!--<section class="menu">
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
							      <li class="nav-item"><a class="nav-link" href="">Politics</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Economic</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Bangladesh</a></li>
								  <li class="nav-item"><a class="nav-link" href="">International</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Sports</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Trade</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Job</a></li>
								  <li class="nav-item"><a class="nav-link" href="">Shample</a></li>   
						    </ul>
						</div>  
					</nav>
				</div>
			</div>
		</div>
	</section>-->
	<!-- Menu-X-->

	<!--Selider-->
	<!--<section class="selider">
		<div id="demo" class="carousel slide" data-ride="carousel">-->

		  <!-- Indicators -->
			<!--<ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			</ul>-->
		  
		  <!-- The slideshow -->
		   <!--<div class="carousel-inner main_slide_cover">
			    <div class="carousel-item active">
			      <img src="../image/news2.png" alt="Los Angeles" width="1100" height="500">
			      <div class="carousel-caption carousel_caption_post">
			      	<h1>Online News Portal</h1>
			      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="../image/news3.jpg" alt="Chicago" width="1100" height="500">
			      <div class="carousel-caption carousel_caption_post">
				      <h1>Online News Portal</h1>
				      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="../image/news7.jpg" alt="New York" width="1100" height="500">
			        <div class="carousel-caption carousel_caption_post">
				      <h1>Online News Portal</h1>
				      	<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
			        </div>
			    </div>
		    </div>-->
		  
		  <!-- Left and right controls -->
		  <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</section>-->
	<!--Selider-X-->
	<!--Services-->
	<section class="service">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="ser_sec_title">
						<h1>Latest News</h1>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Section 00 -->
				<div class="col-md-3">
					<div class="ser_post">


						<?php 
	include('../dbcon.php');

	//$lnsection= $_POST['lnsec'];

	$qry="SELECT * FROM `latestnews`";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
		//echo "<tr><td colspan='5'>No record found</td></tr>";
		echo"No data found";

	}
	else
	{
		$count=0;
		while ($data=mysqli_fetch_assoc($run))
		{
			$count++;
			//if ($count==1) {
				# code...
			
			?>



				<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
				<!--<i class="fa fa-wrench" aria-hidden="true"></i>-->
				<h3>Service 1</h3>
				<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
				<a class="btn" href="">Read More...</a>
			</div>
			    </div>
			    <?php
			    //}
			?>
			    <!-- Section 00-X -->
			    <!-- Section 01 -->
				<div class="col-md-3">
					<div class="ser_post">
						<?php 
						//elseif ($count==2) {
							# code...
						?>
						<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
						<!--<i class="fa fa-wrench" aria-hidden="true"></i>-->
						<h3>Media Release: Sir Lanka in Bangladesh, 2021-Itineary</h3>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
						<a class="btn" href="">Read More...</a>
				   </div>
				</div>
				<?php
				//}
			?>
				<!-- Section 01-X -->
				<!-- Section 02 -->
				<?php //else ?>
				<div class="col-md-3">
					<div class="ser_post">
						<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
						<!--<i class="fa fa-wrench" aria-hidden="true"></i>-->
						<h3>Service 3</h3>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
						<a class="btn " href="">Read More...</a>
				    </div>
				</div>
				<!-- Section 01-x -->
				<!-- Section 02 -->
				<div class="col-md-3">
					<div class="ser_post">
						<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
						<i></i>
						<h3>Service 4</h3>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
						<a class="btn" href="">Read More...</a>
				    </div>
				</div>
				<div class="col-md-3">
					<div class="ser_post">
						<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
						<!--<i class="fa fa-wrench" aria-hidden="true"></i>-->
						<h3>Media Release: Sir Lanka in Bangladesh, 2021-Itineary</h3>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
						<a class="btn " href="">Read More...</a>
				    </div>
				</div>
			</div>
		</div>
	 </section>
	<!--Services-X-->
	<!--Portfolio-->
	<section class="portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="port_title">
						<h1>Previous News</h1>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
					</div>
				</div>
			</div>
			<!--1st row-->
			<div class="row">
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/pnews.jpg">
						<div class="port_post_text">
							<h1>Post header</h1>
							<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients</p>
							<a class="btn btn-light btn-sm" href="#">Read More...</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/pnews1.jpg">
							<div class="port_post_text">
							<h1>Post header</h1>
							<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients</p>
							<a class="btn btn-light btn-sm" href="#">Read More...</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/pnews2.jpg">
							<div class="port_post_text">
							<h1>Post header</h1>
							<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients</p>
							<a class="btn btn-light btn-sm" href="#">Read More...</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/bsnews.jpg">
						<div class="port_post_text">
							<h1>Post header</h1>
							<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients</p>
							<a class="btn btn-light btn-sm" href="#">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<!--1st row-X-->
			<!--2nd row-->
			<div class="row">
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/bsnews.jpg">
						<div class="port_post_text">
							<h1>Post header</h1>
							<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients</p>
							<a class="btn btn-light btn-sm" href="#">Read More...</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/service2.jpg">
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/service3.jpg">
					</div>
				</div>
				<div class="col-md-3">
					<div class="port_post">
						<img src="image/service1.jpg">
					</div>
				</div>
			</div>
			<!--2nd row-X--->
		</div>
	</section>
	<!--Portfolio-X-->
	<?php
		} 
	}

?>

</body>
</html>

<?php  ?>