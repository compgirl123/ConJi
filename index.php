<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	
    <title>Buy stuff from Concordians</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<!--customCss-->
	<link href="css/custom.css" rel="stylesheet" type="text/css" >
 
      <style>
html{
  position: relative;
  min-height: 100%;

}

    /* homepage ul li category css. */
          .container .row #categoryElement .categoryTitle{
              width:100%;
              text-align:center;
          }      
    .container .row #categoryElement .categoryTitle a{
    color: green;
        text-align: center;
        text-decoration: none;
}


.container .row #categoryElement ul > li {
    list-style-type: none;
    color: purple;
    text-decoration: none;
}
 
.container .row #categoryElement ul > li a:hover {
    background-color: red;
    text-decoration: none;
   
}
/********************************/

          
.buyClothesOption {
 

    background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/clothesCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
}

.bgimg-1 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/clothesCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}
          
.bgimg-2 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/booksCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

.bgimg-3 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/electronicsCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

.bgimg-4 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/instrumentsCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

          .caption {
  position: absolute;
  top: 50%;
  left:0;
              right:0;
  text-align: center;
  color: #000;
}

.caption p.border {
  
  text-align: center;
  color: #fff;
  padding: 5px;
  font-size: 0.90em;
  letter-spacing: 10px;
}
          
/*     */
.footer{
    margin-top:10px;
    padding:10px;
    
    position:absolute;
    width:100%;
    bottom:0;
    text-align:center;
    background-color: #1B1B1E;
}
      </style>
	
  </head>

  <body>

    <nav id="headerNav" class="navbar headerPurple navbar-fixed-top" style="background-color: #5998C5;">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			ConJi
		  </a>
          The Student Life Market- 
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <div class="form-group" style="padding: 20px;">
              <a href="#" >Register</a> or <a href="#" >Sign In</a> 
            </div>
              <button type="submit" class="btn btn-success">Post Ad</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
        
    
        <div id="searchPanel" class="container">
    <div class="panel panel-default">
  <div class="panel-body">
        <img src="#" alt="funcky pic spot">
        <form class="navbar-form navbar-right" style="margin:none; padding:none;">
           
            <div class="btn-group">
             
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Location <span class="caret"></span>
  </button>

  <ul class="dropdown-menu">
    <li><a href="#">Abitibi-Temiscamingue</a></li>
    <li><a href="#">Baie-Comeau</a></li>
      <li><a href="#">Centre-du-Quebec</a></li>
      <li><a href="#">Centre-du-Quebec</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
              <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
          </form>
  </div>
</div>      

      </div>
    </nav>

      

        <div id="fastHotShopSection" class="container" style="background-color:  #D8DBE2; width:100%; margin-top: 3em; padding-top: 150px;">
          
   
        <h1 style="color: white;">HOT SHOPS!</h1>
            <div id="top3HotShops" class="top3HotShops">
                <ul class="ulHorizontal">
                    <li><a href=""><img src="" alt="choice1"></a></li>
                    <li><a href=""><img src="" alt="choice2"></a></li>
                    <li><a href=""><img src="" alt="choice3"></a></li>
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
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Tutors</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="ePlanners">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Event Planners</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="photographers">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Photographers</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="pTrainer">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Personal Trainers</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
              
               <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #A9BCD0;">
                <h1 class="categoryTitle"><a href="#">Rent</a></h1>

                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rElectronics">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Electronics</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rCar">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Car</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="rApartment">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Apartments</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="wDress">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Wedding - Dresses</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
              
              <div id="categoryElement" class="col-md-6" style="padding:5; margin:0; background-color: #373F51;">
                <h1 class="categoryTitle"><a href="#">Employment</a></h1>

                  <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="sBusiness">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Small Business</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eIndustrial">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Industrial</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eCorporation">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Corporation</p>
                          </div>
                    </div>  </a>
                  </div>
                  
                   <div class="row" style="height: 200px; overflow:hidden; text-align:center; " ><a href="#" id="eNPO">
                    <div  class="bgimg-1">
                        
                          <div class="caption">
                            <p class="border">Non-Profit</p>
                          </div>
                    </div>  </a>
                  </div>
              </div>
            
          </div>
      </div>
      
      <hr>
      <footer class="footer">
        <div class="container">
            <p style="color:white; text-align:center;">COMP353isLit</p>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!--customJavaScript-->
    <script src="js/custom.js"></script>      
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
