
<?php
	//gives access to variables listed in $connection
	require_once(__DIR__ . "/../model/config.php"); 

	

	//stores title and makes it harder to hack
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  
	//stores post and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	
	//stores the current date
	$date = new DateTime( 'today');
	//stores the current time of the Los Angeles, America timezone
	$time = new DateTime( 'America/Los_Angeles');
	//stores title and post into database
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' "); 
	
	//runs if the query was stored
	if ($query) {	
		//echoes out that the title was successfully inserted and the name of the title
		echo "<p>$title</p>";

		echo "<p>$post(10)</p>";
		//echoes out the date and time of when the post was submitted
		echo "Posted on: " . $date->format('M/D' . ' ' . 'd/Y') . " at " . $time->format('g:i');



	}
	
	//runs if the query wasn't stored
	else{  
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}




