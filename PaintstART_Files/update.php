<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>
	<h2>Update</h2>
	<form method="POST" action="update.php">
		<label>Username:</label>
		<input type="text" name="username"><br>
		<label>Password:</label>
		<input type="password" name="password"><br>
		<input type="submit" value="update">
	</form>
</body>
</html>

<?php
$host = 'localhost';
$dbname = 'userregistration';
$username = 'Group4PS_Admin';
$password = 'group_4_PS!!!1111';

$username = $_POST['username'];
$password = $_POST['password'];
try {
    // Create a PDO database connection
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // Select the user by username
    $sql = "SELECT id FROM register WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $id = $stmt->fetchColumn();

    if ($id) {
        // User found, update their profile
        $sql = "UPDATE register SET name = :name, password = :password WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Profile updated successfully.";
        } else {
            echo "Error updating profile. Try again: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "User not found.";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
