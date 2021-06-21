<?php 
include('../dbcon.php');
    $id= $_POST['id'];
	$nsection= $_POST['section'];
	$ntype= $_POST['type'];
	$ntitle= $_POST['title'];
	$nbody= $_POST['nbody'];
	$fnews= $_POST['fnews'];
	$imagename=$_FILES['nimg']['name'];
	$tempname=$_FILES['nimg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");
	$qry="UPDATE `latestnews` SET `section` = '$nsection', `type` = '$ntype', `title` = '$ntitle', `bodytext` = '$nbody ', `fullnews` = '$fnews', `image` = '$imagename' WHERE `id` = $id;";
	$run= mysqli_query($con,$qry);

	if($run == true)
	{
		?>
		<script>
		alert('Data update succesfully');
		window.open('updatenewsform.php?id=<?php echo $id; ?>','_self');
	   </script>
		<?php
	}
?>