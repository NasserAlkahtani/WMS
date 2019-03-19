<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
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
  <link rel="stylesheet" type="text/css" href="../STYLES/Signup.css">


<style>

.box_shadow{
    box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    margin-bottom: 30px;
}

.MAIN-DIV{
    position: relative;
    width:50%;
    left:25%;
    right:25%;
    top:25%;
}



</style>
<!--===============================================================================================-->
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


 
                <div class="MAIN-DIV">
                
              
<form  action="../DB/Seed.php" class="box_shadow">
<button type="button" class="btn btn-success btn-lg btn-block">Seed DB</button>
</form>

<form  action="../DB/Clear.php" class="box_shadow">
<button type="button" class="btn btn-danger btn-lg btn-block">Clear DB</button>
</form>



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


