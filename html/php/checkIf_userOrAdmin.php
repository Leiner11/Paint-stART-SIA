<?php
require_once '../Config.php';
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['userID'])) {
    $user_ID = $_SESSION['userID'];

    $adminsql = "SELECT username FROM admin_profile WHERE userID = ?";
    $userSql = "SELECT username FROM user_profile WHERE userID = ?";

    $stmtAdmin = $conn->prepare($adminsql);
    $stmtUser = $conn->prepare($userSql);

    if ($stmtAdmin && $stmtUser) {
        $stmtAdmin->bind_param("i", $user_ID);
        $stmtUser->bind_param("i", $user_ID);

        $stmtAdmin->execute();
        $resultAdmin = $stmtAdmin->get_result();
        
        $stmtUser->execute();
        $resultUser = $stmtUser->get_result();

        if ($resultAdmin->num_rows > 0 || $resultUser->num_rows > 0) {
            // Check if the username contains the word "paintAdmin"
            if ($resultAdmin->num_rows > 0) {
                header('Location: ../adminprofile/adminprofile.php');
                exit;
            } else {
                header('Location: ../userprofile/userprofile.php');
                exit;
            }
        } else {
            echo "No user found in the database";
        }
        $stmtAdmin->close();
        $stmtUser->close();
    } else {
        echo "Error preparing the database query: " . $conn->error;
    }
} else {
    echo "Login error. Please login again.";
}

$conn->close();
?>