<?php 
	include_once('validate.php');
?>

<html>
<head>
	<title>Examination</title>
	<link rel='stylesheet' href='assets/css/global.css' type='text/css'>
	<link rel='stylesheet' href='assets/css/style.css' type'text/css'>
</head>
<body style='background-color:D3D8E8'>
	<div class='navbar navbar-fixed-top'>
		<div class='navbar-inner'>
			<div class='container'><font face = 'tahoma'>
				<a href='#' class='brand'>Examination</a>
				<form method='POST' action='loginvalidate.php'>
				<ul class='nav pull-right'>
					
					<!--email-->
					<li style='margin-top:-13px'><a href="#"><b>Email</b></a></li>
					<li><input type='text' class='login' onblur='loginEmail();' id='_email' name='login_email'></li>

					<!--password-->
					<li style='margin-top:-13px'><a href="#"><b>Password</b></a></li>
					<li><input type='password' class='login' onblur='loginPassword();' id='_password' name='login_password'></li>


					<li><button class='btn btn-primary pull-right' style='margin-left:5px;margin-top:-9px' type='submit'onclick='return loginAuthenticator();'>Log In</button></li>
				</ul>
			</form>
			</div>
		</div>
	</div>

	<div class='container' style='margin-top:100px'>
		<div class='row'>
			<div class='span5 columns'>
				<!-- <img src='assets/img/test1.jpg' style='height:400px'> -->
			</div>

			<div style='width:450px'class='columns pull-right'>
				<span id='login'></span>
				<font style='font-family:Georgia;font-size:36px'>Registration</font><br><br>
				<font face='Helvetica' style='font-size:19px'>It's free and always will be.</font>
				<hr class='hr'>
				<form method='POST' action='createaccount.php'>
					
					<!--fullname-->
					<input type='text' class='inputs' placeholder='First Name' style='width:200px;' name='fname' id='fname' onblur='check_fname();'>
					<input type='text' class='inputs' placeholder='Last Name' style='width:200px' name='lname' id='lname' onblur='check_lname();'>
					<span id='fullname'></span>
					
					<!--email-->
					<input type='email' class='inputs' placeholder='Email' style='width:410px' name='email' id='email' onblur='check_email();'>
					<span id='help_email'></span>
					
					<!--password-->	
					<input type='password' class='inputs' placeholder='Password' style='width:410px' name='password' id='password' onblur='check_password();'>
					<span id='help_password'></span>


					<input type='password' class='inputs' placeholder='Confirm-Password' style='width:410px' id='c_password' onblur='validate_password();'>
					<span id='confirm'></span>
					<hr class='hr'>

					<br><br><button class='btn btn-success button' name='register' type='submit' name='send' onclick='authenticator();'>Register</button>
				</form>
			</div>
		</div>
	</div>
</body>

<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/admin.min.js"></script>
</body>
</html>