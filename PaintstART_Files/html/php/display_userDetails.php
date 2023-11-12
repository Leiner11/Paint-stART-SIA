<?php
session_start();
require_once './Config.php';

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Check if userID is set in the session
if (isset($_SESSION['userID'])) {
   $userID = $_SESSION['userID'];
   echo "User ID: $userID";
} else {
   echo "User ID not set in the session.";
}

// Get the user's information from the database
$sql = "SELECT username, firstname, lastname, email, twitter FROM user_profile WHERE userID = ?";
$stmt = $conn->prepare($sql);

// Check for errors in preparing the statement
if (!$stmt) {
   die("Error in preparing the statement: " . $conn->error);
}

$stmt->bind_param("i", $userID);

// Check for errors in binding parameters
if (!$stmt) {
   die("Error in binding parameters: " . $stmt->error);
}

$stmt->execute();

// Check for errors in executing the statement
if (!$stmt) {
   die("Error in executing the statement: " . $stmt->error);
}

$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
   $user = $result->fetch_assoc();
} else {
   echo "User not found.";
}
      
// Close the statement
$stmt->close();
// Close the connection
$conn->close();
