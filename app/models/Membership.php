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

		//$get_membership = "INSERT INTO "
		
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
		
		return $result;
	}

	function platinumMember()
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
		
		return $result;
	}

	
}

?>
