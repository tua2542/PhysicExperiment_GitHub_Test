<!DOCTYPE html>
<html lang="en">

<head>
  <title>Incoming Features</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

</head>

<body class="bg">

  <nav class="navbar navbar-expand-lg  bg navbar-dark sticky-top">
    <img src="img/logo.png" alt="logo" width="70px" height="55px">
    <!--logo-->
    <a class="navbar-brand" id="motion" href="/motion">Motion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <!--ปุ่มย่อ nav-->
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <!--link ในนี้จะอยู่ใน toggle-->

      <ul class="navbar-nav">
        <li class="nav-item dropdown" id="navbar">
          <!--drop link-->
          <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">Experiment</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Linear">Linear Motion</a>
            <a class="dropdown-item" href="Projectile">Projectile Motion</a>
            <a class="dropdown-item" href="SimpleHarmonic">Simple Harmonic Motion</a>
          </div>
        </li>
        <li class="nav-item" id="navbar">
          <a class="nav-link" href="news">News</a>
          <!--general link-->
        </li>
        <li class="nav-item" id="navbar">
          <a class="nav-link" href="IncomingFeatures">Incoming Feature</a>
        </li>
        <li class="nav-item" id="navbar">
          <a class="nav-link" href="AboutUs">About Us</a>
        </li>
        <!--member-->
        <li class="nav-item dropdown signin" id="navbar">
          <div class="member">
            @csrf
            @if(!Auth::check())
            <a class="nav-link" href="SignIn">Sign in</a>
            @else
            <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">Hello : {{Auth::User()->email}}</a>

            <div class="dropdown-menu">
              <!-- <a class="dropdown-item" href="#">Edit Profile</a> -->
              <a class="dropdown-item" href="logout">Log Out</a>
              @endif
            </div>
          </div>
        </li>
      </ul>
  </nav>
  </div>

  <div class="white-bg" style="height:508px">
    <center>
      <br><br><br><br><br><br>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <img src="img/gear-icons.png" class="card-img" alt="gear">
          </div>
          <div class="col-md-8">
            <div class="card-body">

              <h5 class="card-title">Get Premium</h5>
              <p class="card-text">During Under Contruction</p>
              <strong>
                <p class="card-text">It is comming soon !!!</p>
              </strong>

            </div>
          </div>
        </div>
      </div>
    </center>

  </div>

  <footer class="bg white" style="padding: top 40px;">
    <center>
      <p>CSC105 Web Application Development</p>
      <p>Designed by Arghhhhhh team</p>
      <p>physicsmotionexperiments.azurewebsites.net © 2019</p>
    </center>

  </footer>

</body>

</html>