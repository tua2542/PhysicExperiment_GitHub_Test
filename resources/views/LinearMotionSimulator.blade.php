<html lang="en">

<head>
    <title>Linear Motion Simulator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/LinearMotionSimulator.css') }}">
</head>

<body>
    Distance(m.): <input type="number" id="distance" value="0"> <button onclick="worldAdd()">Add</button>
    <br><br>
    Velocity: <input type="number" id="velocity" value="0">
    Acceleration: <input type="number" id="acceleration" value="0">
    <button onclick="worldApply()">Apply Simulation</button>
    <br><br>
    <button onclick="worldReset()">Reset</button>
    <br>
    <script language="javascript" type="text/javascript" src="{{ URL::asset('js/matter.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ URL::asset('js/setup1.js') }}"></script>
</body>

</html>