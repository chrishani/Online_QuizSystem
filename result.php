<?php
	session_start();
	require 'req.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="css/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#footer{
			margin-top: 100px;
			font-weight: bold;
		}

	</style>
	
</head>
<body id="body1">
	
	<div class="container text-center">
		<br><br>
		<h1 class="text-center text-success">Online Qiuz Final Results</h1>
		<br>
	
	<br><br>
	<table class="table text-center table-bordered table-hover">
		<tr>
			<th colspan="2" class="bg-dark"><h2 style="background-color: #e11c10" class="text-white">Results</h2></th>
		</tr>
		<tr>
			<td>Questions Attempted</td>
				<?php
					$result = 0;
					if (isset($_POST['submit'])) {
						if (!empty($_POST['checkans'])) {
							$count = count($_POST['checkans']);
				?>
			<td>			
				<?php
					echo "Out of 5,you have Selected ".$count."options";
				?>	
			</td>	
				<?php
					$selected = $_POST['checkans'];
					#print_r($selected);

					$q = "SELECT * FROM question1";
					$query = mysqli_query($conn,$q);
					$i=1;
					while ($row = mysqli_fetch_array($query)) {
					#print_r($row['ans_id']);
					$checked = $row['ans_id'] == $selected[$i];
				
					if ($checked) {
						$result++;
					}else{

						}
							$i++;
						}
				?>
		<tr>
			<td>Your Total score</td>
			<td colspan="2">
				<?php
					echo "Your score is ".$result;
					}else{
						echo "<b>Please Select at least one option.</b>";
					}
					}
				?>
			</td>
		</tr>
	</table>

	<div class="m-auto d-block">
		<a href="index.html" class="btn btn-primary">LOGOUT</a>
	</div>
	<br>
	<div class="m-auto d-block">
		<a href="question.php" class="btn btn-primary">Back</a>
	</div>
</div>

	<footer align="center">
		&copy; Online Quiz Application | All Right Reserved <br> D. C. I. Madhushani | 15APC2364
	</footer>
			
</body>
</html>