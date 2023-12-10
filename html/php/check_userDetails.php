<?php
session_start();
require_once '../Config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM user_profile WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in statement preparation: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();

    if ($stmt->error) {
        die("Error in statement execution: " . $stmt->error);
    }

    $result = $stmt->get_result();

    $detailsAreCorrect = false;

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $hashedPassword = $user['password'];

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $hashedPassword)) {
            $detailsAreCorrect = true;
        }
    }

    echo json_encode(['detailsAreCorrect' => $detailsAreCorrect]);

    $stmt->close();
}

$conn->close();
?>