<?php 
	session_start();
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'kineu';

	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	if ( mysqli_connect_errno() ) {
	
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}
	
	error_reporting(0); //Убираем вывод предупреждений 
?>