<html>
  <head>
    <title>ConJi</title>
  </head>
  <body>
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
          <li> 
            <?php
            $href = $_SERVER['REQUEST_URI'];
             if (strpos($href, 'pages') !== false) {
              if(!(isset($_SESSION['name']))){
                echo "<a href='register'>Register</a>";
              }
             }
             else{
              if(!(isset($_SESSION['name']))){
                echo "<a href='pages/register'>Register</a>";
              }
             }   
            ?>
            </li>
            <li> 
            <?php
            
            if((isset($_SESSION['name']))){
              $welcome = "<a href='pages/profile'>"."Welcome ".$_SESSION['name']."</a>";
            }
            

            if (strpos($href, 'pages') !== false) {
              if(!(isset($_SESSION['name']))){
                echo "<a href='login'>Login</a>";
              }
              else{
                echo $welcome;
              }
            }
            else
            {
              if(!(isset($_SESSION['name']))){
                echo "<a href='pages/login'>Login</a>";
              }
              else{
                echo $welcome;
              }

            }
         
            ?>
            </li>
            
            <li>
            <?php
            if((isset($_SESSION['name']))){
              echo "<form action='' method='post'>
                    <button type='submit' name ='logout' value='true' class='btn btn-success'>Logout</button>
                </form>";
            }
            if(isset($_POST['logout'])) {
             session_start();
              if(session_destroy()){
                  header("Location: /");
              }
            }
            ?>
            </li>

            <li>
            <?php
            if (strpos($href, 'pages') !== false) {
              if(!(isset($_SESSION['name']))){
                echo "<a href='postad'>Post Ad</a>";
              }
              else{
              echo "<a href='postad'>Post Ad</a>";
              }
            }
            else
            {
              if(!(isset($_SESSION['name']))){
                echo "<a href='pages/postad'>Post Ad</a>";
              }
              else{
               echo "<a href='pages/postad'>Post Ad</a>";
              }
            }
            ?>
            
            </li>

            

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </body>
</html>