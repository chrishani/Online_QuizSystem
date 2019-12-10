	
<?php

	$conn_error = "Could not Connected";
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'online_q&a';

	$conn = mysqli_connect($host, $user, $pass) or die ($conn_error);
	//echo "Connected";
	mysqli_select_db($conn, $db) or die ($conn_error);
	//echo "Connected";

?>	