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
                    <li><a href=""><img src=" <?php echo base_url(); ?>assets/img/nike.png" alt="choice1" style="width:200px;"></a></li>
                    <li><a href=""><img src=" <?php echo base_url(); ?>assets/img/nikon-logo.jpg" alt="choice1" style="width:200px;"></a></li>
                    <li><a href=""><img src=" <?php echo base_url(); ?>assets/img/deserres-logo.png" alt="choice1" style="width:200px;"></a><li>
                </ul>
            </div>
            
     
       
      </div>
      
      <div class="container" style="width:100%;">
      
          <div class="row" >
              <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #A9BCD0;">
                <h1 class="categoryTitle"><a href="clothing">Buy and Sell</a></h1>
                  
                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="clothing" id="clothing">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Clothing</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="books" id="Books">
                    <div  class="bgimg-2">
                        
                          <div class="caption">
                            <p class="border">Books</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="electronics" id="Electronics">
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
       <!--customJavaScript-->    
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>

    </body>
    </html>