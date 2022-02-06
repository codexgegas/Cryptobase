<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<!--**************************Header******************************-->
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class=" fa-bars"></label>
  <a href="homepage.html" class="logo">Cryptobase<span>.</span></a>
  <div class="boxContainer">
      <table class="elementsContainer">
        <tr>
          <td>
            <input type="text" placeholder="Search" class="search">
          </td>
          <td>
            <a href="#"><i class="fa fa-search"></i></a>
          </td>
        </tr>
      </table>
    </div>

  <nav class="navbar">
    <a href="homepage.html">Home</a>
    <a href="../index2.php">Live Price</a>
    <a href="about.html">About</a>
    <a href="contact.html">Contact</a>
    <a href="../hotcoin_table.html">Hot coin_table</a>
    <a href="login.php">Sign in|Login</a>
  </nav>
  
</header>
<!--**************************login******************************-->
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
       <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29udGFjdCUyMHVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
        <div class="text">
          <span class="text-1">Don't have an account? <br><br> Sign-up now</span>
          <br><br>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29udGFjdCUyMHVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
        <div class="text">
          <span class="text-1">Already have an account? <br><br> Login now</span>
          <br><br>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="../reset-password.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
