<?php 

session_start();

	require 'req.php';	
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		footer{
			font-weight: bold;
			padding-top: 870px;
			color: black;
		}
	</style>
</head>
<body>
	<form class="login1" action="reg.php" method = "post">
	
	<?php
	if(isset($_POST['reg_btn'])){
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$u_name = $_POST['u_name']; 
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$new_password = $_POST['new_password'];
		$retype_password = $_POST['retype_password'];

		$s = "select * from registration where u_name = '$u_name'";
		$result = mysqli_query($conn,$s);
		$num = mysqli_num_rows($result);

		if($num == 1){
			echo "Username Already Taken";
		}

		elseif ($new_password != $retype_password) {
			echo "Two Passwords do not matched";
		}else{

			$query = "insert into registration (first_name , last_name, u_name, email, contact_no, new_password, retype_password) values ('$first_name', '$last_name', '$u_name', '$email', '$contact_no', '$new_password', '$retype_password')";

			mysqli_query($conn,$query);
			echo "You have Registered Successfully";
				}		
	}
?>

	<div class="glass">
			<img src="images/register.jpg" class="user">
			<h3>Create New Account</h3>
		</div>

		<div class="inputBox">
				<label style="color: #0066cb">First Name*</label>
				<input type="text" name="first_name" placeholder="Enter your firstname" required />
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">Last Name*</label>
				<input type="text" name="last_name" placeholder="Enter your lastname" required/>
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">Username*</label>
				<input type="text" name="u_name" placeholder="Enter your username" required />
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">E mail*</label>
				<input type="email" name="email" placeholder="Enter your email" required/>
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">Contact No*</label>
				<input type="text" name="contact_no" placeholder="Enter your contactno" required/>
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">New Password*</label>
				<input type="password" name="new_password" placeholder="Enter a password" required/>
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">Retype New Password* </label>
				<input type="password" name="retype_password" placeholder=" Retype your password" required/>
			</div>

				<input type="submit" name="reg_btn" value="REGISTER" class="btn" />
			
				<button class="button"><a style="text-decoration: none; color: white" href="index1.html">CANCEL</a></button>
			
			
			<p align="center">
				Already a user <a href = "login.php" text-color = "red">Login here </a>
			</p>


</form>


<footer align="center">
		&copy; Online Quiz Application | All Right Reserved <br> D. C. I. Madhushani | 15APC2364
</footer>

</body>
</html>

