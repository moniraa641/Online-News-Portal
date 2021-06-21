<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<?php
	include('nevbar.php'); 
	?>
	<!--Services-->
	<section class="service">
		<div class="container-fluid">
			<div class="row">
				<?php
				   $type='Trade';
					include('../dbcon.php');
					$qry = "SELECT * FROM `latestnews` WHERE `type`LIKE '%$type%'";
					$run = mysqli_query($con, $qry);
					if (mysqli_num_rows($run) < 1)
					{
						echo "No latest trade news";
					} 
					else
					{
						$count = 0;
						while ($data = mysqli_fetch_assoc($run))
						{
				       ?>
							<div class="col-md-3">
								<div class="ser_post">
									<img class="image" src="../dataimg/<?php echo $data['image']; ?>">
									<h3><?php echo $data['title']; ?></h3>
									<p><?php echo $data['bodytext']; ?></p>
									<!--<p><?php echo $data['fullnews']; ?></p>-->
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
</body>
</html>