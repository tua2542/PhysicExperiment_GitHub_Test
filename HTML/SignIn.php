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
	<link rel="icon" href="img/Mlogo.gif">
	<link rel="stylesheet" type="text/css" href="css/sign_in_css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container">
			<div>
				<form class="form ">
					<span class="title">
						Sign In
					</span>

					<div class="space">
						<input class="input" type="email" name="Email" placeholder="Email">
						
					</div>

					<div>
						<input class="input" type="password" name="Password" placeholder="Password">
						
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
								    <form class="form ">
								      <span class="title">Sign Up</span>
<!-- 						
								    <div class="space">
										<input class="input" type="text" name="username" placeholder="username">
									</div> -->
						     	<div class="space">
						         <input class="input" type="email" name="Email" placeholder="Email">
						
					          </div>
									<div class="space">
									    <input class="input" type="text" name="firstname" placeholder="Firstname">  
										</div>

										<div class="space">
											<input class="input" type="text" name="lastname" placeholder="Lastname">
										</div>
						
									<div class="space">
									    <input class="input" type="number" name="phonenumber" placeholder="Phone Number">  
									</div>
											
						
								    <div class="space">
									    <input class="input" type="password" name="password" placeholder="Password">  
										</div>

										<div class="space">
											<input class="input" type="password" name="confirmpassword" placeholder="Confirm Password">
										</div>
						
								    <div class="containersigninbutton">
									    <button class="signinbutton">Create accout</button>
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