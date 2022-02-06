<?php
//Initialize the connection
include_once "parts/config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
//Initialise Var
$user=$name=$Email=$Message= '?';

if($_POST['send'])
{
	$user=$_SESSION['username'];
  $sql = "UPDATE `contacts` set name='$_POST[name]', Email='$_POST[email]', message='$_POST[message]',  WHERE username='$_SESSION[username]'";
  $sql_run=mysqli_querry($conn,$sql_run);
	 if($sql_run)
{
  echo '<script> type="test/javascript"> alert ("data saved") </script>';
} else {
  echo '<script> type="test/javascript"> alert ("data not saved") </script>';

}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="assets/css/homepage.css">
  <link rel="stylesheet" href="assets/css/code.css">
  <link rel="stylesheet" href="assets/css/market.css">
  <link rel="stylesheet" href="assets/css/Settings.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fa fa-bars"></label>
  <a href="homepage.html" class="logo">Cryptobase<span>.</span></a>
  

  <nav class="navbar">

    <a  href="homepage.html"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="index.php"><i class="fa fa-fw fa-bitcoin"></i> Live Prices</a>
    <a href="about.html"><i class="fa fa-fw facility-icon"></i> About</a>
    <a href="contactform.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="hotcoins.html"><i class="fa fa-fw fa-bitcoin"></i> Hot Coins</a>
    <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
    
    <div class="dropdown">
      <button class="Setings"> Setings</button>
      <div class="dropdown-content">
        <a href="welcome.php">User Setings</a>
        <a href="logout.php">LogOut</a>
        
      </div>
    </div>
    </nav>
  
</header>
	  <br><br><br><br>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="assets/images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<span class="contact100-form-symbol">
				<img src="assets/images/icons/symbol-01.png" alt="SYMBOL-MAIL">
			</span>

			<form class="contact100-form validate-form flex-sb flex-w">
				<span class="contact100-form-title">
					Drop Us A Message
				</span>

				<div class="wrap-input100 rs1 validate-input" data-validate = "Name is required">
					<input class="input100" type="text" name="hname" placeholder="Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1 validate-input" data-validate = "Email is required: e@a.z">
					<input class="input100" type="text" name="email" placeholder="Email Address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100" name="message" placeholder="Write Us A Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="send">
					<button class="contact100-form-btn"  input type ='send'name='send' >
						Send
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fa fa-bitcoin"></i>
          <span class="logo-name">Cryptobase.co.in</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <br>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Links</li>
          <br>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Coin info.</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">My wallet</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <br>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">About</li>
          <br>
          <li><a href="#">Our Services</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms&Conditions</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">For more news&updates</li>
          <br>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">CRYPTObase.co.in</a>All rights reserved</span>
      </div>
    </div>
    
  </footer>
