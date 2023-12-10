<?php
session_start();
require_once './Config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// Validate password conditions
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
    $_SESSION['password_error'] = "Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one digit.";
    header("Location: /PaintstART_Files/html/login.php");
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the username contains the word "paintAdmin"
if (strpos($username, 'paintAdmin') !== false) {
    // Insert admin data into the database with hashed password
    $sql = "INSERT INTO admin_profile (username, email, password) VALUES (?, ?, ?)";
} else {
    // Insert non-admin user data into the database with hashed password
    $sql = "INSERT INTO user_profile (username, email, password) VALUES (?, ?, ?)";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    header("Location: /PaintstART_Files/html/AccCreate/registeredSuccess.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>