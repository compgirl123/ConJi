
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

    <title>Checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

      <style>
          .radioSpacing{
              margin:10px;
              float:left;
              left:0; right:0;
              text-align:center;
          }
          .inputBoxSpacing{
             float:right;
              margin-left:5px;
          }
          .colSpacing{
              margin-top:8px;
          }
          
          
      </style>
  </head>

  <body>


    <!-- Static navbar -->
  <div class="container">
      <!-- Main component for header -->
	  <form runat="server" id="adForm" method="post" action="">
	  
      <div class="jumbotron">
        <div class="panel" style="padding:10px;">
        <h2>Check Out Information</h2>
          
            <form get="post" action="">
              <div class="container">
                  <h3>Contact Information</h3>
                  <div class="row">
                      
                      <div class="col-md-3 "><label>First Name: </label><input type="text" name="fname" class="fname" id="fname" required></div>
                      <div class="col-md-3 "><label>Last Name: </label><input type="text" name="lname" class="lname" id="lname" required></div>
                      <div class="col-md-3 "> <label>E-mail: </label><input type="text" name="email" class="email" id="email" required></div>
                      <div class="col-md-3 "> <label>Phone: </label><input type="text" name="phone" class="phone" id="phone" required></div>
                  </div>
                  <hr>
                    <h3>Billed Address</h3>
                     <div class="row">
                      
                      <div class="col-md-4 colSpacing"><label>Building Number</label><input type="text" name="bNumber" class="inputBoxSpacing" id="bNumber" required></div>
                      <div class="col-md-4 colSpacing"><label>Street Name</label><input type="text" name="street" class="inputBoxSpacing" id="street" required></div>
                      <div class="col-md-4 colSpacing"> <label>Apt</label><input type="text" name="apt" class="inputBoxSpacing" id="apt" required></div>
                    </div>
                  <div class="row">
                       <div class="col-md-4 colSpacing "> <label>Postal Code </label><input type="text" name="pCode" class="inputBoxSpacing" id="pCode" required></div>
                      <div class="col-md-4 colSpacing"><label>Province </label><input type="text" name="province" class="inputBoxSpacing" id="province" required></div>
                      <div class="col-md-4 colSpacing"><label>Country</label><input type="text" name="country" class="inputBoxSpacing" id="country" required></div>
                    </div>
                  
                  <hr>
                    <h3>Payment Options</h3>
                  
                    <div class="row" style="width:100%; margin:0; ">
                        <div class="radioSpacing"> <label>Visa </label> <input type="radio" name="credName" id="credName" class="inputSpacing" value="visa" required> </div>
                        <div class="radioSpacing"><label>Master Card </label> <input type="radio" name="credName" id="credName" class="inputSpacing"   value="masterC" required>
                        </div>
                        <div class="radioSpacing"><label>American Express </label> <input type="radio" name="credName" id="credName" class="inputSpacing" value="ae" required>
                        </div>
                        <div class="radioSpacing"> <label>Card Number </label><input type="text" class="inputBoxSpacing" name="credNumberBox" id="credNumberBox" required></div>
                    </div>
                       
                  <hr>

                  <div class="container">
                    <h3>Product Summary</h3>
                    <label>Description</label>
                    <div class="row">
                        <div class="col-md-11">
                          <p name="objDesc" id="objDesc">The awesome thing I am paying for.</p>
                        </div>
                        <div class="col-md-1">
                          <label name="priceValue" id="priceValue" >$0.00</label>
                        </div>
                    </div>
                  </div>
                  <hr>
                
                    
                    <div class="container">
                    <div class="row">
                        <div class="col-md-11"><label>Total Price</label></div>
                          <div class="col-md-1"><label name="totalPriceValue" id="totalPriceValue" >$0.00</label></div>
                         
                       
                    </div>
                        </div>
                  
                  <div class="row">
                    <div style="width:100%; ">
                        <button type="submit" name="btnSubmit" id="btnSubmit" style="float:right; margin:10px;" class="btn btn-success">Pay Now</button> 
                      </div>
                  </div>
                
              </div><!-- /container -->
            </form>
            
		</div><!-- /panel -->
	</div><!-- /jumbotron -->

	</form>
</div>	 
      
     
              
            

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
