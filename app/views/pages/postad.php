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
      </script>
  </head>

  <body>


    <div class="container">

  <!--
  1.  Contact Information - Email or Phone number.
2.  Price - in CAD.
3.  Ad type: Category Selected.
4.  For Sale by: Owner/Business.
5.  Availability: Online/Store.
6.  Title and Description.
7.  Address.
8.  Images.
  -->
      <!-- Main component for header -->
    <form runat="server" id="adForm" method="post" action="">
    
      <div class="jumbotron">
        <div class="panel">
        <h3>New Ad Post</h3>
          <nav class="navbar  ">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="https://cdn1.iconfinder.com/data/icons/rounded-flat-country-flag-collection-1/2000/_Unknown.png" id="adImg" class="adImg" name="adPic" style="width:200px; height: 200px;">
          <input type="file" name="selectImg" class="selectImg" id="selectImg" style="padding:10px;"   accept="image/*" onchange="PreviewImage();">
        </div>
        <div class="col-md-8">
              <h3>Address</h3>
                        <input type="text" id="homeAddress" class="homeAddress" name="homeAddress" style="width:100%;">
                     <h3>Contact</h3>
                    <label>E-mail </label>
                        <input type="text" id="email" class="email" name="email" style="width:100%;">
                    <label>Phone </label>
                        <input type="text" id="phone" class="phone" name="phone" style="width:100%;">
           </div>
        
              </div><!--- /row-->
              <div class="row">
                  <div class="col-md-4">
                      <h3>Ad Type</h3>
                      <label>Buy</label><input type="radio" id="radioAdType" name="radioAdType" class="radioAdType" value="Buy">
                     <label>Sell</label><input type="radio" id="radioAdType" name="radioAdType" class="radioAdType" value="Sell">
                </div>
                  <div class="col-md-4">
                      <h3>For Sale By</h3>
                      <label>Owner</label><input type="radio" id="radioSaleChoice" name="radioSaleChoice" class="radioSaleChoice" value="Owner">
                     <label>Business</label><input type="radio" id="radioSaleChoice" name="radioSaleChoice" class="radioSaleChoice" value="Business">
                </div>
                  <div class="col-md-4">
                      <h3>Price</h3>
                      <label>Free</label><input type="radio" id="radioPriceChoice" name="radioPriceChoice" class="radioPriceChoice" value="0">
                       <label>Price</label><input type="radio" id="radioPriceChoice" name="radioPriceChoice" class="radioPriceChoice">
                     <span><input type="number" id="inputPriceChoice" name="inputPriceChoice" class="inputPriceChoice"></span> 
                </div>
              </div><!-- /row -->
              <div class="row">
               <div class="col-md-12">
                        <h3>Title</h3>
                        <input type="text" id="ad" class="ad" name="ad" style="width:100%;">
                
                        <h3>Description</h3>
                        <blockquote contenteditable="true" name="textDesc" id="textDesc" class="textDesc" style=" height: 200px; border: 1px solid black; padding: 5px;">
                        </blockquote>

                        <h3>Category</h3>

                        <select class="ui search dropdown">
                          <option value="appartments">Appartments</option>
                          <option value="books">Books</option>
                          <option value="car">Car</option>
                          <option value="clothing">Clothing</option>
                          <option value="corporation">Corporation</option>
                          <option value="electronics">Electronics</option>
                          <option value="evenplanners">Event Planners</option>
                          <option value="industrial">Industrial</option>
                          <option value="musicalinstruments">Musical Instruments</option>
                          <option value="nonprofit">Non-Profit</option>
                          <option value="partime">Part-Time</option>
                          <option value="personaltrainers">Personal Trainers</option>
                          <option value="photographers">Photographers</option>
                          <option value="tutors">Tutors</option>
                          <option value="weddingdresses">Wedding Dresses</option>
                        </select>
                  </div>
              </div><!-- /row -->
      </div><!-- /container -->
        
              <!-- this will only show if "sell" option is picked -->
              <div class="container" id="sellOptionsContainer" name="sellOptionsContainer" class="sellOptionsContainer">
                  <h2>Sell Options</h2>
                  <div class="row">
                      <div class="col-md-12">
                        <h3>Need a store?</h3>
                           <label>Yes</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoice" value="Y">
                           <label>No</label><input type="radio" id="radioStoreChoice" name="radioStoreChoice" class="radioStoreChoice" value="N">
                      </div>
                      <!-- this only shows up if the user selects "yes" for store -->
                       <div class="col-md-12" id="storeLocationRow" name="storeLocationRow" class="storeLocationRow">
                        <h3>Physical Store</h3>
                           <p>***A base price of $15/hr + SL rate from $15 is added to the total rent of the store***</p>
                           
                           <label>Hours for Store Rental</label><input type="number" id="radioYesStoreChoice" name="radioYesStoreChoice" class="radioYesStoreChoice" min="1" max="8">
                          <table class="table table-hover" class="storeHoursAndRates" id="storeHoursAndRates" name="storeHoursAndRates">
                              <tbody>
                                <tr>
                                    <th>Strategic Location (SL)</th>
                                    <th>Rate (%)</th>
                                    <th>Choice</th>
                                </tr>
                                <tr>
                                    <td>SL-1 has 400 customers per hour
(CpH) visiting the store</td>
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
                                    <td>SL-3 has 200 customers per hour
(CpH) visiting the store</td>
                                    <td>10</td>
                                    <td><input type="radio" value="1.1" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
                                </tr>
                                  <tr>
                                    <td>SL-4 has 100 customers per hour
(CpH) visiting the store</td>
                                    <td>5</td>
                                    <td><input type="radio" value="1.05" name="sl-Choice" id="sl-Choice" class="sl-Choice"></td>
                                </tr>
                                 
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div><!-- /store container -->
              
    </div><!-- /panel -->
  </div><!-- /jumbotron -->
  
  <div class="container">
        
              
              <div class="row">
                <div class="col-md-12">
                 <h3>For Sale By</h3>
                  

                    <h3>Membership Plan</h3>
                    <ul style="list-style-type:none;">
                         <li>Normal Plan: Any Ad is visible for 7 days.<input type="radio" id="radioNormalPlanChoice" name="radioPlanChoice" class="radioNormalPlanChoice" val =></li>
                         <li>Silver Plan: Any Ad is visible for 14 days.<input type="radio" id="radioSilverPlanChoice" name="radioPlanChoice" class="radioSilverPlanChoice"></li>
                         <li>Silver Plan: Any Ad is visible for 14 days.<input type="radio" id="radioPremiumPlanChoice" name="radioPlanChoice" class="radioPremiumPlanChoice"></li>
                    </ul>
                </div>
                  <div class="col-md-12">
                    <h3>Promotion Packages</h3>
                    <ul style="list-style-type:none;">
                         <li>7 days promotion- $10 <input type="radio" id="radio7dayPromo" name="radioPromo" class="radio7dayPromo"></li>
                          <li>30 days promotion- $50 <input type="radio" id="radio30dayPromo" name="radioPromo" class="radio30dayPromo"></li>
                         <li>60 days promotion- $90 <input type="radio" id="radio60dayPromo" name="radioPromo" class="radio60dayPromo"></li>
                    </ul>
                </div>
        </div>
                  <br>
                  <div class="col-md-12">
                    <table class="table table-hover" id="totalAdCostDisplay">
                        <td>Total</td>
                        <td></td>
                        <td name="totalPrice" >$0.00 </td>
                    </table>
                  </div>
              </div>
          <div class="col-md-6">
        <input type="button" id="clear" value=
"RESET" onclick="resetForm();">
     </div>
    <div class="col-md-6">
        <input  id="clear" type="submit" value=
"NEXT">
     </div> 
  </div>
         
  </form>
</div>   
      
     
              
            

  </body>
</html>