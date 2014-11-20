<?php
	//gives access to variables listed in $connection
	require_once(__DIR__ . "/../model/config.php"); 
	//stores title and makes it harder to hack
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  
	//stores post and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	
	$date = new DateTime( 'today');
	$time = new DateTime( 'America/Los_Angeles');
	//stores title and post into database
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' "); 
	
	//runs if the query was stored
	if ($query) {	
		//echoes out that the title was successfully inserted and the name of the title
		echo "<p>Successfully inserted post: $title</p>";
		//echoes out the date and time of when the post was submitted
		echo "Posted on: " . $date->format('M/D' . ' ' . 'd/Y') . " at " . $time->format('g:i');
		//echoes out a picture of Apu saying "Thank you, Come again"
		echo "<p><img src='http://www.growhack.com/wp-content/uploads/2013/11/Screen-Shot-2013-11-01-at-3.07.41-PM.png'></p>";

	}
	
	//runs if the query wasn't stored
	else{  
		echo "<p>$connection->error</p>";
	}

