<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body>

	<h1><center>Let's Start Our Qiuz</center></h1>
	<br>
	<div class="col-lg-8 m-auto d-block">
	<div style="background-color:#7db1e3" class="card"> 
		<h4 class="text-center card-header">You have to select only one answer out of  four answers.</h4>
	</div>
	<br>

<form action="result.php" method="POST">	
<?php

	require 'req.php';

	$sql1 = "SELECT * FROM question1 ORDER BY RAND()";
	$result1 = mysqli_query($conn,$sql1);

	while($row = mysqli_fetch_array($result1)){
	    
?>
	
	<div style="background-image: url('images/2.jpg');
	background-size: 850px 300px" class="card">
		<h5 style="color: #0a4986" class="card-header"> <?php echo $row['questions'] ?></h5>
	
    		
<?php
	
	$sql2 = "SELECT * FROM answer1 WHERE `ans_id` = '{$row['q_id']}' ORDER BY RAND()";
	$result2 = mysqli_query($conn,$sql2);

		while($row = mysqli_fetch_array($result2)){
?>
			<div class="card-body" style="color: #0b0a0a;" >
				<input type="radio"name="checkans[<?php echo $row['ans_id'];?>]" value="<?php echo $row['a_id'];?>">
				<?php echo $row['answers'];?>
   			</div>

<?php
}
}
?>
<br>
				
<input type="submit" name="submit" value="Submit Quiz" class="btn btn-success m-auto d-block">


</form>
</div>    	
</div>
</div> 

<br>
<div class="m-auto d-block">
	<a href="index.html" class="btn btn-primary">LOGOUT</a>
</div>

<div class="footer" align="center">
		&copy; Online Quiz Application | All Right Reserved <br> D. C. I. Madhushani | 15APC2364
	</div>

</body>
</html>

