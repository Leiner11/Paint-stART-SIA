<?php
session_start();
require_once '../Config.php';

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Check if userID is set in the session
if (isset($_SESSION['userID'])) {
   $userID = $_SESSION['userID'];
   //echo "User ID: $userID";
} else {
   echo "User ID not set in the session.";
}

// Get the price information
$sql = "SELECT full_portrait, half_body, full_landscape, live2d_model, colored, blacknwhite, revision FROM art_price WHERE ID = 1";

$stmt = $conn->prepare($sql);

// Check for errors in preparing the statement
if (!$stmt) {
   die("Error in preparing the statement: " . $conn->error);
}

$stmt->execute();

// Check for errors in executing the statement
if ($stmt->error) {
   die("Error in executing the statement: " . $stmt->error);
}

$result = $stmt->get_result();

// Check if the price details exists
if ($result->num_rows > 0) {
   $price = $result->fetch_assoc();
} else {
   echo "Details not found.";
}

$stmt->close();
$conn->close();
?>