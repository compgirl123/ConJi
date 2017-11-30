<?php

// Added password and e-mail verification. 
    $email = $_POST['form-email'];
    $pass = $_POST['form-password'];


$badEmailOrPass = false;

$errorEmailOrPass =  "<p style='color:red;'>*Incorrect email address or password</p>";
        
       
        //checking if email or password is empty by default.
        if(!(empty($email) || empty($pass)) )
        {
            //removed beginning whitespace in e-mail and then validate
           if (filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
             
            } else {
               $badEmailOrPass = true;
            }
            
            //checking if password is just whitespace
            if(empty(trim($pass)) )
            {
                $badEmailOrPass = true;
            }
            
            //once everything's good to go
            if($badEmailOrPass == false)
            {
                //access db and login.
                echo 'good to go!' .'<br>';
            }
            
            
    }
     
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login ConJi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

       

        <!--for testing -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/login-form-elements.css">
        <link rel="stylesheet" href="css/login-style.css">

      

        <!-- Favicon and touch icons -->
       
        <style>
            
        </style>

    </head>

    <body>

        <!-- Top content -->
        
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>LOGIN   </strong>ConJi</h1>
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
                        			<h3>Login to our site</h3>
                            		<p>Enter your email and password to log on:</p>
                                    <?php
                                      if($badEmailOrPass == true)
                                      {
                                          echo $errorEmailOrPass;
                                      }
                                    ?>
                        		</div>
                                
                        		<div class="form-top-right">
                        			
                        		</div>
                            </div>
                            <!-- <form action="login" method="post"> -->
                            <div class="form-bottom">
			                    <form role="form" action="login.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-email">Username</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
                                <p>Don't have an account?
                                    
                                    <!-- original -->
                                    <!--<a href="../pages/register"> Register</a> -->
                                    <a href="register.php"> Register</a></p>
                                 <p><a href="/">Return to Main Page </a></p>
		                    </div>
                         
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    


        <!-- Javascript -->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
