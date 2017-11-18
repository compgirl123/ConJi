<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login ConJi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login-form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login-style.css">

      

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
                                
                                        if(!isset($_SESSION['name']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
                                            echo "<p style='color:red;'>*Incorrect email address or password</p>";
                                        }
                                    ?>
                        		</div>
                                
                        		<div class="form-top-right">
                        			
                        		</div>
                            </div>
                            <form action="login" method="post">
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
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
                                <p>Don't have an account?<a href="../pages/register"> Register</a></p>
                                 <p><a href="/">Return to Main Page </a></p>
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
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
