<?php
	//allows navigation.php to acces config.php's contents
	require_once(__DIR__ . "/../model/config.php");  
?>
<nav>
	<ul>
		<!-- links the config file to the home page -->
		<button type="button" class="btn btn-default btn-lg">
			<a href="<?php echo $path . "post.php"?>"> Blog Post form </a>
		</button>
	</ul>

</nav>