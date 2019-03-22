<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../STYLES/util.css">
	<link rel="stylesheet" type="text/css" href="../STYLES/main.css">
  <link rel="stylesheet" type="text/css" href="../STYLES/Signin.css">

<!--===============================================================================================-->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand" href="C:\Users\FahadLT\Desktop\warehouse\startbootstrap-bare-gh-pages\index.html">WMS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
	
					<li class="nav-item">
						<a class="nav-link" href="Signin.php">Sing in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Signup.php">Sign up</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="DB.php">Data Base seeder</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?php 

session_start();
if(isset($_SESSION['Msg'])){
if($_SESSION['Msg'] != "" ){

echo $_SESSION['Msg'] ; 

$_SESSION["Msg"] = "";

}
}



?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

				<form class="login100-form  flex-sb flex-w" action="../INC/Signin.inc.php" method="post">
					<span class="login100-form-title p-b-51">
						Sign in
					</span>
 

					<div class="wrap-input100  m-b-16" data-validate = "Username is required" >
						<input name="email" class="input100" type="text" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100  m-b-16" data-validate = "Password is required" >
						<input name="pass"  class="input100" type="password"  placeholder="Password">
						<span class="focus-input100"></span>
					</div>

			

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>

        
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>
