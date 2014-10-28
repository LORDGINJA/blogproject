<?php

	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: "  . $connection->connect_error);
}
	

	$exists = $connection->select_db($database); //try to access a database that exist on the mysql server
													//selecting database, whether server will say whether database exists

	if(!$exists){		//checking whether or not I was able to connect to the database
		$query = $connection->query("CREATE DATABASE $database");  //php will replace the variable $database with its value "blog_db".
																	//creates a query that creates a connection to my server
		if($query){ //checks whether $query was true or not

			echo "successfully created database: " . $database; 
		}

	}

	$connection->close();