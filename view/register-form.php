<?php
	require_once(__DIR__ ."/../model/config.php");
?>

<h1>REGISTER</h1>
<!-- goes to create-user page and displays whatevers there -->
<form method="post" action="<?php echo $path . "controller/create-user.php";?> ">
	<div>
		<!-- input box for user's email -->
		<label for="email">Email: </label>
		<input type="text" name="email"/>
	</div>
	<div>
		<!-- input box for user's username  -->
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>
	<div>
		<!-- input box for user's password -->
		<label for="password">Password: </label>
		<input type="password" name="password"/>
	</div>
	<div>
		<!-- button to submit previous three input values -->
		<button type="submit">Submit</button>
	</div>
</form>