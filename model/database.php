<?php
	class Database{  //a class is an object that can be used whereever it is called
		private $connection;  //the "private" before the variable makes it so that these variables can only be used here
		private $host;  //global variables
		private $username;
		private $password;
		private $databse;
		
		public function __construct($host, $username, $password, $databse){  //allows me to use objects of the Databse class.  Parameters allow us to use the global variables for this function
			$this->host = $host;  //accesses the global variable $host
			$this->username = $username;  //these are local variables
			$this->password = $password;  //they are deleted when this function is finished.
			$this->database = $database;
		}

	}