<?php
	require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Create Blog Post</h1>
<!-- sends post data to create-post.php and echoes the data -->
<form method = "post" action = "<?php echo $path . "controller/create-post.php"; ?>"> 
	<div id="title">
		<!-- labels title box -->
		<label id= "titlename" for="title"> Title: </label> 	
		<!--	where title is inserted   -->
		<input id ="titlebox" type="text" name="title"/>	
	</div>

	<div id="post">
		<!-- labels post box -->
		<label class="post" for="post"> Post: </label>  
		<!-- where post text is inserted -->
		<textarea name="post"></textarea> 
	</div>
	<!-- Inserts a submit button in the form page -->
	<button type="submit" class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
		submit
	</button>
</form>