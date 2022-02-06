<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/code.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
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
        <a href="logout.php">Logout</a>
        
      </div>
    </div>
    </nav>
  
</header>
<br><br><br><br>
</head>

<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="deleting.php" class="btn btn-warning">Delete Account</b></a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>

<br><br><br><br><br><br>

<footer>
 
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <i class="fa fa-bitcoin"></i>
        <span class="logo-name">CRYPTObase.co.in</span>
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
      <span class="copyright_text">Copyright Â© 2021 <a href="#">CRYPTObase.co.in</a>All rights reserved</span>
    </div>
  </div>
  <div id ='market'>
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,5426,2010,52,5994,74,6636" currency="INR" theme="dark" transparent="false" show-symbol-logo="true"></div>
  </div>>
</footer>