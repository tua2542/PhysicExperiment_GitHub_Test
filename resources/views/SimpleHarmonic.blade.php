<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simple Harmonic Motion</title>
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
      <h1>Simple Harmonic Motion</h1>
      <p>
        In mechanics and physics, simple harmonic motion is a special type of periodic motion or oscillation where the restoring
        force is directly proportional to the displacement and acts in the direction opposite to that of displacement.
        Simple harmonic motion can serve as a mathematical model for a variety of motions, such as the oscillation of a spring.
        In addition, other phenomena can be approximated by simple harmonic motion, including the motion of a simple pendulum as
        well as molecular vibration. Simple harmonic motion is typified by the motion of a mass on a spring when it is subject
        to the linear elastic restoring force given by Hooke's law. The motion is sinusoidal in time and demonstrates a single
        resonant frequency. For simple harmonic motion to be an accurate model for a pendulum, the net force on the object at
        the end of the pendulum must be proportional to the displacement. This is a good approximation when the angle of the
        swing is small.
      </p>
      <img src="img/SimpleHarmonicMotionSimulator.jpg" class="img-fluid img-thumbnail" alt="SimpleHarmonicMotionSimulator">
    </div>

    <!--เครื่องคิดเลข-->
    <div class="container">
      <center>
        <br><br><br>
        <a href="SimpleHarmonicMotionSimulator"><button type="button" class="btn btn-primary btn-lg">Start Simulator</button></a>
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