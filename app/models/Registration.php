<?php

Class Registration extends CI_Model
{
	
	function getAll(){
		

	}

	function createTable()
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

		$create_table = "CREATE TABLE `heroku_fa0ae0775c22d35`.`registered_users` 
						(
						userID BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
						firstName VARCHAR(30),
						lastName VARCHAR(30),
						password VARCHAR(30),
						email VARCHAR(30),
						city VARCHAR(30),
						province VARCHAR(30),
						country VARCHAR(30),
						privilege VARCHAR(30)
						)";
		$result = $conn->query($create_table);
	}

	function addUser()
	{
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

		$this->createTable();
		$user = "INSERT INTO `heroku_fa0ae0775c22d35`.`registered_users`(firstName, lastName, password,email,city,province,country) 
				 VALUES ("."'".$_POST['form-fname']."','".$_POST['form-lname']."','".$_POST['form-password']."','".
				 $_POST['form-email']."','".$_POST['form-city']."','".$_POST['form-province']."','".$_POST['form-country']."')";

		$result = $conn->query($user);
	}
}

?>