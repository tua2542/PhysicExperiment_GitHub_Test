<html lang="en">

<head>
  <title>Simple Harmonic Motion Simulator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/SimpleHarmonicMotionSimulator.css') }}">
</head>
Omega = <input type="text" class="omega" value="0">
A = <input type="text" class="A" value="0">
B = <input type="text" class="B" value="0">
<br>
<canvas></canvas>
<br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ URL::asset('js/setup3.js') }}"></script>
</body>

</html>