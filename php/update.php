<?php
session_start();

if (isset($_SESSION['loggedInUser'])) {
	$current_username = $_SESSION['loggedInUser'];
} else {
	echo ('Invalid account. Re-login again.');
}

require_once './Config.php';

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
	$new_username = $_POST['new_username'];
	$new_raw_password = $_POST['new_password'];
	$current_password = $_POST['current_password'];
	$new_email = $_POST['new_email'];
	$new_firstName = $_POST['new_firstname'];
	$new_lastName = $_POST['new_lastname'];
	$twitter = $_POST['twitter'];

	// User_profile for non-admins
	$stmtUser = $conn->prepare("SELECT password FROM user_profile WHERE username = ?");
	$stmtUser->bind_param("s", $current_username);
	$stmtUser->execute();
	$stmtUser->bind_result($hashed_password_user);
	$stmtUser->fetch();
	$stmtUser->close();

	if (password_verify($current_password, $hashed_password_user)) {
		// Hash the new password
		$hashed_new_password = password_hash($new_raw_password, PASSWORD_DEFAULT);

		// Update the user details in the user_profile table
		$stmtUserUpdate = $conn->prepare("UPDATE user_profile SET username=?, password=?, firstname=?, lastname=?, email=?, twitter=? WHERE username=?");
		$stmtUserUpdate->bind_param("sssssss", $new_username, $hashed_new_password, $new_firstName, $new_lastName, $new_email, $twitter, $current_username);

		if ($stmtUserUpdate->execute()) {
			header("Location: /PaintstART_Files/html/userprofile/userprofile.php");
			exit;
		} else {
			echo "Error updating username and password in user_profile table: " . $stmtUserUpdate->error;
		}

		$stmtUserUpdate->close();
	} else {
		echo "Incorrect current password.";
	}
}

$conn->close();
?>