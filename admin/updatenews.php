<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		
	}
	else
		header('location: ../login.php');	
 ?>
<?php
    include('title.php');
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post" action="updatenews.php">
 		<table align="center" style="margin-top: 20px;">
 			<tr>
	  			<th>Enter Section</th>
	  			<td><input type="number" name="lnsec" placeholder="Enter section" required="required"></td>
	  			<td><input type="submit" name="submit" value="search"></td>
  		    </tr>
 		</table>
 	</form>

 	<table align="center" width="80%" border="1" style="margin-top: 10px;">
 		<tr style="background-color: gray;height: 33px;">
 			<th>No</th>
 			<th>Section</th>
 			<th>Type</th>
 			<th>Title</th>
 			<th>Sub news</th>
 			<th>Full news</th>
 			<th>Image</th>
 			<th>Edit</th>
 		</tr>


<?php 
	if (isset($_POST['submit'])) 
	{
		include('../dbcon.php');

		$lnsection= $_POST['lnsec'];
	
		$sql="SELECT * FROM `latestnews` WHERE `section`='$lnsection'";
		$run=mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='7'>No record found</td></tr>";

		}
		else
		{
			$count=0;
			while ($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?> 
			<tr>
				<td><?php echo $count; ?></td>
	 			<td><?php echo $data['section']; ?></td>
	 			<td><?php echo $data['type']; ?></td>
	 			<td><?php echo $data['title']; ?></td>
	 			<td><?php echo $data['bodytext']; ?></td>
	 			<td><?php echo $data['fullnews']; ?></td>
	 			<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 200px;"/></td>
	 			<td><a href="updatenewsform.php?id=<?php echo $data['id']; ?>">Edit</a></td>
	 		</tr>
				<?php
			} 
		}
	}
?>
</table>
 
 </body>
 </html>