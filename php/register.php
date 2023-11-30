<?php
session_start();
require_once './Config.php';

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate password conditions
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
    // Password does not meet conditions
    $_SESSION['password_error'] = "Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one digit.";
    header("Location: /PaintstART_Files/html/login.php");
    exit(); // Stop further execution
}

// Password meets conditions, proceed with database insertion
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert user data into the database with plain text password
$sql = "INSERT INTO user_profile (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: /PaintstART_Files/html/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
