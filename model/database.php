<?php
	//a class is an object that can be used whereever it is called
	class Database{  
		//the "private" before the variable makes it so that these variables can only be used here
		private $connection;  
		//global variables
		private $host;  
		private $username;
		private $password;
		private $databse;
		
		//allows me to use objects of the Databse class. Defines class. Parameters allow us to use the global variables for this function
		public function __construct($host, $username, $password, $databse){  
			//accesses the global variable $host
			$this->host = $host;  
			//these are local variables
			$this->username = $username;  
			//they are deleted when this function is finished.
			$this->password = $password;  
			$this->database = $database;
		}
		
		//used to hold repetitive code.  specifically the connection opener
		public function openConnection(){  
			//accesses the local variables from the construct function
			$this->connection = new mysqli($this->host, $this->username, $this->password); 
			//runs if there is no connecton to database.php and hte variables aren't getting read
			if($this->connection->connect_error){ 
				//eschoes that there is an error
				die("Error: "  . $connection->connect_error); 
			}

		}

		//input the code into the function and insert the function name where ever the code should go
		public function closeConnection(){  
			if(isset($this->connection)){
				$this->connection->close();
			}
		}
		//the query function takes a string of text and uses it to query the database at $query
		public function query($string){ 
			//runs the openConnection() function
			$this->openConnection();
			//executes a query on the database
			$query = $this->connection->query($string);  
			//runs the closeConnection() function
			$this->closeConnection();  
			//returns the results of the query
			return $query; 
		}

	}