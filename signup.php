<?php 
/*session_start();
if (isset($_SESSION['uid'])) {
	# code...
	header('location:admin/admindashbord.php');
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
		<h2 align="center">Signup</h2>
		<form method="post" action="signup.php">
			<div class="text-box">
				<i class="fa fa-user"></i>
				<input type="text" name="user" placeholder="Username" required="required">
			</div>
			<div class="text-box">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="email" name="email" placeholder="Email" required="required">
			</div>
			<div class="text-box">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="pass" placeholder="Password" required="required">
			</div>
			<div class="text-box">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="conpass" placeholder="Cofirm Password" required="required">
			</div>
				<input class="but" type="submit" name="submit"  value="Submit" placeholder="Log-in">	
		</form>
		<p style="margin-top: 20px;">Have any account??<a href="login.php" style="color: #fff;">Login here</a></p>
	</div>
</body>
</html>
	<?php
		include('dbcon.php');
		if (isset($_POST['submit']))
		 {
			# code...
			$username=($_POST['user']);
			$email=($_POST['email']);
			$password=($_POST['pass']);
			$conpassword=($_POST['conpass']);
			if ($password == $conpassword) {
				# code...
				$qry="INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
				$run= mysqli_query($con,$qry);
				if (!$run) {
					# code...
					echo "<script>alert('Something wrong !!');window.open('signup.php','_self');</script>";
				}
				else{
					//echo "insirt successfully";
					header('location:login.php');
				}
			}
			else{
				echo "<script>alert('Username or password not match !!');window.open('signup.php','_self');</script>";
			}
		   /* else
			{
				$data = mysqli_fetch_assoc($run);
				$id = $data['id'];
				//echo "id =".$id; //for check write this line
				//session_start();
				$_SESSION['uid']=$id;
				header('location:admin/admindashbord.php'); 
			}*/
	     }
		
	?>


