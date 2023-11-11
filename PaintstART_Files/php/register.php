<?php
	require_once './Config.php';
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

			// Check the connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
				//Insert user data into database
				$sql = "INSERT INTO user_profile (username, email, password) VALUES ('$username', '$email', '$password')";
				if ($conn->query($sql) === TRUE) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
?>