<?php

	require_once(__DIR__ . "/../model/database.php"); //gives access to variables listed below

	$connection = new mysqli($host, $username, $password, $database);  //creates connection to database and stores the connection in the $connection variable.

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  //stores title and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	//stores post and makes it harder to hack

	echo "<p> Title: $title </p>";  //echos out title
	echo "<p> Post: $post </p>";  //echos out post

	$connection -> close();