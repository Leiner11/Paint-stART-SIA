<?php
require_once '../Config.php';
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if userID is set in the session
if (isset($_SESSION['userID'])) {
    $user_ID = $_SESSION['userID'];

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT username FROM user_profile WHERE userID = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $user_ID);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Fetch the result as an associative array
            $row = $result->fetch_assoc();

            // Debugging line
            var_dump($row['username']);

            // Check if the username contains the word "paint_admin"
            if (strpos($row['username'], 'admin') !== false) {
                header('Location: ../adminprofile/adminprofile.php');
                exit;
            } else {
                header('Location: ../userprofile/userprofile.php');
                exit;
            }
        } else {
            echo "No user found in the database";
        }
        $stmt->close();
    } else {
        echo "Error preparing the database query: " . $conn->error;
    }
} else {
    echo "Login error. Please login again.";
}

$conn->close();
?>