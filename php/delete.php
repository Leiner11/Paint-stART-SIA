<?php
session_start();
require_once './Config.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';
  $email = $_POST['email'] ?? '';
  $action = $_POST['action'] ?? '';

  // Verify that the action is to delete the account
  if ($action == "PERMANENTLY DELETE ACCOUNT") {
    // Use prepared statements to prevent SQL injection
    $sqlUser = "SELECT * FROM user_profile WHERE username = ? AND email = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("ss", $username, $email);
    $stmtUser->execute();

    if ($stmtUser->error) {
      die("Error executing user profile statement: " . $stmtUser->error);
    }

    $resultUser = $stmtUser->get_result();

    $sqlAdmin = "SELECT * FROM admin_profile WHERE username = ? AND email = ?";
    $stmtAdmin = $conn->prepare($sqlAdmin);
    $stmtAdmin->bind_param("ss", $username, $email);
    $stmtAdmin->execute();

    if ($stmtAdmin->error) {
      die("Error executing admin profile statement: " . $stmtAdmin->error);
    }

    $resultAdmin = $stmtAdmin->get_result();

    $userFound = false;

    if ($resultUser->num_rows == 1) {
      $user = $resultUser->fetch_assoc();
      $userFound = true;
      $sourceTable = 'user_profile';
    } elseif ($resultAdmin->num_rows == 1) {
      $user = $resultAdmin->fetch_assoc();
      $userFound = true;
      $sourceTable = 'admin_profile';
    }

    if ($userFound) {
      $hashedPassword = $user['password'];

      // Verify the entered password against the stored hashed password
      if (password_verify($password, $hashedPassword)) {

        // Move the user details to the archive_profile table
        $sqlMoveUser = "INSERT INTO archive_profile (firstname, lastname, username, email, 
                                password, twitter) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtMoveUser = $conn->prepare($sqlMoveUser);
        $stmtMoveUser->bind_param(
          "ssssss",
          $user['firstname'],
          $user['lastname'],
          $user['username'],
          $user['email'],
          $user['password'],
          $user['twitter']
        );

        $stmtMoveUser->execute();

        if ($stmtMoveUser->error) {
          die("Error executing move user statement: " . $stmtMoveUser->error);
        }

        // Proceed with deleting the user from the source table
        $sqlDeleteUser = "DELETE FROM $sourceTable WHERE username = ? AND email = ?";
        $stmtDeleteUser = $conn->prepare($sqlDeleteUser);
        $stmtDeleteUser->bind_param("ss", $username, $email);

        $stmtDeleteUser->execute();

        if ($stmtDeleteUser->error) {
          die("Error executing delete user statement: " . $stmtDeleteUser->error);
        }
        
        // Logout the user and redirect to delete success page
        if (session_status() == PHP_SESSION_ACTIVE) {
          unset($_SESSION['userLoggedIn']);
          session_destroy();

          header("Location: /PaintstART_Files/html/AccDelete/deleteSuccess.html");
          exit();
        }

        $stmtDeleteUser->close();
      }
      $stmtMoveUser->close();
    }
    $stmtUser->close();
    $stmtAdmin->close();
  }
}
$conn->close();
?>