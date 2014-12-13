<?php
	require_once(__DIR__ ."/../model/config.php");
?>

<h1>REGISTER</h1>
<!-- goes to create-user page and displays whatevers there -->   <!-- used to create users -->
<form class="register" method="post" action="<?php echo $path . "controller/create-user.php";?> ">
	<div id="email">
		<!-- input box for user's email -->
		<label for="email">Email: </label>
		<input type="text" name="email"/>
	</div>
	<div id="username">
		<!-- input box for user's username  -->
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>
	<div id="password">
		<!-- input box for user's password -->
		<label for="password">Password: </label>
		<input type="password" name="password"/>
	</div>
	<div>
		<!-- button to submit previous three input values -->
		<button type="submit">Submit</button>
	</div>
</form>

<button type="button" class="btn btn-default btn-lg">
			<a href="<?php echo $path . "post.php"?>"> Blog Post form </a>
		</button>