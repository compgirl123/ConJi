<?php

    $adPic;
    $homeNumber = $_POST[('homeNumber')];
    $homeStreet = $_POST[('homeStreet')];
    $homeProvince = $_POST[('homeProvince')];
    $homePostalCode = $_POST[('homePostal')];
    $homeCity = $_POST[('homeCity')];
    $email = $_POST[('email')];
    $phone = $_POST[('phone')];

    $adType = $_POST[('radioAdType')];
    $saleType = $_POST[('radioSaleChoice')];
    $price = $_POST[('inputPriceChoice')];
    $quantity = $_POST[('inputQuantityNumber')];
    $adLocation = $_POST[('locationChoice')];
    $adCategory = $_POST[('adCategory')];
    $adTitle = $_POST[('adTitle')];
    $adDesc = $_POST[('textDesc')];

    $hasStore = $_POST[('radioStoreChoice')];
    $storeList = $_POST[('storeList')];
    $storeRentalDate = $_POST[('datepicker')];
    $storeRentalHours = $_POST[('timeFrameChoice')];
    $storeTimeReserve = $_POST[('storeTimeReserve')];
    

    $sLocationChoice = $_POST[('sl-Choice')];
    $promoPackage = $_POST[('radioPromoPackage')];
    $adPostPrice = $_POST[('totalPrice')];

    //verify home

    


    //no store associated to Ad
    if($hasStore== 'N')
    {
        $storeList = NULL;
        $storeRentalDate= NULL;
        $storeRentalHours = 0;
        $storeTimeReserve = 0;
        $sLocationChoice = 0;
        
    }
    

?>


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

    <title>Ad Settings</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

  </head>

  <body onload="defaultDisplay();">


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

          <a class="navbar-brand" href="../">Project name</a>

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
            <li><a href="../about">About</a></li>
              <li><a href="../contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Login</a></li>
          
            <li><a href="">Post Ad</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">
      <!-- Main component for header -->
	  <form runat="server" id="adForm" method="post" action="postad.php">
	  
      <div class="jumbotron">
        <div class="panel" style="padding:10px;">
        <h3>New Ad Post</h3>
          
		  <div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="https://cdn1.iconfinder.com/data/icons/rounded-flat-country-flag-collection-1/2000/_Unknown.png" id="adImg" class="adImg" name="adPic" style="width:200px; height: 200px;">
					<input type="file" name="selectImg" class="selectImg" id="selectImg" style="padding-top:2.5em;"  accept="image/*" onchange="PreviewImage();">
				</div>
                
				<div class="col-md-8">
                      
                    <div class="row">
                        <div class="col-md-4">
                            <label>Number</label>
                            <input type="text" id="homeNumber" class="homeNumber" name="homeNumber"  style="width:100%;" required>
                        </div>
                     <div class="col-md-4">
                            <label>Street</label>
                            <input type="text" id="homeStreet" class="homeStreet" name="homeStreet" style="width:100%;"  required>
                        </div>
                       
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                                <label>Province</label>
                                <input type="text" id="homeProvince" class="homeProvince" name="homeProvince"  style="width:100%;" required>
                            </div>
                        
                        <div class="col-md-4">
                                <label>Postal Code</label>
                                <input type="text" id="homePostal" class="homePostal" name="homePostal" style="width:100%;" required>
                            </div> 
                        
                         
                       
                    </div>
                    
                    <div class="row">
                    
                        <div class="col-md-8">
                                <label>City</label><br>
                                <input type="text" id="homeCity" class="homeCity" name="homeCity" style="width:100%;" required>
                            </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-md-4">
                            
                        <label>E-mail </label>
                            <input type="text" id="email" class="email" name="email" style="width:100%;" required>
                        </div>
                        <div class="col-md-4">
                            <label>Phone </label>
                            <input type="text" id="phone" class="phone" name="phone" style="width:100%;" required>
                        </div>
                    </div>
                        
                   
                    
			     </div>
			  
              </div><!--- /row-->
        
              <hr>
              
              <div class="row">
                  <div class="col-md-3">
                      <h3>Ad Type</h3>
                      <label>Buy</label><input type="radio" id="radioAdType" name="radioAdType" class="radioAdType" value="Buy" required>
                     <label>Sell</label><input type="radio" id="radioAdType" name="radioAdType" class="radioAdType" value="Sell" required>
                </div>
                  <div class="col-md-3">
                      <h3>For Sale By</h3>
                      <label>Owner</label><input type="radio" id="radioSaleChoice" name="radioSaleChoice" class="radioSaleChoice" value="Owner" required>
                     <label>Business</label><input type="radio" id="radioSaleChoice" name="radioSaleChoice" class="radioSaleChoice" value="Business" required>
                </div>
                  <div class="col-md-3">
                      <h3>Price</h3>
                      <input type="number" id="inputPriceChoice" name="inputPriceChoice" class="inputPriceChoice" required></span> 
                </div>
                  <div class="col-md-3">
                      <h3>Quantity</h3>
                      <input type="number" id="inputQuantityNumber" name="inputQuantityNumber" class="inputQuantityNumber"  required></span>
                </div>
              </div><!-- /row -->
              
               <div class="row">
                <div class="col-md-12">
                        <h3>Ad Location</h3>
                         <div class="form-group">
                      <label for="sel1">Select list</label>
                      <select class="form-control" id="sel1" name="locationChoice" id="locationChoice" required>
                          <option value="#">-----</option>
                           <option disabled>--Quebec--</option>
                        <option value="Montreal">Montreal</option>
                        <option value="Laval">Laval</option>
                        <option value="Kirkland">Kirkland</option>
                        <option value="Gatineau">Gatineau</option>
                          <option disabled>--Ontario--</option>
                        <option value="Belleville">Belleville</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Waterloo">Waterloo</option>
                        <option value="North Bay">North Bay</option>
                           
                      </select>
                    </div>
                  </div>
              </div><!-- /row -->
              
               <div class="row">
                <div class="col-md-12">
                        <h3>Ad Category</h3>
                        
                   <div class="form-group">
                      <label for="sel1">Select list</label>
                      <select class="form-control" id="adCategory" name="adCategory" required>
                          <option value="#">-----</option>
                           <option disabled>--Buy/Sell--</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Books">Books</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Musical Instruments">Musical Instruments</option>
                          <option disabled>--Services--</option>
                        <option value="Tutors">Tutors</option>
                        <option value="Event Planners">Event Planners</option>
                        <option value="Photographers">Photographers</option>
                        <option value="Personal Trainers">Personal Trainers</option>
                            <option disabled>--Rent--</option>
                        <option value="rElectronics">Electronics</option>
                        <option value="rCar">Car</option>
                        <option value="rApartments">Apartments</option>
                        <option value="rWedding-Dresses">Wedding-Dresses</option>
                           <option disabled>Rent</option>
                        <option value="rElectronics">--Electronics--</option>
                        <option value="rCar">Car</option>
                        <option value="rApartments">Apartments</option>
                        <option value="rWedding-Dresses">Wedding-Dresses</option>
                            <option disabled>--Employment--</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Office">Office</option>
                        <option value="Non-Profit">Non-Profit</option>
                        <option value="Part-Time">Part-Time</option>
                      </select>
                    </div>
                   
                    
                  </div>
                </div><!-- /row -->
              
              <div class="row">
               <div class="col-md-12">
                        <h3>Title</h3>
                        <input type="text" id="adTitle" class="adTitle" name="adTitle" style="width:100%;" required>
                        <h3>Description</h3>
                        <blockquote contenteditable="true" name="textDesc" id="textDesc" class="textDesc" style=" height: 200px; border: 1px solid black; padding: 5px;" required>
                        
                        </blockquote>
                  </div>
              </div><!-- /row -->
          
		  </div><!-- /container -->  
		</div><!-- /panel -->
	</div><!-- /jumbotron -->
	
     <!-- this will only show if "sell" option is picked -->
          
          <!-- this will only show if "sell" option is picked -->
	 <div class="jumbotron">
        <div class="panel" style="padding:10px;">
   <h3>Need a store?</h3>
          
		  <div class="container">
			 <div >
                      
                           <label>Yes</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoiceYes" value="Y" onclick="showStoreOptions();">
                           <label>No</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoiceNo" value="N" onclick="hideStoreOptions();">
                      </div>
                      <!-- this only shows up if the user selects "yes" for store -->
                       <div  id="storeLocationRow" name="storeLocationRow" class="storeLocationRow">
                        <h3>Physical Store</h3>
                           <p>***A base price of $15/hr + SL rate from $15 is added to the total rent of the store***</p>
                           
                          
                            <div class="form-group">
                      <label for="sel1">Which Store? </label>
                      <select class="form-control" id="storeList" name="storeList" required>
                          <option value="#">-----</option>
                           
                        <option value="storeID">Premade Store</option>
                      </select>
                    </div>
                           
                           <div class="container">
                             
                               <div class="row">
                               <label>Date </label><input type="text" name="datepicker" id="datepicker">
                                   </div>
                               <div class="row" style="margin:5px;">
                             
                                   <hr>
                                   <div class="container showTimeSlot" id="showTimeSlot">
                                         <label>Available Time Slots</label>
                               <table class="table table-hover" >
                                <thead>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Select</th>
                                   </thead>
                                   <tbody>
                                    <tr>
                                        <td>1pm</td>
                                        <td>3pm</td>
                                      <td><input type="radio" value="2" name="timeFrameChoice" id="timeFrameChoice" class="timeFrameChoice" required>
                                          </td> 
                                    </tr>
                                </tbody>
                               
                               </table>
                                       </div>
                               </div>
                               <div class="row">
                               <label>Hours for Store Rental</label> <input type="number" id="storeTimeReserve" name="storeTimeReserve" class="storeTimeReserve" min="1" max="8" required>
                               </div>
                           </div>
                           <div class="container">
                               <table class="table table-hover storeHoursAndRates" id="storeHoursAndRates" name="storeHoursAndRates">
                              <tbody>
                                <tr>
                                    <th>Strategic Location (SL)</th>
                                    <th>Rate (%)</th>
                                    <th>Choice</th>
                                </tr>
                                <tr>
                                    <td>SL-1 has 400 customers per hour (CpH) visiting the store</td>
                                    <td>20</td>
                                    <td><input type="radio" value="1.20" name="sl-Choice" id="sl-Choice" class="sl-Choice" required></td>
                                </tr>
                                  <tr>
                                    <td>SL-2 has 300 customers per hour
(CpH) visiting the store</td>
                                    <td>15</td>
                                    <td><input type="radio" value="1.15" name="sl-Choice" id="sl-Choice" class="sl-Choice" required></td>
                                </tr>
                                  <tr>
                                    <td>SL-3 has 200 customers per hour (CpH) visiting the store</td>
                                    <td>10</td>
                                    <td><input type="radio" value="1.1" name="sl-Choice" id="sl-Choice" class="sl-Choice" required></td>
                                </tr>
                                  <tr>
                                    <td>SL-4 has 100 customers per hour (CpH) visiting the store</td>
                                    <td>5</td>
                                    <td><input type="radio" value="1.05" name="sl-Choice" id="sl-Choice" class="sl-Choice" required></td>
                                </tr>
                                 
                              </tbody>
                          </table>
                               </div>

                      </div>
		  </div><!-- /container -->  
		</div><!-- /panel -->
	</div><!-- /jumbotron -->      
          
     <div class="jumbotron">
        <div class="panel" style="padding:10px;">
     <h3>Promotion Packages</h3>
          
		  <div class="container">
			<div class="row">
                 <div >
               
                    <ul style="list-style-type:none;">
                         <li>7 days promotion- $10 <input type="radio" id="radioPromoPackage" name="radioPromoPackage" class="radioPromoPackage" value="7"></li>
                          <li>30 days promotion- $50 <input type="radio" id="radioPromoPackage" name="radioPromoPackage" class="radioPromoPackage" value="30"></li>
                         <li>60 days promotion- $90 <input type="radio" id="radioPromoPackage" name="radioPromoPackage" class="radioPromoPackage" value="60"></li>
                    </ul>
                </div>
        </div>
                  <br>
                  <div >
                    <table class="table table-hover" id="totalAdCostDisplay">
                        <td>Total</td>
                        <td></td>
                        <td name="totalPrice" id="totalPrice" value="0.00">$0.00 </td>
                    </table>
                  </div>
		  </div><!-- /container -->  
		</div><!-- /panel -->
	</div><!-- /jumbotron -->          
              
          
        

          
		  <div class="container" style="width:100%; margin:0; text-align:center;">
			  <div class="col-md-6">
                    <input type="reset" style="width:100%;"id="clear" >
                 </div>
                <div class="col-md-6">
                    <input  id="clear" style="width:100%;" type="submit">
                </div>  
		  </div><!-- /container -->  
	      
 
        
	 
	</form>
</div>	 
      
     
              
            

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
<script>
      /*****
        display image when it's picked.
      ****/    
           function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("selectImg").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("adImg").src = oFREvent.target.result;
        };
    };
          /*******************/
          
         /***
            hide default functions
        ***/
         function defaultDisplay(){
             document.getElementById("storeLocationRow").style.display = "none";
             document.getElementById('showTimeSlot').style.display="none";
             
         }
          
        /***
            click "yes" to store
        ***/
          function showStoreOptions(){
              document.getElementById("storeLocationRow").style.display = "inline";
          }
          /***
            click "no" to store
        ***/
          function hideStoreOptions(){
              document.getElementById("storeLocationRow").style.display = "none";
              document.getElementById("sl-Choice").value= " ";
            
          }
          
          /****
            datePicker
            **/
          $( function() {
                $( "#datepicker" ).datepicker();
              } );
          
          
          /*********************************
          showSchedule
          **/
            function showTimeSlot(){
                
                document.getElementById('showTimeSlot').style.display="inline";
                
            }
    
           $(document).ready(function(){
                $("#datepicker").on('change', showTimeSlot);   
           });
    
           
          
      </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
