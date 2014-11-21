<?php
	//connects this file to the config file
	require_once(__DIR__ . "/../model/config.php"); 

	$query = $connection->query("CREATE TABLE posts ("
 			//creates an id for each blogpost.  id cannot be null.  increments id integers
			. "id int(11) NOT NULL AUTO_INCREMENT, "
			//stores title of blogpost.  can have up to 255 characters.  must have a title
			. "title varchar (255) NOT NULL, " 
			//posts can't be empty
			. "post text NOT NULL, " 

			. "date date NOT NULL ,"

			. "time time NOT NULL ," 
			//sets primary key for table.  the way tables are connected to each other
			. "PRIMARY KEY (id))"); 

	//runs if the table is working
	if($query){  
   		echo "<p>Succesfully create table: posts</p>";
	}
	//says if the table already exists or if there is an error
	else{  
		echo " <p>$connection->error</p>";
	}

