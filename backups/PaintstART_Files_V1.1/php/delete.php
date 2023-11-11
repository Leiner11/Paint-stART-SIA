<?php
require_once './Config.php';

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $email = $_POST['email'] ?? '';

    // Rest of your code...
    $sql = "SELECT * FROM user_profile WHERE username = ? AND password = ? AND email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
		// Get the form data
		$username = $_POST["username"] ?? ' ';
		$password = $_POST["password"] ?? ' ';
		$confirm_password = $_POST["confirm_password"] ?? ' ';
		$email = $_POST["email"] ?? ' ';
		$action = $_POST["action"] ?? ' ';

		// Check if the action is to delete the account
		if ($action == "PERMANENTLY DELETE ACCOUNT") {
			$sql = "DELETE FROM user_profile WHERE username = '$username' AND password = '$password'";
			if ($conn->query($sql) === TRUE) {
				header("Location: delete_success_message.php");
				exit();
			}
    } else {
        echo "Error deleting account.";
    }
	}
}
// Close the database connection
$conn->close();
?>