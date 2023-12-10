<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './Config.php';
var_dump($_POST);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
	$fullPortrait = $_POST['new_fullPortrait'];
	$halfBody = $_POST['new_halfBody'];
	$fullLandscape = $_POST['new_fullLandscape'];
	$live2D = $_POST['new_Live2D'];
	$coloredStyle = $_POST['new_coloredStyle'];
	$BNWstyle = $_POST['new_BNWStyle'];
	$revision = $_POST['new_perRevision'];
	$sketch = $_POST['new_sketch'];

	// Update the price details in the art_price table
	$stmtPriceUpdate = $conn->prepare("UPDATE art_price SET portrait=?, halfbody=?, landscape=?, live2d_model=?, colored=?, blacknwhite=?, revision=?, sketch=? WHERE ID=1");

	// Check if the prepare operation succeeded
	if (!$stmtPriceUpdate) {
		die("Error in preparing the statement: " . $conn->error);
	}

	// Bind parameters with appropriate data types
	$bindResult = $stmtPriceUpdate->bind_param("iiiiiiii", $fullPortrait, $halfBody, $fullLandscape, $live2D, $coloredStyle, $BNWstyle, $revision, $sketch);

	// Check if the bind_param operation succeeded
	if (!$bindResult) {
		die("Error in binding parameters: " . $stmtPriceUpdate->error);
	}

	// Execute the statement
	if ($stmtPriceUpdate->execute()) {
		header("Location: /PaintstART_Files/html/adminprofile/adminprofile_priceView.php");
	} else {
		echo "Error updating price: " . $stmtPriceUpdate->error;
	}

	// Close the statement
	$stmtPriceUpdate->close();
}

$conn->close();
?>