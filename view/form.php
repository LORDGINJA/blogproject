<?php
	require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Create Blog Post</h1>

<form method = "post" action = "<?php echo $path . "controller/create-post.php"; ?>">  <!-- sends post data to create-post.php and echoes the data -->
	<div>
		<label for="title"> Title: </label> 	<!-- labels title box -->
		<input type="text" name="title"/>	<!--	where title is inserted   -->
	</div>

	<div>
		<label for="post"> Post: </label>  <!-- labels post box -->
		<textarea name="post"></textarea> <!-- where post text is inserted -->
	</div>

	<div>
		<button type="submit"> Submit </button>  <!-- Inserts a submit button in the form page -->
	</div>
</form>