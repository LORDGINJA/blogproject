<?php

	require_once(__DIR__ . "/../model/config.php"); //gives access to variables listed in $connection

	$connection = new mysqli($host, $username, $password, $database);  //creates connection to database and stores the connection in the $connection variable.

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  //stores title and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	//stores post and makes it harder to hack
	$date = new DateTime('today');
	$time = new DateTime('now');

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' "); //stores title and post into database

	if ($query) {	//runs if the query was stored
		echo "<p>Successfully inserted post: $title</p>";
		echo "Posted on: " . $date->format('M/D' . ' ' . 'd/Y') . " at " . $time->format('g:i';
		echo "<p><img src='http://www.growhack.com/wp-content/uploads/2013/11/Screen-Shot-2013-11-01-at-3.07.41-PM.png'></p>";

	}

	else{  //runs if the query wasn't stored
		echo "<p>$connection->error</p>";
	}

	$connection -> close();  //closes connection