<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    //<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">


//<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form>
	<form method="POST" action="login.php">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Your username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>


    
  </body>
</html>

<?php
// Check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Connect to the database
	$host = 'localhost';  // replace with your database host
	$dbname = 'ariadologin'; // replace with your database name
	$username = 'admin'; // replace with your database username
	$password = 'admin'; // replace with your database password
	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

	// Get the user's entered username and password
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Query the database for the user's details
	$stmt = $db->prepare("SELECT * FROM register WHERE username=:username AND password=:password");
	$stmt->bindValue(':username', $username);
	$stmt->bindValue(':password', $password);
	$stmt->execute();

	// Check if the user exists
	if ($stmt->rowCount() > 0) {
		// User exists, set session variable and redirect to home page
		session_start();
		$_SESSION['username'] = $username;
		header('Location: home.php');
		exit();
	} else {
		// User does not exist, display error message
		echo "<p>Invalid username or password.</p>";
	}
}
?>
