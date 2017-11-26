<?php
class Pages extends CI_Controller{
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');
	}

	function login()
	{

		$this->load->view('templates/header');
		$this->load->view('pages/'.'login');
		$this->load->view('templates/footer');

		$this->load->model("login");
		$validateLogin = $this->login->validateUser();

		if(empty($validateLogin))
		{
				//echo "ERROR";
		}
		else
		{
			$this->load->model("login");
			$userInfo = $this->login->validateUser();

			$_SESSION['name'] = $userInfo->first_name." ".$userInfo->last_name;
			header('Location: ' . base_url());
			//var_dump(base_url());
		}

	}
	
	function register()
	{
		$emptyError = 1;
		foreach($_POST as $k=>$v){
			if(empty($v)){
				$emptyError = 1;
				
			}
			else{
				$emptyError = 0;
			
			}	
			
		}
		//echo $emptyError;
		// 0 means not empty
		// 1 means empty
		if($emptyError == 0)
		{
			$this->load->model("registration");
			$this->registration->createTable();
			$this->registration->addUser();
			header('Location: ' . base_url().'pages/login');
		}


		$this->load->view('templates/header');
		$this->load->view('pages/'.'register');
		$this->load->view('templates/footer');
		$this->load->model("registration");

	}

	function postad()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/css');
		$this->load->view('pages/'.'postad');
		$this->load->view('templates/footer');

	}

	function profile()
	{
		$this->load->model("membership");
		$data['members'] = $this->membership->normalMember();
		$this->load->view('templates/header');
		$this->load->view('templates/css');

		$this->load->view('pages/'.'profile',$data);
		$this->load->view('templates/footer');


	}



	
}
?>