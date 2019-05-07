<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="icon" href="{{ URL::asset('img/Mlogo.gif') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/sign_in_css.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="limiter">
		<div class="container">
			<div>
				<form class="form" action="{{ url('login') }}" method="POST">
					@csrf
					<span class="title">
						Sign In
					</span>

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<div class="space">
						<input class="input form-control { $errors->has('email')?'is-invalid' : ''}}" type="email" name="email" placeholder="Email" value="{{old('email')}}">

					</div>

					<div>
						<!-- <input class="input" type="password" name="Password" placeholder="Password" value=""> -->
						<input class="input form-control {{ $errors->has('password')?'is-invalid' : ''}}" type="password" name="password" placeholder="Password">

					</div>

					<!-- <div class="text-right">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div> -->

					<div class="containersigninbutton">
						<button class="signinbutton">
							Sign in
						</button>
					</div>

					<div class="col">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3" data-toggle="modal" data-target="#myModal">Sign up now</a>

					</div>
				</form>
			</div>




			<!-- T Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!----- Modal body--- -->
						<div class="modal-body"> <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="limiter">
								<div class="container">
									<div>
										<form class="form" action="{{ url('signup') }}" method="POST">
											@csrf
											<span class="title">Sign Up</span>
											<!-- 						
								    <div class="space">
										<input class="input" type="text" name="username" placeholder="username">
									</div> -->

											<div class="space">
												<!-- <input class="input" type="text" name="firstname" placeholder="Firstname"> -->
												<input id="firstname" type="text" class="input form-control" name="firstname" placeholder="Firstname" required>
											</div>

											<div class="space">
												<!-- <input class="input" type="text" name="lastname" placeholder="Lastname"> -->
												<input id="lastname" type="text" class="input form-control" name="lastname" placeholder="Lastname" required>
											</div>

											<div class="space">
												<!-- <input class="input" type="text" name="email" placeholder="Email"> -->
												<input id="email" type="email" class="input form-control" name="email" placeholder="Email" required>
											</div>

											<div class="space">
												<!-- <input class="input" type="password" name="password" placeholder="Password"> -->
												<input id="password" type="password" class="input form-control" name="password" placeholder="Password" required>
											</div>

											<!-- <div class="space">
												<input class="input" type="password" name="confirmpassword" placeholder="Confirm Password">
											</div> -->

											<div class="containersigninbutton">
												<button class="signinbutton" type="submit">Create accout</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




		</div>
	</div>



</body>

</html>