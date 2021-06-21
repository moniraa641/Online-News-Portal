<!DOCTYPE html>
<html>
<head>
	<title>Online News Portal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--js-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
</head>
<body>	

	<?php
	include('header.php'); 
	?>
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
				<?php
					include('dbcon.php');
					//$qry = "SELECT * FROM `latestnews`";
					if(isset($_POST['searchbtn']))
					{
						$searchValue = $_POST['searchValue'];
						$qry = "SELECT * FROM latestnews WHERE type like'%$searchValue%'";
					}else
					{
						$qry = "SELECT * FROM latestnews";
					}

					$run = mysqli_query($con, $qry);
					if (mysqli_num_rows($run) < 1)
					{
						echo "No data found";
					} 
					else
					{
						while ($data = mysqli_fetch_assoc($run))
						{
				       ?>
							<div class="col-md-3">
								<div class="ser_post">
									<img class="image" src="dataimg/<?php echo $data['image']; ?>">
									<h3><?php echo $data['title']; ?></h3>
									<p><?php echo $data['bodytext']; ?></p>
									<!--<a class="btn" href="pages/<?php echo $data['pagelink']; ?>">Read More...</a>-->
									<a class="btn" href="post.php?id=<?php echo $data['id']; ?>">Read More...</a>
								</div>
							</div>
				        <?php
					    }
			    	}
				?>
			</div>
		</div>
	</section>

	<!--Services-X-->
	<!--Comment-->
	<?php
	include_once "sessionstart.php";
	if (isset($_SESSION['uid']))
	{
		?>
		<section class="comment" style="background-color: #ECEAEA;height: 150px;width: 100%;" >
		<form method="post" action="comment.php">
			<input style="width: 70%;height: 40px; margin-bottom: 20px;margin-left: 10px; margin-top: 50px;" type="text" name="comment">
			<input type="submit" name="submit" value="comment">
		</form>
		
	<div>
		<a href="comment.php" style="margin-left: 32%;text-decoration: none; font-size: 20px;">Show all comments</a>
	</div>
	</section> 
	<?php
	}
	?>
	<!--Comment-X-->
	
	<!--Portfolio-->
	<!--<section class="portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="port_title">
						<h1>Previous News</h1>
						<p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals</p>
					</div>
				</div>
			</div>--->
			<!--1st row-->
			<!--<div class="row">
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
			</div>--->
			<!--1st row-X-->
			<!--2nd row-->
			<!--<div class="row">
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
			</div>--->
			<!--2nd row-X--->
		</div>
	</section>
	<!--Portfolio-X-->
</body>
</html>
