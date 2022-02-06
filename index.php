
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" href="assets/css/code.css">
  <link rel="stylesheet" href="assets/css/market.css">
  <link rel="stylesheet" href="assets/css/drop.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--**************************Header******************************-->
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
<br><br><br><br><br><br><br><br><br>

<?php
include "parts/config.php"; ?>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php 
$sql="SELECT * from `coin_table`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>
<div class="converter">
<!-- Crypto Converter ⚡ Widget --><crypto-converter-widget shadow symbol live background-color="#000000" border-radius="0.60rem" fiat="united-states-dollar" crypto="bitcoin" amount="1" decimal-places="2"></crypto-converter-widget><a href="https://currencyrate.today/" target="_blank" rel="noopener"></a><script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script><!-- /Crypto Converter ⚡ Widget --></div>
</br>
</br>
<div class="container">
    <table class ="table table-hover">

    <thread>
    <tr> 
    <th>logo</th>
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>Persent Change 24h</th>
    <th>total volume</th>
    <th>Market Cap</th>

    </tr>
</tread>

<?php
while ($row = mysqli_fetch_assoc($result)){ 
?>
<tr><td> <?php echo "<img src='{$row['logo']}' width='25' height='25'>"?>
</td>
    <td> <?php echo  $row['id']; ?></td>
<td>
    <?php echo  $row['coin_id']; ?>
    </td>
    <td>
    <?php echo  $row['symbol']; ?>
    </td>
    <td>
    <?php echo  $row['price']; ?>
    </td>
    <td>
    <?php echo  $row['percent_change_24h']; ?>
    </td>
    <td>
    <?php echo  $row['total_volume']; ?>
    </td>
    <td>
    <?php echo $row['market_cap']; ?>
    </td>
    <td>
</tr>
<?php }?>
</table>
</div>



</body>

<br>

<br>
<br>
<br>

<footer>
<!--**************************Footer******************************-->
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
        <span class="copyright_text">Copyright © 2021 <a href="#">CRYPTObase.co.in</a>All rights reserved</span>
      </div>
    </div>
    <div id ='market'>
      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,5426,2010,52,5994,74,6636" currency="INR" theme="dark" transparent="false" show-symbol-logo="true"></div>
    </div>>
  </footer>