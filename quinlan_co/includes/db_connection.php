<?php
	define("DB_SERVER","localhost");
	define("DB_USER","widget_cms");
	define("DB_PASS","krishna");
	define("DB_NAME","widget_corp");
	//Establish the connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "krishna";
	$dbname = "widget_corp";
	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	
	if(mysqli_connect_errno()){
		die("Database Connection Failed: ".
				mysqli_connect_error().
				"(".mysqli_connect_errno().")");
	}
?>