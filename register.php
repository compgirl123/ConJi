<?php

$fname =  $_POST["form-fname"]; 
$lname = $_POST["form-lname"];
$email = $_POST["form-email"];
$password = $_POST["form-password"];
$city = $_POST["form-city"];
$province = $_POST["form-province"];
$country = $_POST["form-country"];


$badEmail= false;

//checking e-mail
 if(!(empty($email)) )
        {
            //removed beginning whitespace in e-mail and then validate
           if (filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
             
            } else {
               $badEmail = true;
            }
                      
            
            //once everything's good to go
            if($badEmail == false)
            {
                //access db and login.

            }
            
            
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register ConJi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/login-form-elements.css">
        <link rel="stylesheet" href="css/login-style.css">

     

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->

        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Register  </strong>Here</h1>
                            <div class="description">
                            	<p>
	                            	 
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register to our site here</h3>
                            		<p>You can now enter your details</p>
                        		</div>
                        		<div class="form-top-right">
                      
                        		</div>
                            </div>
                            <div class="form-bottom">
                              <!-- original -->
                                <!--   <form role="form" action="register" method="post" class="register-form"> -->
                                
			                    <form role="form" action="register.php" method="post" class="register-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-fname">First Name</label>
                                       <input type="text" name="form-fname" placeholder="FirstName" class="form-fname form-control" id="form-fname" value="<?php echo $fname; ?>" required>
                                        <?php 
                                        
                                         if(empty($_POST["form-fname"])&& $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*Last Name Required</p>";
                                        }
                                       
                                        ?>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-lname">Last Name</label>
                                        <input type="text" name="form-lname" placeholder="LastName" class="form-lname form-control" id="form-lname" value="<?php echo $lname; ?>" required>
                                       
                                        <?php 
                                        if(empty($_POST["form-lname"])&& $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*Last Name Required</p>";
                                        }
                                        ?>
			                        </div>
                                     <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
                                          <input type="text" name="form-email" placeholder="Email" class="form-email form-control" id="form-email" value="<?php echo $email; ?>" required>
			                        
                                       
                                        <?php
                                      if($badEmail == true)
                                      {
                                         echo "<p style='color:red;'>*Invalid E-mail. Please Try again.</p>";;
                                      }
                                    ?>
                                     

			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password" value="<?php echo $password; ?>" required>
			                        	<?php
                                       if($badEmailOrPass == true){
                                            echo "<p style='color:red;'>*Invalid Password</p>";
                                        }
                                        ?>
			                        </div>
                                     <div class="form-group">
			                        	<label class="sr-only" for="form-city">City</label>
                                         <input type="text" name="form-city" placeholder="City" class="form-city form-control" id="form-city" value="<?php echo $city; ?>" required>
			                            <?php 
                                        
                                         if(empty($_POST["form-city"])&& $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*City Required</p>";
                                        }
                                        ?>
			                        </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-province">Province</label>
                                         <input type="text" name="form-province" placeholder="Province" class="form-province form-control" id="form-province" value="<?php echo $province; ?>" required>
                                  
                                         <?php 
                                         if(empty($_POST["form-province"])&& $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*Province Required</p>";
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-country">Country</label>
                                         <input type="text" name="form-country" placeholder="Country" class="form-country form-control" id="form-country" value="<?php echo $country; ?>" required>
                                     
                                         <?php 
                                       
                                         if(empty($_POST["form-country"])&& $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*Country Required</p>";
                                        }
                                        ?>
                                    </div>
                                    
                                     
			                        <button type="submit" class="btn">Register</button>
                                     <p>Already got an account? <a href="../pages/login">Sign in</a></p>
                                      <p><a href="/">Return to Main Page </a></p>
			                    </form>
		                    </div>
                        </div>
                    </div>
     
                </div>
            </div>
            
        </div>
       

        <!-- Javascript -->
        
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        <script>
        
        
        
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
