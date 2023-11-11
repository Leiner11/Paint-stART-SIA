<?php
session_start();
require_once './Config.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's entered email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database for the user's details
$sql = "SELECT * FROM user_profile WHERE email=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
    // User exists, set session variable and redirect to home page
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['username'];
    $_SESSION['loggedInUser'] = $user['username'];
    header("Location: check_login.php");
    exit();
} else {
    // User does not exist, display error message
    echo "<p>Invalid username or password.</p>";
}

// Close the statement
$stmt->close();
// Close the connection
$conn->close();
?>
