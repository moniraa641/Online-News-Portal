<?php 
include_once "sessionstart.php";
if (isset($_SESSION['uid'])) {
	# code...
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
</head>
<body>
	<a href="adminlogin.php" style="float: right; margin-right: 30px; color: #fff; font-size: 20px;">Admin Login</a>
	<div class="login-box">
		<h1>Login</h1>
	<!--<h2 align="center">Login</h2>-->
	
		<form method="post" action="login.php">
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
		<p style="margin-top: 20px;">Don't have any account?<a href="signup.php" style="color: #fff;">Signup here</a></p>
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

			$qry= "SELECT * FROM user WHERE username='$username' AND password='$password'";
			//echo $qry;
			$run= mysqli_query($con,$qry);
			$row = mysqli_num_rows($run);
		if ($row <1)
		   {
	        ?>
			<script>
				alert('Username or password not match !!');
				window.open('login.php','_self'); /*refresh page*/
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
				header('location:index.php'); 
			}
	     }
		
	?>


