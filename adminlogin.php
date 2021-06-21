<?php 
session_start();
if (isset($_SESSION['uid'])) {
	# code...
	header('location:admin/admindashbord.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
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
	<div class="login-box">
	    <h2 align="center">Admin Login</h2>
		<form method="post" action="adminlogin.php">
			<div class="text-box">
				<i class="fa fa-user"></i>
				<input type="text" name="user" placeholder="Username" required="required">
			</div>
			<div class="text-box">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="pass" placeholder="password" required="required">
			</div>
				<input class="but" type="submit" name="login" value="Login" placeholder="Log-in">
		</form>
    </div>
</body>
</html>
	<?php
		include('dbcon.php');
		if (isset($_POST['login']))
		 {
			# code...
			$username=($_POST['user']);
			$password=($_POST['pass']);

			$qry= "SELECT * FROM admin WHERE name='$username' AND password='$password'";
			//echo $qry;
			$run= mysqli_query($con,$qry);
			$row = mysqli_num_rows($run);
			if ($row <1)
			   {
		        ?>
				<script>
					alert('Username or password not match !!');
					window.open('adminlogin.php','_self'); /*refresh page*/
				</script>
		       <?php
			    }
			else
				{
					$data = mysqli_fetch_assoc($run);
					$id = $data['id'];
					//echo "id =".$id; //for check write this line
					//session_start();
					$_SESSION['uid']=$id;
					header('location:admin/admindashbord.php'); 
				}
	     }
		
	?>


