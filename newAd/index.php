
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
    <link href="../css/bootstrap.css" rel="stylesheet">
 <link href="../css/custom.css" rel="stylesheet">
      <style>

       
   .sellOptionsContainer{
              border: 2px solid black;
              
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
          
         
          
      </script>
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
	  <form runat="server" id="adForm" method="post" action="">
	  
      <div class="jumbotron">
        <div class="panel" style="padding:10px;">
        <h3>New Ad Post</h3>
          
		  <div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="https://cdn1.iconfinder.com/data/icons/rounded-flat-country-flag-collection-1/2000/_Unknown.png" id="adImg" class="adImg" name="adPic" style="width:200px; height: 200px;">
					<input type="file" name="selectImg" class="selectImg" id="selectImg" style="padding:10px;"   accept="image/*" onchange="PreviewImage();">
				</div>
				<div class="col-md-8">
				      <h3>Address</h3>
                        <input type="text" id="homeAddress" class="homeAddress" name="homeAddress" style="width:100%;" required>
                     <h3>Contact</h3>
                    <label>E-mail </label>
                        <input type="text" id="email" class="email" name="email" style="width:100%;" required>
                    <label>Phone </label>
                        <input type="text" id="phone" class="phone" name="phone" style="width:100%;" required>
			     </div>
			  
              </div><!--- /row-->
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
                      <input type="number" id="inputPriceChoice" name="inputPriceChoice" class="inputPriceChoice" min="0" required></span> 
                </div>
                  <div class="col-md-3">
                      <h3>Quantity</h3>
                      <input type="number" id="inputQuantityNumber" name="inputQuantityNumber" class="inputQuantityNumber" min="0" required></span>
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
                      
                           <label>Yes</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoice" value="Y" >
                           <label>No</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoice" value="N" >
                      </div>
                      <!-- this only shows up if the user selects "yes" for store -->
                       <div  id="storeLocationRow" name="storeLocationRow" class="storeLocationRow">
                        <h3>Physical Store</h3>
                           <p>***A base price of $15/hr + SL rate from $15 is added to the total rent of the store***</p>
                           
                           <label>Hours for Store Rental</label><input type="number" id="radioYesStoreChoice" name="radioYesStoreChoice" class="radioYesStoreChoice" min="1" max="8">
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
                                    <td><input type="radio" value="1.20" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
                                </tr>
                                  <tr>
                                    <td>SL-2 has 300 customers per hour
(CpH) visiting the store</td>
                                    <td>15</td>
                                    <td><input type="radio" value="1.15" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
                                </tr>
                                  <tr>
                                    <td>SL-3 has 200 customers per hour (CpH) visiting the store</td>
                                    <td>10</td>
                                    <td><input type="radio" value="1.1" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
                                </tr>
                                  <tr>
                                    <td>SL-4 has 100 customers per hour (CpH) visiting the store</td>
                                    <td>5</td>
                                    <td><input type="radio" value="1.05" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
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
                        <td name="totalPrice" >$0.00 </td>
                    </table>
                  </div>
		  </div><!-- /container -->  
		</div><!-- /panel -->
	</div><!-- /jumbotron -->          
              
          
        

          
		  <div class="container" style="width:100%; margin:0; text-align:center;">
			  <div class="col-md-6">
                    <input type="button" style="width:100%;"id="clear" value="RESET" onclick="resetForm();">
                 </div>
                <div class="col-md-6">
                    <input  id="clear" style="width:100%;" type="submit" value="NEXT">
                </div>  
		  </div><!-- /container -->  
	      
 
        
	 
	</form>
</div>	 
      
     
              
            

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
