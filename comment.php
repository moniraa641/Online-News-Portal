<?php 
include('dbcon.php');
?>
<?php 
		if (isset($_POST['submit']))
		{
			$comment= $_POST['comment'];
			$qry="INSERT INTO `comment`(message) VALUES ('$comment')";
			//echo $qry;
			$run= mysqli_query($con,$qry);
		if($run == true)
		{
		?>
			<!--<script>
			alert('Data inseart succesfully');
		   </script>-->
		<?php
		}
		}
		?>
<div>
	<?php
	$qry="SELECT * FROM `comment`";
	$run = mysqli_query($con, $qry);
	if (mysqli_num_rows($run) < 1)
		{
			echo "No comment found";
		}
	else
	{
		while ($data = mysqli_fetch_assoc($run))
			{
		       ?>
		       <div>
		       	<p><?php echo $data['message']; ?></p>
		       </div>
		       <?php
	       } 
	} 
?>
</div>
