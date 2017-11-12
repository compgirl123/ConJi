
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
    <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/custom.css" rel="stylesheet">
      <style>
        
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
          
.bgimg-5 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/tutorCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

 .bgimg-6 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/eventCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

 .bgimg-7 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/photoCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

.bgimg-8 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/trainerCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}
          
.bgimg-9 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/rentCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

.bgimg-10 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/carCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}
          
.bgimg-11 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/apartmentCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}

.bgimg-12 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/weddingCategoryPic.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}
          
.bgimg-13 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/sBusinesses.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}
          
.bgimg-14 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/iBusinesses.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
}  

.bgimg-15 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/cBusinesses.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   
  width: 100%;
height:100%;
} 

.bgimg-16 {
  position: relative;
  background: linear-gradient(
                     rgba(20,20,20, .5), 
                     rgba(20,20,20, .5)),
                     url(img/npoBusinesses.jpg);
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

.topStore1{
              
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
        
     
      
      <div class="container" style="width:100%;">
          <div class="row" >
              <div class="panel">
              <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="img/x.jpg" alt="x-mark">
    </a>
  </div>
                
  <div class="col-xs-6 col-md-9">
      <div class="container">
        <h1>Title For Post</h1> 
          <span>Date</span>
      
      </div>
      <br>
        <div class="container" style="display:block;">
              <p>blah blah blah. blah blah blah. blah blah blah. blah blah blah.</p>
      
        </div>
    
      <br>
      <button type="button" class="btn btn-default navbar-right">Details</button>
  </div>
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
