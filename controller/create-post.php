<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);  //stores title and makes it harder to hack
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);	//stores post and makes it harder to hack

	echo "<p> Title: $title </p>";  //echos out title
	echo "<p> Post: $post </p>";  //echos out post