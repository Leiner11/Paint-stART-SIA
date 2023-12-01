<?php
session_start();
require_once './Config.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';
  $confirm_password = $_POST['confirm_password'] ?? '';
  $email = $_POST['email'] ?? '';
  $action = $_POST['action'] ?? '';

  // Verify that the action is to delete the account
  if ($action == "PERMANENTLY DELETE ACCOUNT") {
    // Validate and hash the password
    // ... (Check password conditions and hash the password)

    // Use prepared statements to prevent SQL injection
    $sqlUser = "SELECT * FROM user_profile WHERE username = ? AND email = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("ss", $username, $email);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();

    $sqlAdmin = "SELECT * FROM admin_profile WHERE username = ? AND email = ?";
    $stmtAdmin = $conn->prepare($sqlAdmin);
    $stmtAdmin->bind_param("ss", $username, $email);
    $stmtAdmin->execute();
    $resultAdmin = $stmtAdmin->get_result();

    $userFound = false;

    if ($resultUser->num_rows == 1) {
      $user = $resultUser->fetch_assoc();
      $userFound = true;
    } elseif ($resultAdmin->num_rows == 1) {
      $user = $resultAdmin->fetch_assoc();
      $userFound = true;
    }

    if ($userFound) {
      $hashedPassword = $user['password'];

      // Verify the entered password against the stored hashed password
      if (password_verify($password, $hashedPassword)) {
        
        // Perform the account deletion
        $sqlDeleteUser = "DELETE FROM user_profile WHERE username = ? AND email = ?";
        $stmtDeleteUser = $conn->prepare($sqlDeleteUser);
        $stmtDeleteUser->bind_param("ss", $username, $email);

        $sqlDeleteAdmin = "DELETE FROM admin_profile WHERE username = ? AND email = ?";
        $stmtDeleteAdmin = $conn->prepare($sqlDeleteAdmin);
        $stmtDeleteAdmin->bind_param("ss", $username, $email);

        if ($stmtDeleteUser->execute() || $stmtDeleteAdmin->execute()) {
          // Logout the user and redirect to delete success page
          if (session_status() == PHP_SESSION_ACTIVE) {
            // Unset specific session variables
            unset($_SESSION['userLoggedIn']);
            session_destroy();

            header("Location: /PaintstART_Files/html/AccDelete/deleteSuccess.html");
            exit();
          }
        } else {
          echo "Error deleting account.";
        }

        $stmtDeleteUser->close();
        $stmtDeleteAdmin->close();
      } else {
        echo "Incorrect password.";
      }
    } else {
      echo "User not found.";
    }

    $stmtUser->close();
    $stmtAdmin->close();
  }
}

// Close the database connection
$conn->close();
?>