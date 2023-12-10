<?php
session_start();
require_once './Config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Query the user_profile table for the user's details
$sqlUser = "SELECT * FROM user_profile WHERE email=?";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bind_param("s", $email);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();

// Query the admin_profile table for the user's details
$sqlAdmin = "SELECT * FROM admin_profile WHERE email=?";
$stmtAdmin = $conn->prepare($sqlAdmin);
$stmtAdmin->bind_param("s", $email);
$stmtAdmin->execute();
$resultAdmin = $stmtAdmin->get_result();

// Check if the user exists in user_profile
if ($resultUser->num_rows > 0) {
    $user = $resultUser->fetch_assoc();
    $hashedPassword = $user['password'];
} elseif ($resultAdmin->num_rows > 0) {
    // Check if the user exists in admin_profile
    $user = $resultAdmin->fetch_assoc();
    $hashedPassword = $user['password'];
} else {
    // User does not exist, set error message and redirect to login page
    $_SESSION['loginError'] = "Invalid username or password.";
    header("Location: /PaintstART_Files/html/login.php");
    exit();
}

// Verify the entered password against the stored hashed password
if (password_verify($password, $hashedPassword)) {
    // Password is correct, set session variables and redirect to home page
    $userID = $user['userID'];

    $_SESSION['username'] = $user['username'];
    $_SESSION['userID'] = $userID;
    $_SESSION['loggedInUser'] = $user['username'];

    header("Location: check_login.php");
    exit();
} else {
    // Password is incorrect, set error message and redirect to login page
    $_SESSION['loginError'] = "Invalid username or password.";
    header("Location: /PaintstART_Files/html/login.php");
    exit();
}

$stmtUser->close();
$stmtAdmin->close();
$conn->close();
?>
