<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'ShoePlazza';
	$connect = mysqli_connect($host, $user, $pass, $database) or die(mysqli_connect_error($connect));
	
?>