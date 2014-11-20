<?php

	require_once(__DIR__ . "/Database.php");
	//displays the post page
	$path = "/blogproject/"; 
	//a variable that stores the string "localhost"
	$host = "localhost"; 
	//a variable that stores the string "root" 			//database.php contnents now integrated into config.php file
	$username = "root"; 
	//a variable that stores the string "root"
	$password = "root"; 
	//a variable that stores the string "blog_db"
	$database = "blog_db";
	$connection = new Database($host, $username, $password, $database);
?>