<?php

Class Profile extends CI_Model
{
	
	function NormalMemberDetails()
	{
		// Connection to LocalHost
		$servername = "us-cdbr-iron-east-05.cleardb.net";
		$username = "bef91df46d38c7";
		$password = "736a5a2e";
		$dbname = "heroku_b8e3c8b5ba457b6";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		else{

		}

		$create_table = "CREATE TABLE `heroku_b8e3c8b5ba457b6`.`Normal` 
						(
							userId int(6) NOT NULL,
							PRIMARY KEY (userId),
							UNIQUE KEY userId (userId),
							CONSTRAINT `Normal_ibfk_1` FOREIGN KEY (userId) REFERENCES registered_users (userId) ON DELETE CASCADE
						)";

		$result = $conn->query($create_table);
	}
}

?>