<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/AboutUsStyle.css') }}">
</head>


<body class="bg">

  <nav class="navbar navbar-expand-md bg navbar-dark sticky-top">
    <img src="img/logo.png" alt="logo" width="70px" height="55px">
    <!--logo-->
    <a class="navbar-brand" id="motion" href="/motion">Motion</a>
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


  <div class="white-bg" id="padup" style="align-items: center;">


    <center>
      <h2 class="background container" id="padup"><span>About Us</span></h2>
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-4">
              <img src="img/mai.jpg" class="w-100" alt="mai">
            </div>
            <div class="col-md-8 px-3">
              <div class="card-block px-3">
                <br>
                <p class="card-text" id="card-content"> <strong>Name:</strong> Ms.Natthida Thammasorn</p>
                <p class="card-text" id="card-content"><strong>Student ID :</strong> 61130500209</p>
                <p class="card-text" id="card-content"><strong>Position :</strong>BackEnd Developer</p>
                <br>

              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-4">
              <img src="img/praw.jpg" class="w-100" alt="praw">
            </div>
            <div class="col-md-8 px-3">
              <div class="card-block px-3">
                <br>
                <p class="card-text" id="card-content"> <strong>Name:</strong> Ms.Phruksachat Yaogul</p>
                <p class="card-text" id="card-content"><strong>Student ID :</strong> 61130500219</p>
                <p class="card-text" id="card-content"><strong>Position :</strong> Web Designer/FrontEnd Developer</p>
                <br>

              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-4">
              <img src="img/tua.jpg" class="w-100" alt="tua">
            </div>
            <div class="col-md-8 px-3">
              <div class="card-block px-3">
                <br>
                <p class="card-text" id="card-content"> <strong>Name:</strong> Mr.Sakdipat Ontoum</p>
                <p class="card-text" id="card-content"><strong>Student ID :</strong> 61130500229</p>
                <p class="card-text" id="card-content"><strong>Position :</strong> FrontEnd Developer</p>
                <br>

              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-4">
              <img src="img/film.jpg" class="w-100" alt="film">
            </div>
            <div class="col-md-8 px-3">
              <div class="card-block px-3">
                <br>
                <p class="card-text" id="card-content"> <strong>Name:</strong> Mr.Chirayu Phromchan</p>
                <p class="card-text" id="card-content"><strong>Student ID :</strong> 61130500255</p>
                <p class="card-text" id="card-content"><strong>Position :</strong> Physic JavaScript Developer</p>
                <br>

              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container py-3">
        <div class="card">
          <div class="row ">
            <div class="col-md-4">
              <img src="img/BigO.jpg" class="w-100" alt="BigO">
            </div>
            <div class="col-md-8 px-3">
              <div class="card-block px-3">
                <br>
                <p class="card-text" id="card-content"> <strong>Name:</strong> Mr.Parin Sasiwannakul</p>
                <p class="card-text" id="card-content"><strong>Position :</strong> Mentor/Supporter</p>
                <br>

              </div>
            </div>

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