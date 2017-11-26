<?php

Class Profile extends CI_Model
{
	
	function NormalMemberDetails()
	{
		// default stuff
		// Do membership detail stuff.
		$this->load->model("membership");
	    $userInfo = $this->membership->normalMember();
	}
}

?>