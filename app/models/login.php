<?php

Class Login extends CI_Model
{

	function validateUser()
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
		 
		if(!empty($_POST['form-email']) && !empty($_POST['form-password']) ){
		     $sql = "SELECT * FROM heroku_b8e3c8b5ba457b6.registered_users
				     WHERE email="."'".$_POST['form-email']."'".
				     " AND password="."'".$_POST['form-password']."'";
				     $result = $conn->query($sql);
				     //echo $sql;
	    }
		
		$res = '';

		if(!empty($result)){
			if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		      $res = $row;
		  }
		} else {
			$res = '';
		}

		}
		
		return $res;
	}

	
}

?>