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
  <link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/LinearSimulatorReal.css') }}">

</head>

<body class="bg">

  <nav class="navbar navbar-expand-md bg navbar-dark sticky-top">
    <img src="img/logo.png" alt="logo" width="70px" height="55px">
    <!--logo-->
    <a class="navbar-brand" id="motion" href="/welcome">Motion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <!--ปุ่มย่อ nav-->
    </button>

    <div class="collapse navbar-collapse  " id="navbarsExampleDefault">
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
  </nav> <br>
  </div>



  <div class="white-bg space">
    <div class="container">
      <h1>Linear Motion</h1>
      <p>
        Linear motion (also called rectilinear motion) is a one-dimensional motion along a straight line, and can therefore be described mathematically
        using only one spatial dimension. The linear motion can be of two types: uniform linear motion with constant velocity or zero acceleration;
        non uniform linear motion with variable velocity or non-zero acceleration.
      </p>
      <img src="img/LinearMotionSimulator.jpg" class="img-fluid img-thumbnail" alt="LinearMotionSimulator">
    </div>

    <!--เครื่องคิดเลข-->
    <div class="container">
      <center>
        <br><br><br>
        <a href="LinearMotionSimulator"><button type="button" class="btn btn-primary btn-lg">Start Simulator</button></a>
        <br><br><br><br><br><br>
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