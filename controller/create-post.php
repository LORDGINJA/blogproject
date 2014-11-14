<?php

	require_once(__DIR__ . "/../model/config.php"); //gives access to variables listed in $connection

	$connection = new mysqli($host, $username, $password, $database);  //creates connection to database and stores the connection in the $connection variable.

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  //stores title and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	//stores post and makes it harder to hack

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); //stores title and post into database

	if ($query) {	//runs if the query was stored
		echo "<p>Successfully inserted post: $title</p>";
	}

	else{  //runs if the query wasn't stored
		echo "<p>$connection->error</p>";
	}

	$connection -> close();  //closes connection