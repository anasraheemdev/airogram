<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Login and Registration Form in HTML & CSS | CodingLab </title>
  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



  <?php


  session_start();
  if(isset($_SESSION['username']))
  {
    header("Location: http://localhost/airogram/home.php");
  }
  else{
    
  }


  ?>

  <div class="container">
    <input name="" type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/sign-bg.jpg" alt="">
        <div class="text">
          <span class="text-1">Welcome to Air University <br> Community App</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="back'[ ]'\[Img" src="assets/sinup-bg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="./login.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="email_lg" type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="pass_lg" type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form action="./register-user.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input name="name" type="text" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="email" type="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone"></i>
                <input name="phone" type="text" placeholder="Enter your Phone Number" required>
              </div>
              <div class="input-box">
                <i class="fa fa-calendar"></i>
                <input name="dob" type="date" placeholder="Enter your DOB" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="password" type="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input name="" type="submit" value="Sumbit">
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