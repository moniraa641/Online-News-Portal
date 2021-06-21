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
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="deshbord">
		<table border="1" align="center" style="width: 50%;">
			<tr style="height: 32px;">
				<td>1.</td>
				<td><a href="addnews.php">Add News</a></td>
			</tr>
			<tr>
				<td>2.</td>
				<td><a href="updatenews.php">Update News</a></td>
			</tr>
			<tr>
				<td>3.</td>
				<td><a href="removenews.php">Remove News</a></td>
			</tr>
		</table>
	</div>
</body>
</html>

