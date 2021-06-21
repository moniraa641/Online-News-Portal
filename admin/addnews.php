<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		
	}
	else
		header('location: ../adminlogin.php');	
 ?>
<!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	 <?php
	  include('title.php');
	 ?>
  	<form method="post" action="addnews.php" enctype="multipart/form-data">

  
	  	<?php
	       include('newstable.php');
	    ?>
  	</form>
  </body>
  </html>

  <?php 
	if (isset($_POST['submit'])) 
	{
		# code...
		include('../dbcon.php');

		$nsection= $_POST['section']; 
		$ntype= $_POST['type'];
		$ntitle= $_POST['title'];
		$nbody= $_POST['nbody'];
		$fnews= $_POST['fnews'];
		$imagename=$_FILES['nimg']['name'];
		$tempname=$_FILES['nimg']['tmp_name'];

		move_uploaded_file($tempname,"../dataimg/$imagename");
		$qry="INSERT INTO `latestnews`(`section`, `type`, `title`, `bodytext`, `fullnews`, `image`) VALUES ('$nsection', '$ntype', '$ntitle', '$nbody', '$fnews', '$imagename')";
		$run= mysqli_query($con,$qry);

		if($run == true)
		{
			?>
			<script>
			alert('Data inseart succesfully');
		   </script>
			<?php
		}
    }

?>