<?php

Class Registration extends CI_Model
{
	
	
	function createTable()
	{
		// Connection to LocalHost
		/*$servername = "us-cdbr-iron-east-05.cleardb.net";
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

		}*/
		if ($this->db->table_exists('user'))
		{
		   $result = '';
		}
		else
		{
			$create_table = "CREATE TABLE `user` (
						  `user_id` int(6) NOT NULL AUTO_INCREMENT,
						  `password` varchar(20) DEFAULT NULL,
						  `province` char(7) DEFAULT NULL,
						  `city` varchar(30) DEFAULT NULL,
						  `country` varchar(30) DEFAULT NULL,
						  `email` varchar(255) DEFAULT NULL,
						  `privilege` tinyint(1) NOT NULL DEFAULT '0',
						  `address` varchar(255) DEFAULT NULL,
						  `last_name` char(50) DEFAULT NULL,
						  `first_name` char(50) DEFAULT NULL,
						  PRIMARY KEY (`user_id`)
						)";
			//var_dump($this->db->table_exists('user'));
			$result = $this->db->query($create_table);
		}
		
		return $result;

	}

	function addUser()
	{
		/*$servername = "us-cdbr-iron-east-05.cleardb.net";
		$username = "bef91df46d38c7";
		$password = "736a5a2e";
		$dbname = "heroku_b8e3c8b5ba457b6";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}*/ 

		//$this->createTable();
		$this->load->database();

			 $user = "INSERT INTO `User`(first_name, last_name, password,email,city,province,country) 
				 VALUES ("."'".$_POST['form-fname']."','".$_POST['form-lname']."','".$_POST['form-password']."','".
				 $_POST['form-email']."','".$_POST['form-city']."','".$_POST['form-province']."','".$_POST['form-country']."')";

			 $result = $this->db->query($user);
		/*$user = "INSERT INTO `heroku_b8e3c8b5ba457b6`.`registered_users`(firstName, lastName, password,email,city,province,country) 
				 VALUES ("."'".$_POST['form-fname']."','".$_POST['form-lname']."','".$_POST['form-password']."','".
				 $_POST['form-email']."','".$_POST['form-city']."','".$_POST['form-province']."','".$_POST['form-country']."')";*/

		//$result = $conn->query($user);
	}
}

?>