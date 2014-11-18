<?php
	class Database{  //a class is an object that can be used whereever it is called
		private $connection;  //the "private" before the variable makes it so that these variables can only be used here
		private $host;  //global variables
		private $username;
		private $password;
		private $databse;
		
		public function __construct($host, $username, $password, $databse){  //allows me to use objects of the Databse class.        Defines class. Parameters allow us to use the global variables for this function
			$this->host = $host;  //accesses the global variable $host
			$this->username = $username;  //these are local variables
			$this->password = $password;  //they are deleted when this function is finished.
			$this->database = $database;
		}

		public function openConnection(){  //used to hold repetitive code.  specifically the connection opener
			$this->connection = new mysqli($this->host, $this->username, $this->password); //accesses the local variables from the construct function

			if($this->connection->connect_error){ //runs if there is no connecton to database.php and hte variables aren't getting read
				die("Error: "  . $connection->connect_error); //eschoes that there is an error
			}

		}
		public function closeConnection(){  //input the code into the function and insert the function name where ever the code should go
			if(isset($this->connection)){
				$this->connection->close();
			}
		}

		public function query($string){}

	}