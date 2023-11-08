<?php
session_start();
if (isset($_SESSION['loggedInUser'])) {
    $current_username = $_SESSION['loggedInUser'];
} 	
else {
	echo('Invalid account. Re-login again.');
}

$servername = "localhost";
$username = "Group4PS_Admin";
$password = "group_4_PS!!!1111";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

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

	$sql = "UPDATE user_profile SET username='$new_username', password='$new_password', 
	firstname='$new_firstName', lastname='$new_lastName',  email='$new_email' 
		WHERE username='$current_username' AND password='$current_password'";

		if ($conn->query($sql) === TRUE) {
			echo "Username and password updated successfully.";
		} else {
			echo "Error updating username and password: " . $conn->error;
		}
}
$conn->close();
?>