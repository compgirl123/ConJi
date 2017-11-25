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
		//session_start();

		$this->load->model("login");
		$validateLogin = $this->login->validateUser();

		if(empty($validateLogin))
		{
				//echo "ERROR";
		}
		else
		{
			//ession_start();
			$this->load->model("login");
			$userInfo = $this->login->validateUser();

			$_SESSION['name'] = $userInfo['firstName']." ".$userInfo['lastName'];
			header('Location: ' . base_url());
			//$this->load->view('pages/'.'register');
		}
        //var_dump(empty($validateLogin));

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
			//$this->getNameofUser();
			$this->load->model("registration");
			$this->registration->createTable();
			$this->registration->addUser();
			header('Location: ' . base_url().'pages/login');
		}


		$this->load->view('templates/header');
		$this->load->view('pages/'.'register');
		$this->load->view('templates/footer');
		
		$this->load->model("registration");
		//$this->registration->createTable();

	}

	function postad()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/'.'postad');
		$this->load->view('templates/footer');

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

		$create_table = "CREATE TABLE `heroku_b8e3c8b5ba457b6`.`postad_Ad` 
						(
						ad_id INT(6) AUTO_INCREMENT,
						user_id INT(6),
						type CHAR(4) CHECK (TYPE IN ('BUY', 'Sell')),
						quantity INT(4),
						contact_number INT(11),
						contact_email VARCHAR(75),
						sold_by VARCHAR(100),
						title VARCHAR(50),
						description VARCHAR(2000),
						price DOUBLE (7, 2),
						date_made DATE NOT NULL,
						expired_ad BOOLEAN NOT NULL DEFAULT 0,
						is_product BOOLEAN NOT NULL DEFAULT 0,
						category VARCHAR(20) CHECK (category IN ('RentCar', 'RentElectronics', 'RentWedding', 'RentAppartment', 'Buy_SellClothing', 'Buy_SellBook', 'Buy_SellElectronics', 'Buy_SellInstrument', 'JobSmall','JobCorporation', 'JobNon_Profit', 'JobIndustrial', 'Service Tutor', 'ServiceEvent', 'ServicePhoto', 'ServiceTrainer')),
						PRIMARY KEY (ad_id, user_id)
						)";
		$result = $conn->query($create_table);
	}
	function addAd()
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
		$Ad = "INSERT INTO `heroku_b8e3c8b5ba457b6`.`registered_users`(title,sold_by,type,quantity,contact_number,contact_email,description,price,date_made,expired_ad,category,is_product) 
				 VALUES ("."'".$_POST['form-title']."','".$_POST['form-sold_by']."','".$_POST['form-type']."','".
				 $_POST['form-email']."','".$_POST['form-quantity']."','".$_POST['form-contact_number']."','".$_POST['form-contact_email']."','".$_POST['form-sold_by']."','".$_POST['form-sold_by']."','".$_POST['form-sold_by']."','".$_POST['form-description']."','".$_POST['form-price']."','".$_POST['form-date_made']."','".$_POST['form-expired_ad']."','".$_POST['form-category']."','".$_POST['form-is_product']."')";

		$result = $conn->query($Ad);
	}




	
}
?>