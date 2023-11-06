<?php
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];

				//Connect to database
				$servername = "localhost";
				$dbusername = "Group4PS_Admin";
				$dbpassword = "group_4_PS!!!1111";
				$dbname = "userregistration";
				$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}
				//Insert user data into database
				$sql = "INSERT INTO register (name, username, password) VALUES ('$name', '$username', '$password')";
				if ($conn->query($sql) === TRUE) {
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
?>