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

	// Admin_profile for admins
	$stmtAdmin = $conn->prepare("SELECT password FROM admin_profile WHERE username = ?");
	$stmtAdmin->bind_param("s", $current_username);
	$stmtAdmin->execute();
	$stmtAdmin->bind_result($hashed_password_admin);
	$stmtAdmin->fetch();
	$stmtAdmin->close();

	if (password_verify($current_password, $hashed_password_admin)) {
		// Hash the new password
		$hashed_new_password = password_hash($new_raw_password, PASSWORD_DEFAULT);

		// Update the admin details in the admin_profile table
		$stmtAdminUpdate = $conn->prepare("UPDATE admin_profile SET username=?, password=?, firstname=?, lastname=?, email=?, twitter=? WHERE username=?");
		$stmtAdminUpdate->bind_param("sssssss", $new_username, $hashed_new_password, $new_firstName, $new_lastName, $new_email, $twitter, $current_username);

		if ($stmtAdminUpdate->execute()) {
			header("Location: /PaintstART_Files/html/adminprofile/adminprofile.php");
			exit;
		} else {
			echo "Error updating username and password in admin_profile table: " . $stmtAdminUpdate->error;
		}

		$stmtAdminUpdate->close();
	} else {
		echo "Incorrect current password.";
	}
}

$conn->close();
?>