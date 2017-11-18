<?php

Class Login extends CI_Model
{

	function validateUser()
	{
		// Connection to LocalHost
		$servername = "us-cdbr-iron-east-05.cleardb.net";
		$username = "ba2fcfca4c14dc";
		$password = "d24f8aa7";
		$dbname = "heroku_fa0ae0775c22d35";


		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		 
		if(!empty($_POST['form-email']) && !empty($_POST['form-password']) ){
		     $sql = "SELECT * FROM heroku_fa0ae0775c22d35.registered_users
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