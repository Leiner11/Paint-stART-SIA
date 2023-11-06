<?php
$host = 'localhost';
$dbname = 'userregistration';
$username = 'Group4PS_Admin';
$password = 'group_4_PS!!!1111'; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are correct
$sql = "SELECT * FROM register WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    header("Location: delete.php");
    exit; 
} else if ($result->num_rows == 0) {
    header("Location: delete.php");
    exit; 
}
// Close the database connection
$conn->close();
?>
