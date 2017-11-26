<?php

Class Login extends CI_Model
{

	function validateUser()
	{
		$this->load->database();
		$result = '';
		if(!empty($_POST['form-email']) && !empty($_POST['form-password']) ){
		     $sql = "SELECT * FROM `User`
				     WHERE email="."'".$_POST['form-email']."'".
				     " AND password="."'".$_POST['form-password']."'";
		     $result = $this->db->query($sql);
	    }
	    $res = '';
	    if(!empty($result)){
	    	if ($result->num_rows() > 0) {
	    	foreach ($result->result() as $row)
			{
			     $res = $row;
			}
		}
		else
	    {
	    	$res = '';
	    }

	    }
	    return $res;
	    
	    
	}

	
}

?>