<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		
	}
	else
		header('location: ../adminlogin.php');	
 ?>
 <?php
include('title.php');
include('../dbcon.php');

 $id= $_GET['id'];
 $sql="SELECT * FROM `latestnews` WHERE `id`='$id'";

 $run=mysqli_query($con,$sql);
 $data= mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<form method="post" action="updateEditnews.php" enctype="multipart/form-data">
  
		 <table border="1" align="center" style="width: 70%; margin-top: 40px;">
	  		<tr>
	  			<th>Section</th>
	  			<td><input style="width: 99.50%;" type="text" name="section" value="<?php echo $data['section']; ?>" required="required"></td>
	  		</tr>
	  		<tr>
	  			<th>Type</th>
	  			<td><input style="width: 99.50%;" type="text" name="type" value="<?php echo $data['type']; ?>" required="required"></td>
	  		</tr>
	  		<tr>
	  			<th>Title</th>
	  			<td><input style="width: 99.50%;" type="text" name="title" value="<?php echo $data['title']; ?>" required="required"></td>
	  		</tr>
	  		<tr>
	  			<th>News body</th>
	  			<td><input style="width: 99.50%;height: 30px" type="text" name="nbody" value="<?php echo $data['bodytext']; ?>" required="required"></td>
	  		</tr>
	  		<tr>
	  			<th>Full news</th>
	  			<td><input style="width: 99.50%;height: 30px" type="text" name="fnews" value="<?php echo $data['fullnews']; ?>" required="required"></td>
	  		</tr>
	  		<tr>
	  			<th>Image</th>
	  			<td><input type="file" name="nimg" placeholder="Enter image" required="required"></td>
	  		</tr>
	  		<tr>	
	  			<td colspan="2" align="center">
	  				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	  				<input type="submit" name="submit" value="Submit"></td>
	  		</tr>
	  	</table>
  	</form>
  </body>
  </html>