<?php
	session_start();
	
	// Connect to the database
	$host = 'localhost'; 
	$dbname = 'users'; 
	$username = 'Group4PS_Admin'; 
	$password = 'group_4_PS!!!1111'; 
	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

	// Get the user's entered email and password
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Query the database for the user's details
	$stmt = $db->prepare("SELECT * FROM user_profile WHERE email=:email AND password=:password");
	$stmt->bindValue(':email', $email);
	$stmt->bindValue(':password', $password);
	$stmt->execute();

	// Check if the user exists
	if ($stmt->rowCount() > 0) {
		// User exists, set session variable and redirect to home page
		$user = $stmt->fetch();
		$_SESSION['username'] = $user['username'];
		$_SESSION['loggedInUser'] = $user['username'];
		header("Location: check_login.php");
		exit();
	} else {
		// User does not exist, display error message
		echo "<p>Invalid username or password.</p>";
	}
?>