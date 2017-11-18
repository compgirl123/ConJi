<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css" media="all">

      <style>

       

      </style>

  </head>

  <body>


    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">Project name</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bulletin Board<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li class="dropdown-header">Buy/Sell</li>
                <li><a href="#">Clothing</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Musical Instruments</a></li>
                
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Services</li>
                <li><a href="#">Tutors</a></li>
                <li><a href="#">Event Planners</a></li>
                  <li><a href="#">Photographers</a></li>
                <li><a href="#">Personal Trainers</a></li>
                
                  
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Rent</li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Car</a></li>
                  <li><a href="#">Apartments</a></li>
                <li><a href="#">Wedding-Dresses</a></li>
                 
                    <li role="separator" class="divider"></li>
                <li class="dropdown-header">Employment</li>
                <li><a href="#">Industrial</a></li>
                <li><a href="#">Office</a></li>
                  <li><a href="#">Non-Profit</a></li>
                <li><a href="#">Part-Time</a></li>
         
                   
              </ul>
            </li>
            <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Login</a></li>
          
            <li><a href="../navbar-fixed-top/">Post Ad</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="panel">
        <h3>Search Options</h3>
          <nav class="navbar  ">
      <div class="container">
        <div class="row">

  <div id="navbar" class=" navbar-nav" >
      <div class="btn-group">
  <button type="button" class="btn btn-danger">Location</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
      <li class="dropdown-header">Montreal</li>
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
     <li class="dropdown-header">Montreal</li>
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
     <li class="dropdown-header">Montreal</li>
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
  </ul>
</div>
        </div><!--/.nav-collapse -->



    <div class="input-group">

      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->


</div><!-- /.row -->
          
          
          
        
        
          
      </div>
    </nav>   
        </div>
          
      </div> <!-- /jumbotron -->
        
      <div class="container " style="background-color:  #D8DBE2; width:100%;">
          

        
        <h1 style="color: black;">POPULAR SHOP</h1>
            <div id="top3HotShops" >
                <ul class="ulHorizontal">
                    <li><a href=""><img src="img/nike.png" alt="choice1" style="width:200px;"></a></li>
                    <li><a href=""><img src="img/nikon-logo.jpg" alt="choice2" style="width:200px;"></a></li>
                    <li><a href=""><img src="img/deserres-logo.png" alt="choice3" style="width:200px;"></a></li>
                </ul>
            </div>
            
     
       
      </div>
      
      <div class="container" style="width:100%;">
      
          <div class="row" >
              <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #A9BCD0;">
                <h1 class="categoryTitle"><a href="#">Buy and Sell</a></h1>
                  
                  <!--
                  <ul>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Musical Instruments</a></li>
                  </ul>
                    -->
                  
                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="clothing">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Clothing</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="Books">
                    <div  class="bgimg-2">
                        
                          <div class="caption">
                            <p class="border">Books</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="Electronics">
                    <div  class="bgimg-3">
                        
                          <div class="caption">
                            <p class="border">Electronics</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="Instruments">
                    <div  class="bgimg-4">
                        
                          <div class="caption">
                            <p class="border">Musical Instruments</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
              
              <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #373F51;">
                <h1 class="categoryTitle"><a href="#">Services</a></h1>

                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="tutors">
                    <div  class="bgimg-5">
                        
                          <div class="caption">
                            <p class="border">Tutors</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="ePlanners">
                    <div  class="bgimg-6">
                        
                          <div class="caption">
                            <p class="border">Event Planners</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="photographers">
                    <div  class="bgimg-7">
                        
                          <div class="caption">
                            <p class="border">Photographers</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="pTrainer">
                    <div  class="bgimg-8">
                        
                          <div class="caption">
                            <p class="border">Personal Trainers</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
              
               <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #A9BCD0;">
                <h1 class="categoryTitle"><a href="#">Rent</a></h1>

                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rElectronics">
                    <div  class="bgimg-9">
                        
                          <div class="caption">
                            <p class="border">Electronics</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rCar">
                    <div  class="bgimg-10">
                        
                          <div class="caption">
                            <p class="border">Car</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rApartment">
                    <div  class="bgimg-11">
                        
                          <div class="caption">
                            <p class="border">Apartments</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="wDress">
                    <div  class="bgimg-12">
                        
                          <div class="caption">
                            <p class="border">Wedding - Dresses</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
              
              <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #373F51;">
                <h1 class="categoryTitle"><a href="#">Employment</a></h1>

                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eIndustrial">
                    <div  class="bgimg-14">
                        
                          <div class="caption">
                            <p class="border">Industrial</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eCorporation">
                    <div  class="bgimg-15">
                        
                          <div class="caption">
                            <p class="border">Corporation</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eNPO">
                    <div  class="bgimg-16">
                        
                          <div class="caption">
                            <p class="border">Non-Profit</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                  
                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="sBusiness">
                    <div  class="bgimg-13">
                        
                          <div class="caption">
                            <p class="border">Part-Time</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
            
          </div>    
        

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>