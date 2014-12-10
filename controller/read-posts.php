<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/post.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/boostrap.css">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=320">
	<meta charset="UTF-8">
</head>
<body>




<?php
	//connects the config file to this file
	require_once(__DIR__ . "/../model/config.php");
	//selects posts from post table
	$query = "SELECT * FROM posts ORDER BY id DESC";
	//allows posts to be retrieved
	$result = $_SESSION["connection"]->query($query);
	//posts the selected posts onto the page
	if($result){
		//creates a loop that runs while there is a post that is able to be selected
		while($row = mysqli_fetch_array($result)){
			//opens the div box and gives it the class 'posts'
			echo "<div class='posts'>";
			//dsiplays the title of the post
			echo "<h1>" . $row['title'] . "</h1>";
			echo "<h5>Posted at: " . $row['DateTime'] . "</h5>";
			//echo "<h5>" . $row['username'] . "</h5>";
			//enters
			echo "<br/>";
			//displays the post
			echo "<p>" . $row['post'] . "<p>";
			//another enter
			echo "</br>";
			//closes the div box
			echo "</div>";
		}

	}
?>

	</body>
</html>