<?php

Class Membership extends CI_Model
{

	function normalMember()
	{
		if ($this->db->table_exists('normal'))
		{
		   $result = '';
		}
		else
		{
			$create_table = "CREATE TABLE `normal` (
							  `user_id` int(6) NOT NULL,
							  PRIMARY KEY (`user_id`),
							  UNIQUE KEY `user_id` (`user_id`),
							  CONSTRAINT `Normal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE CASCADE
							)";
			$result = $this->db->query($create_table);
		}
		$this->membershipType();
		//var_dump($_SESSION['name']);
		//$get_membership = "INSERT INTO `normal`(user_id) VALUES(SELECT "
		
		
		//return $result;

		return "normal";
	}

	function silverMember()
	{
		if ($this->db->table_exists('silver'))
		{
		   $result = '';
		}
		else
		{
			$create_table = "CREATE TABLE `Silver` (
							  `user_id` int(6) NOT NULL,
							  PRIMARY KEY (`user_id`),
							  UNIQUE KEY `user_id` (`user_id`),
							  CONSTRAINT `Silver_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE CASCADE
							)";
			$result = $this->db->query($create_table);
		}
		
		//return $result;
		return "silver";
	}

	function premiumMember()
	{
		if ($this->db->table_exists('premium'))
		{
		   $result = '';
		}
		else
		{
			$create_table = " CREATE TABLE `Premium` (
							  `user_id` int(6) NOT NULL,
							  PRIMARY KEY (`user_id`),
							  UNIQUE KEY `user_id` (`user_id`),
							  CONSTRAINT `Premium_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE CASCADE
							)";
			$result = $this->db->query($create_table);
		}
		
		//return $result;

		return "premium";
	}

	function membershipType()
	{
		$substring = substr($_SESSION['name'], 0, strpos($_SESSION['name'], ' '));
		var_dump($substring);
		//var_dump($firstWord);
		//"SELECT user_id FROM `user` WHERE first_name = $_SESSION['name'] ";
	}

	
}

?>

