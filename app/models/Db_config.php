<?php
Class Db_config 
{
	
	function dbConnect()
	{
	// Connection to LocalHost
		//$db = $this->load->database('default');
		
		$servername = "us-cdbr-iron-east-05.cleardb.net";
		$username = "b8248bea3978a9";
		$password = "883cabc2";
		$dbname = "heroku_3da280d67ae2e97";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
	}


?>