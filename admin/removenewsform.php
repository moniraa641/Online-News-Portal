<?php 
    include('../dbcon.php');

    $id=$_REQUEST['id'];
	$qry= "DELETE FROM `latestnews` WHERE `id`='$id'";
	echo $qry;
	$run= mysqli_query($con,$qry);

	if($run == true)
	{
		?>
		<script>
		alert('Data delete succesfully');
		window.open('removenews.php','_self');
	   </script>
		<?php
	}
	
?>