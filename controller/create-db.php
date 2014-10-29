<?php

	require_once(__DIR__ . "/../model/database.php");  //connects this page to the 

	$connection = new mysqli($host, $username, $password); //helps connect to database.php variables by putting them in an object.  this opens the connection

	if($connection->connect_error){ //runs if there is no connecton to database.php and hte variables aren't getting read
		die("Error: "  . $connection->connect_error); //eschoes that there is an error
	}
	

	$exists = $connection->select_db($database); //try to access a database that exist on the mysql server
													//selecting database, whether server will say whether database exists

	if(!$exists){		//checking whether or not I was able to connect to the database.  Only runs when the database doesn't exist 
		$query = $connection->query("CREATE DATABASE $database");  //php will replace the variable $database with its value "blog_db".
																	//creates a query that creates a connection to my server
		if($query){ //checks whether $query was true or not

			echo "successfully created database: " . $database; //echoes this
		}

	}

	else{ //runs when database has already been created
		echo "Database already exists"; //echoes this
	}

	$connection->close(); //this closes the connection