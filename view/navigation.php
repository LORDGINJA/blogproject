<?php
	//allows navigation.php to acces config.php's contents
	require_once(__DIR__ . "/../model/config.php");  
?>
<nav>
	<ul>
		<li>
			<!-- links the config file to the home page -->
			<a href="<?php echo $path . "post.php"?>"> Blog Post form </a> 
		</li>
	</ul>

</nav>