<?php
session_start();
if (isset($_SESSION['loggedInUser'])) {
    $current_username = $_SESSION['loggedInUser'];
} 	
else {
	echo('Invalid account. Re-login again.');
}

require_once './Config.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the user submitted the form to update the username and password, update the database
if (isset($_POST['update'])) {
	$new_username = $_POST['new_username'];
	$new_password = $_POST['new_password'];
	$current_password = $_POST['current_password'];
	$new_email = $_POST['new_email'];
	$new_firstName = $_POST['new_firstname'];
	$new_lastName = $_POST['new_lastname'];
	$twitter = $_POST['twitter'];

	$sql = "UPDATE user_profile SET username='$new_username', password='$new_password', 
	firstname='$new_firstName', lastname='$new_lastName',  email='$new_email', twitter='$twitter' 
		WHERE username='$current_username' AND password='$current_password'";

		if ($conn->query($sql) === TRUE) {
			echo "Username and password updated successfully.";
		} else {
			echo "Error updating username and password: " . $conn->error;
		}
}
$conn->close();
