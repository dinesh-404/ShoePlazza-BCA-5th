<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'project';
	$connect = mysqli_connect($host, $user, $pass, $database);
	if(!$connect){
		 die("connection error".mysqli_connect_error());
	}
?>