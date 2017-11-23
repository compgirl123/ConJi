
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
        <h3>Check Out Information</h3>
          
		  <div class="container">
			<label>First Name: </label><input type="text" name="fname" class="fname" id="fname" required>
            <label>Last Name: </label><input type="text" name="lname" class="lname" id="lname" required>
              <label>E-mail: </label><input type="text" name="email" class="email" id="email" required>
              <hr>
              <h3>Payment Options</h3>
              <label>Visa </label> <input type="radio" name="credName" id="credName" class="credName" value="visa">
              <label>Master Card </label> <input type="radio" name="credName" id="credName" class="credName" value="masterC">
              <label>American Express </label> <input type="radio" name="credName" id="credName" class="credName" value="ae">
              <label>Paypal </label> <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
  <input type="image"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif"
    width="1" height="1">
		  </div><!-- /container -->  
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
