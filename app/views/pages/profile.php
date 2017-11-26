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
    <!--<link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/custom.css" rel="stylesheet">-->
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

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
      </style>

  </head>

  <body>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="panel">
          <nav class="navbar">
              <div class="container">
                <div class="row">
                    
                    <h1>Hello <?php echo $_SESSION['name'] ?>!</h1>
                    <h6>My Details:</h6>

                    <p>Membership : <?php
                                    echo strtoupper($members);
                                    ?> 
                    </p>
                    <!--<button style="padding: 10px;" id="btnPremium" class="btnPremium">Change Plan</button>-->
                    <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Change Plan</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="" >Silver</a>
    <a href="">Premium</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
              </div>
            </nav>   
        </div>
          
      </div> 
          </div><!-- /jumbotron -->
        
     <div class="container">
       <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#activeTab">Active Ads</a></li>
    <li><a data-toggle="tab" href="#expTab">Expired Ads</a></li>
    <li><a data-toggle="tab" href="#myStore">My Store</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="activeTab" class="tab-pane fade in active">
      <h3>Active Ads</h3>
      
         <div class="container">
          <div class="row" >
              <div class="panel">
                  <div class="row">
                      <div class="col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/x.jpg" alt="x-mark">
                        </a>
                      </div>

                      <div class="col-md-9">
                          
                            <h1>Title For Active Ad 1</h1> 
                              <span>Date</span>
                         
                          <br>
                            <div>
                                  <p maxlength="100" name="description"  id="description" style="text-overflow: ellipsis;
 word-wrap:break-word; padding:5px;">blah blah blah. blah blah blah. blah blah blah blah blah. blah blah blah. blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah.blah blah blah. blah blah blah. blah blah blah. blah blah blah.</p>
                            </div>
                          <br>
                          <button type="button" class="btn btn-default" > <a href="#">View</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Edit</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Delete</a></button>
                      </div>
                    </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/x.jpg" alt="x-mark">
                        </a>
                      </div>

                      <div class="col-md-9">
                          
                            <h1>Title For Active Ad 2</h1> 
                              <span>Date</span>
                         
                          <br>
                            <div>
                                  <p maxlength="100" name="description"  id="description" style="text-overflow: ellipsis;
 word-wrap:break-word; padding:5px;">blah blah blah. blah blah blah. blah blah blah blah blah. blah blah blah. blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah.blah blah blah. blah blah blah. blah blah blah. blah blah blah.</p>
                            </div>
                          <br>
                          <button type="button" class="btn btn-default" > <a href="#">View</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Edit</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Delete</a></button>
                      </div>
                    </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/x.jpg" alt="x-mark">
                        </a>
                      </div>

                      <div class="col-md-9">
                          
                            <h1>Title For Active Ad 3</h1> 
                              <span>Date</span>
                         
                          <br>
                            <div>
                                  <p maxlength="100" name="description"  id="description" style="text-overflow: ellipsis;
 word-wrap:break-word; padding:5px;">blah blah blah. blah blah blah. blah blah blah blah blah. blah blah blah. blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah. blah blah blah.blah blah blah. blah blah blah. blah blah blah. blah blah blah.</p>
                            </div>
                          <br>
                          <button type="button" class="btn btn-default" > <a href="#">View</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Edit</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Delete</a></button>
                      </div>
                    </div>
              </div>
          </div> 
        </div>
      </div>
      
      <!-- expired mentu -->
    <div id="expTab" class="tab-pane fade">
      <h3>Expired Ads</h3>
       <div class="container">
          <div class="row" >
              <div class="panel">
                  <div class="row">
                      <div class="row">
                      <div class="col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/x.jpg" alt="x-mark">
                        </a>
                      </div>

                      <div class="col-md-9">
                          
                            <h1>Title For Expired Ad 1</h1> 
                              <span>Date</span>
                         
                          <br>
                            <div>
                                  <p maxlength="100" name="description"  id="description" style="text-overflow: ellipsis;
 word-wrap:break-word; padding:5px;">Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy
                                Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huyHuy huy huy
                                 Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy</p>
                            </div>
                          <br>
                          <button type="button" class="btn btn-default" > <a href="#">View</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Edit</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Delete</a></button>
                      </div>
                    </div>
                 <hr>
                  <div class="row">
                      <div class="col-md-3">
                        <a href="#" class="thumbnail">
                          <img src="img/x.jpg" alt="x-mark">
                        </a>
                      </div>

                      <div class="col-md-9">
                          
                            <h1>Title For Expired Ad 2</h1> 
                              <span>Date</span>
                         
                          <br>
                            <div>
                                  <p maxlength="100" name="description"  id="description" style="text-overflow: ellipsis;
 word-wrap:break-word; padding:5px;">Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy
                                Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huyHuy huy huy
                                 Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy Huy huy huy</p>
                            </div>
                          <br>
                          <button type="button" class="btn btn-default" > <a href="#">View</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Edit</a></button>
                          <button type="button" class="btn btn-default" > <a href="#">Delete</a></button>
                      </div>
                    </div>
                 <hr>    
                 
              </div>
          </div> 
        </div>
    </div>
      </div>
      <!-- store tab --->
    <div id="myStore" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    
  </div>
</div>
     
      
     <!--this only appears when you click on "Go Premium" -->
        <!--
 <div class="col-md-12">
                    <h3>Membership Plan</h3>
                    <ul style="list-style-type:none;">
                         <li>Normal Plan: Any Ad is visible for 7 days.<input type="radio" id="radioNormalPlanChoice" name="radioNormalPlanChoice" class="radioNormalPlanChoice"></li>
                         <li>Silver Plan: Any Ad is visible for 14 days.<input type="radio" id="radioSilverPlanChoice" name="radioSilverPlanChoice" class="radioSilverPlanChoice"></li>
                         <li>Silver Plan: Any Ad is visible for 14 days.<input type="radio" id="radioPremiumPlanChoice" name="radioPremiumPlanChoice" class="radioPremiumPlanChoice"></li>
                    </ul>
                </div>
-->
          
          
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <!--<script src="js/bootstrap.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>