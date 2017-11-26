<?php

Class Registration extends CI_Model
{
	
	function createTable()
	{
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
			$result = $this->db->query($create_table);
		}
		
		return $result;

	}

	function addUser()
	{
		$this->load->database();

			 $user = "INSERT INTO `User`(first_name, last_name, password,email,city,province,country) 
				 VALUES ("."'".$_POST['form-fname']."','".$_POST['form-lname']."','".$_POST['form-password']."','".
				 $_POST['form-email']."','".$_POST['form-city']."','".$_POST['form-province']."','".$_POST['form-country']."')";

			 $result = $this->db->query($user);

			 $userInfo = $this->membership->normalMember();

			 $plan = "INSERT INTO `normal`(user_id) SELECT user_id FROM `user` WHERE first_name ="."'".$_POST['form-fname']."'";
			 $result = $this->db->query($plan);

	}
}

?>