<!DOCTYPE html>
<html lang="en">
<head>
  <title>Linear Motion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/Mlogo.gif">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="bg">

<nav class="navbar navbar-expand-md bg navbar-dark sticky-top">
    <img src="img/logo.png" alt="logo" width="70px" height="55px"> <!--logo-->
  <a class="navbar-brand" id="motion" href="index.php">Motion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>  <!--ปุ่มย่อ nav-->
    </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault"> <!--link ในนี้จะอยู่ใน toggle-->
    
  <ul class="navbar-nav">
      <li class="nav-item dropdown" id="navbar"> <!--drop link-->
          <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">Experiment</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Linear.php">Linear Motion</a>
            <a class="dropdown-item" href="Projectile.php">Projectile Motion</a>
            <a class="dropdown-item" href="SimpleHarmonic.php">Simple Harmonic Motion</a>
          </div>
        </li>
      <li class="nav-item"  id="navbar">
        <a class="nav-link" href="news.php">News</a>   <!--general link-->
      </li>
      <li class="nav-item"  id="navbar">
          <a class="nav-link" href="IncomingFeatures.php">Incoming Feature</a>
      </li>
      <li class="nav-item"  id="navbar">
            <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>
      <li class="nav-item signin"  id="navbar"> 
        <a class="nav-link" href="SignIn.php">Sign in</a>   <!--sign in-->
      </li>
    </ul>
  </nav>      
  </div>
 
    
        
 <div class="white-bg space">             
      <div class="container">
          <h1>Linear Motion</h1>
          <p>
              Linear motion (also called rectilinear motion) is a one-dimensional motion along a straight line, and can therefore be described mathematically 
              using only one spatial dimension. The linear motion can be of two types: uniform linear motion with constant velocity or zero acceleration; 
              non uniform linear motion with variable velocity or non-zero acceleration.
            </p> 
      </div>

      <!--เครื่องคิดเลข-->
      <div class="container"><center>
          <div class="omni-calculator wh " data-calculator="physics/acceleration" data-width="500" data-config='{}' data-currency="THB" data-show-row-controls="false" data-version="3" data-t="1556108453836">
            <div class="omni-calculator-header">Simple Linear Motion Calculator</div>
            <div class="omni-calculator-footer">
              <a href="https://www.omnicalculator.com/physics/acceleration" target="_blank"><img alt="Omni" class="omni-calculator-logo" src="https://cdn.omnicalculator.com/embed/omni-calculator-logo-long.svg" /></a>
            </div>
          </div>
          <script async src="https://cdn.omnicalculator.com/sdk.js"></script>
      </div></center>
  </div> 

  <footer class="bg white" style="padding: top 40px;">
      <center>
          <p>CSC105 Web Application Development</p>
          <p>Designed by Arghhhhhh team</p>
          <p>WebsiteExample.com © 2019</p>
      </center>

  </footer>

</body>
</html>



