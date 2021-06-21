<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('nevbar.php'); 
	?>
	<?php
	if (isset($_GET['id']))
	{
		# code...
		include('../dbcon.php');
		$id=$_GET['id'];
		$qry="SELECT * FROM `latestnews` WHERE `id`=$id";
		$run=mysqli_query($con,$qry);
		if (mysqli_num_rows($run)>0)
		{
			# code...
			$row=mysqli_fetch_assoc($run);
			?>
			<img src="../dataimg/<?php echo $row['image']; ?>">
			<div class="ser_sec_title">
				<h3><?php echo $row['title']; ?></h3>
				<p><?php echo $row['bodytext']; ?></p>
				<p><?php echo $row['fullnews']; ?></p>
			</div>
			<?php
		}
		else{
			header("location:../index.php");
		}
	}
	 ?>
	

</body>
</html>