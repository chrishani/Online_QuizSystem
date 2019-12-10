<?php 

session_start();

	require 'req.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		footer{
			font-weight: bold;
			padding-top: 560px;
			color: #2160f3;
		}
	</style>
</head>
<body>

	<form action="login.php" method = "POST" class="login">

		<?php	
		if(isset($_POST['submit'])){
			$u_name = $_POST['u_name']; 
			$new_password = $_POST['new_password'];
			$mysql_error = "fail";

			$result =mysqli_query($conn,"select * from registration where u_name = '$u_name' && new_password = '$new_password' ") or die ("Faild to query database ".$mysql_error);
		
			$row = mysqli_fetch_array($result);

			if($row["u_name"] == $u_name && $row["new_password"]){
			
				//echo "Login Success";
				header('location:question.php');
			}else{
				echo "Faild to Login";
			
		}
	}

		
	
?>
	

		<div class="glass">
			<img src="images/login.jpg" class="user">
			<h3>Login Here</h3>
		</div>

		<div class="inputBox">
				<label style="color: #0066cb">Username</label>
				<input type="text" name="u_name" placeholder="Enter your username here" />
			</div>
			<div class="inputBox">
				<label style="color: #0066cb">Password</label>
				<input type="password" name="new_password" placeholder="Enter your password here" />
			</div>
	
				<input type="submit" name="submit" value="LOGIN"/>
			
				<button class="button"><a style="text-decoration: none; color: white" href="index1.html">CANCEL</a></button>
			
			
			<p align="center">
				New User Please <a href="reg.php">Register Here</a>
			</p>

	</form>

	<footer align="center">
		&copy; Online Quiz Application | All Right Reserved <br> D. C. I. Madhushani | 15APC2364
	</footer>

</body>
</html>