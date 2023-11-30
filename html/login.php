<?php
session_start();
require_once './Config.php';

if (isset($_SESSION['password_error'])) {
  $passwordError = $_SESSION['password_error'];
  unset($_SESSION['password_error']); // Clear the session variable
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account Details</title>
  <link rel="stylesheet" href="style.css" />

  <?php if (isset($passwordError)) : ?>
    <script>
      window.onload = function() {
        alert("<?php echo $passwordError; ?>");
      };
    </script>
  <?php endif; ?>

</head>

<body>
  <header>
    <h2 class="logo"></h2>
    <nav class="navigation">
      <a href="/PaintstART_Files/html/index.php">Home</a>
      <a href="/PaintstART_Files/html/album-client/HoriClientPortfolio.php">Digital Art Works</a>
      <a href="/PaintstART_Files/html/checkout/checkout.php">Request Commission Now</a>
      <button class="btnLogin-popup">Login</button>
    </nav>
  </header>

  <div class="wrapper">
    <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
    <div class="form-box login">
      <h2>Login to Paint stART</h2>
      <form action="/PaintstART_Files/php/login_process.php" method="POST">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" name="email" id="email" required />
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="password" id="password" required />
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox" id="rememberMe-checkbox" /> Remember
            me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p>
            Don't have an account yet?
            <a href="#" class="register-link">Register</a>
          </p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>Registration</h2>
      <form action="/PaintstART_Files/php/register.php" method="POST">
        <div class="input-box">
          <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
          <input type="text" name="username" id="username" required />
          <label>Username</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" name="email" id="email" required />
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="password" id="password" required />
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label>
            <input type="checkbox">
            I agree to the <a href="./termsofService.html" target="_blank">terms of service</a>
          </label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-register">
          <p>
            Already have an account? <a href="#" class="login-link">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>