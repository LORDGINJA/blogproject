<?php 
	//gives access to database
	require_once(__DIR__ . "/../model/config.php");
	//stores username and filters input
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	//stores username and filters input
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//selects proper user from database
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM username = '$username' ");

	if(!$query){
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}