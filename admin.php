
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
      <!--insert php nav here--->

      <!--end nav--->
      
      <!--jumbotron container begin -->
    <div class="container">
      <div class="jumbotron">
        <div class="panel">
          <nav class="navbar">
              <div class="container">
                <div class="row">                   
                    <h1>Hello Admin!</h1>
                </div>
              </div>
            </nav>   
        </div>
          
      </div> 
          </div><!-- end container jumbotron -->
        
        <!--body container begin -->
     <div class="container">
       <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#activeTab">Online Users</a></li>
    <li><a data-toggle="tab" href="#expTab">All Users</a></li>
    <li><a data-toggle="tab" href="#myStore">All Ads</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="activeTab" class="tab-pane fade in active">
      <h3>Online Users</h3>
      
         <div class="container">
             <table class="table table-striped ">
                 <thead>
                     <tr>
                         <th>User ID</th>
                         <th>Username</th>
                         <th colspan="2" style="text-align: center;">Account</th>
                     </tr>
                 </thead>
                 <tbody>
                     <!--php part -->
                     <tr>
                         <td>66666ae</td>
                         <td><a href="#">topDogHustler</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                      
                     <!--php part --> 
                     <tr>
                         <td>6ae6666</td>
                         <td><a href="#">topUnderDog</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                 </tbody>
             </table>
          
        </div>
      </div>
      
      <!-- expired mentu -->
    <div id="expTab" class="tab-pane fade">
      <h3>All Users</h3>
       <div class="container">
          <table class="table table-striped ">
               <thead>
                     <tr>
                         <th>User ID</th>
                         <th>Username</th>
                         <th colspan="2" style="text-align: center;">Account</th>
                     </tr>
                 </thead>
                 <tbody>
                      <!--php part -->
                     <tr>
                         <td>66666ae</td>
                         <td><a href="#">topDogHustler</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                      
                     <!--php part --> 
                     <tr>
                         <td>6ae6666</td>
                         <td><a href="#">topUnderDog</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                     <!--php part -->
                     <tr>
                         <td>g33545</td>
                         <td><a href="#">quitLifeScrub</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                     
                     <!--php part -->
                      <tr>
                         <td>g7h545</td>
                         <td><a href="#">trollio</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                      <!--end 1 table row-->
                     
                 </tbody>
          </table>
    </div>
      </div>
      <!-- store tab --->
    <div id="myStore" class="tab-pane fade">
      <h3>All Ads</h3>
      <div class="container">
          <table class="table table-striped ">
               <thead>
                     <tr>
                         <th>ID</th>
                         <th>Title</th>
                         <th>Username</th>
                         <th colspan="2" style="text-align: center;">Options</th>
                     </tr>
                 </thead>
                 <tbody>
                     <!--php part -->
                     <tr>
                         <td>12345</td>
                         <td><a href="#" >Test Title</a></td>
                         <td><a href="#">topDogHustler</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                     
                     <!--php part -->
                     <tr>
                         <td>54321</td>
                         <td><a href="#">Test Title2</a></td>
                         <td><a href="#">g7h545</a></td>
                         <td style="text-align: center;"><button><a href="#">Edit</a></button></td>
                         <td style="text-align: center;"><button><a href="#">Delete</a></button></td>
                     </tr>
                     <!--end 1 table row-->
                 </tbody>
        </table>
        </div>
    </div>
    
  </div>
</div>
     <!--body container end -->
      
     


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
