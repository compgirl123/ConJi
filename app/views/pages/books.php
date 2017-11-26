
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	
    <title>Buy and Sell</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  
	
	<!--customCss-->
	<link href="css/custom.css" rel="stylesheet">
 <style>
      
     .textright1{
        margin-left: 80px; 
         font-size: 18px;
         color:crimson;
     }
     .selected a{
         color: azure;
         text-decoration: none;
     }
     .panel-color{
         background-color:cornflowerblue;
     }  
     .ChangedFont{
    font-size: xx-large !important;
    font-family: fantasy !important;
        
     }
     .cornsilkColorText{
          color: cornsilk;
     }
      .ChangedFontcategory{
    font-family: fantasy !important;
        }
     .textarea{
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    
    cursor: pointer;
   
    user-select: none;
    
    border: 1px solid transparent;
    border-radius: 4px;
     }
     
     
      </style>
      
      <script>
      function popup(){
          alert("jello");
      }
      
      
      </script>
	
  </head>

  <body>
   
 

    <nav id="headerNav" class="navbar navbar-default navbar-fixed-top" style="background-color:floralwhite; margin: 0px ; padding: 10px;">
        <div class="container-fluid">
              <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" >
              <h1> CONJI <small>Concordia's International Market</small></h1>
          </a>
            
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <div class="form-group" style="padding: 20px;">
              <a href="#" >Register</a> or <a href="login/login.php" >Sign In</a> 
              </div>
          <button type="submit" class="btn btn-success">Post Ad</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<!--     <div id="searchPanel" class="container" style=" background-color:; margin-top: 2em; padding-top: 50px;">
    <div class="panel panel-default"  style=" background-color: black;">
  <div class="panel-body">
        <img src="#" >
        <form class="navbar-form navbar-right" style="margin:none; padding:none;">
           
            <div class="btn-group">
             
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Location <span class="caret"></span>
  </button>

  <ul class="dropdown-menu">
    <li><a href="#">Montreal</a></li>
    <li><a href="#">Longuiel</a></li>
      <li><a href="#">Laval</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Ottawa</a></li>
  </ul>
</div>

 
              <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
          </form>
  </div>
</div>      

      </div>   -->
      
      

   <!-- <div  style="background-color:black; padding:10px; margin-top: 75px; margin-right: 0px; margin-left: 0px">
        <div>
        <h1 style="color:darkgray;">   RENTAL</h1>
        </div>  
    </div> -->
      
      
     
<nav id="headerNav" class="navbar navbar-default" style=" background-color:#5cb85c; margin-top: 95px ; padding-left: 12px">
    
      
    
     <form class="navbar-form navbar-left" style="margin:none; padding:none;color:darkcyan">
   <font class="ChangedFont cornsilkColorText">BUY&SELL</font>  <small class="cornsilkColorText">Services</small>
    </form>
    <form class="navbar-form navbar-right" style="margin-right:20px !important; padding:none;">
           
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
    
    
</nav>
      

      
    <div class="row">
        
        <!--  1.1 -->
 <div class="col-md-2">   
    <div class="panel panel-default panel-color"  >
  <!-- Default panel contents -->
  <div class="panel-heading">
  <h4 class="ChangedFontcategory"> Categories</h4></div>


  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"><a href="buyandsellclothing.html">Clothing</a></li>
    <li class="list-group-item active selected"><a href="buyandsellbooks.html">Books</a></li>
    <li class="list-group-item"><a href="buyandsellelectronics.html">Electronics</a></li>
    <li class="list-group-item"><a href="buyandsellmusical.html">Musical Instruments</a> </li>
    </ul>
</div>
        </div>
<div class="col-md-2">

        <div class="thumbnail">
      <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          
<!-- Start of Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal1">Buy</button>
         
          
     <div id="myModal1" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         
                <div class="modal-footer">
             
                  <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
                
                </div>
        
             </div>

        
         </div>
   
          
        </div>
     
          
     <!-- end of modal class -->
        </div>
         
    </div>
        </div>
        
        
        <!-- 1.2 -->
        
        
        
        <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/images.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
       <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal2">Buy</button>
         
          
     <div id="myModal2" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/images.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         
                <div class="modal-footer">
             
                  <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
                
                </div>
        
             </div>

        
         </div>
   
          
        </div>
     
          
     <!-- end of modal class -->
            </div>
        </div>
         
    </div>
        
        
        
        
        <!-- 1.3 -->
        
        <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/396774-the-10-best-ultraportables.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal3">Buy</button>
         
          
     <div id="myModal3" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/396774-the-10-best-ultraportables.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         
                <div class="modal-footer">
             
                  <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
                
                </div>
        
             </div>

        
         </div>
   
          
        </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
        
        <!-- 1.4 -->
        
        
        <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg">
      <div class="caption">
        <h3>Thumbnail label</h3>
    
    <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal4">Buy</button>
         
          
     <div id="myModal4" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg"> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
             <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
   
    </div>
    </div>
    </div>
        
       
        
        <!-- 1.5 -->
        
        <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal5">Buy</button>
         
          
     <div id="myModal5" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/ht_dell_xps_duo_12_ll_120831_wmain.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
    </div>
      
      
      
    
    <!-- 2nd Row --->
    
    
    <div class="row" >
        
        
        <!-- 2.1 -->
        
        
    <div class="col-md-2"></div>
    
    <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/vfcon084827.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal6">Buy</button>
         
          
     <div id="myModal6" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/vfcon084827.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
        <!-- 2.2 -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal7">Buy</button>
         
          
     <div id="myModal7" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
        
      </div>
    </div>
    </div>
        
        <!-- 2.3 -->
        
        <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal8">Buy</button>
         
          
     <div id="myModal8" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
      </div>
    </div>
    </div>
        
        
        <!-- 2.4  -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal9">Buy</button>
         
          
     <div id="myModal9" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>
    </div>
        
        
        
        <!-- 2.5 -->
        
        
         <div class="col-md-2"></div>
    
    <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/index.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal10">Buy</button>
         
          
     <div id="myModal10" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/index.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>   
    
    </div>
      
      </div>
    
      
      <!-- 3rd row -->
    
    
    <div class="row" >
        
        
        <!-- 3.1 -->
        
        
    <div class="col-md-2"></div>
    
    <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/vfcon084827.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal11">Buy</button>
         
          
     <div id="myModal11" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/vfcon084827.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
        <!-- 3.2 -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal12">Buy</button>
         
          
     <div id="myModal12" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
        
      </div>
    </div>
    </div>
        
        <!-- 3.3 -->
        
        <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal13">Buy</button>
         
          
     <div id="myModal13" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
      </div>
    </div>
    </div>
        
        
        <!-- 3.4  -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal14">Buy</button>
         
          
     <div id="myModal14" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>
    </div>
        
        
        
        <!-- 3.5 -->
        
        
         <div class="col-md-2"></div>
    
    <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/index.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal15">Buy</button>
         
          
     <div id="myModal15" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/index.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>   
    
    </div>
      
      </div>
      
      <!-- 4th row -->
      
      
      
    <div class="row" >
        
        
        <!-- 4.1 -->
        
        
    <div class="col-md-2"></div>
    
    <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/vfcon084827.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal16">Buy</button>
         
          
     <div id="myModal16" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/vfcon084827.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
        <!-- 4.2 -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal17">Buy</button>
         
          
     <div id="myModal17" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
        
      </div>
    </div>
    </div>
        
        <!-- 4.3 -->
        
        <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal18">Buy</button>
         
          
     <div id="myModal18" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
      </div>
    </div>
    </div>
        
        
        <!-- 4.4  -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal19">Buy</button>
         
          
     <div id="myModal19" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>
    </div>
        
        
        
        <!-- 4.5 -->
        
        
         <div class="col-md-2"></div>
    
    <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/index.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal20">Buy</button>
         
          
     <div id="myModal20" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/index.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>   
    
    </div>
      
      </div>
      
      <!-- 5th row -->
      
      
        <div class="row" >
        
        
        <!-- 5.1 -->
        
        
    <div class="col-md-2"></div>
    
    <div class="col-md-2">

        <div class="thumbnail">
      <img src="img/vfcon084827.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal21">Buy</button>
         
          
     <div id="myModal21" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/vfcon084827.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
        </div>
         
    </div>
        
        <!-- 5.2 -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal22">Buy</button>
         
          
     <div id="myModal22" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
        
      </div>
    </div>
    </div>
        
        <!-- 5.3 -->
        
        <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
          <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal23">Buy</button>
         
          
     <div id="myModal23" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
        
      </div>
    </div>
    </div>
        
        
        <!-- 5.4  -->
        
         <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal24">Buy</button>
         
          
     <div id="myModal24" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/lenovo-laptop-yoga-900-series-list.png" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>
    </div>
        
        
        
        <!-- 5.5 -->
        
        
         <div class="col-md-2"></div>
    
    <div class="col-md-2">
         <div class="thumbnail">
      <img src="img/index.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        
        <!-- Modal class -->  
          
          <button type= "button" class= "btn btn-primary" data-toggle="modal" data-target="#myModal25">Buy</button>
         
          
     <div id="myModal25" class="modal fade" role="dialog">
         <div class="modal-dialog">

    <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Ad Name</h3>  
                  

              </div>
            <div class="modal-body">
             <img src="img/index.jpg" alt="..."> 
                
                 <hr>
                
              <h4>Description</h4>
              <p>This is a very good Product</p>
                <hr>
              <h4>Price</h4>
              <p class="lead">200$ </p>
            </div>
         <div class="modal-footer">
            <a class="btn btn-primary" href="buyandsellclothing.html">Buy</a>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>

        </div>
    </div>
     
          
     <!-- end of modal class -->
      </div>
    </div>   
    
    </div>
      
      </div>
        
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--     <nav class="navbar navbar-default" style="background-color:floralwhite; margin: 75px ;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1 style="color:aqua">Rental</h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse 
  </div><!-- /.container-fluid
</nav>

-->
        
        

    
    
    
    
    
    
    
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


        

