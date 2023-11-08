<?php

//Create connection
$servername = "localhost";
$username = "Group4PS_Admin";
$password = "group_4_PS!!!1111";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error)
{
	die("Connection failed! " . $conn->connect_error);
}
echo "Connected successfully <br>";

//Create the database
$sql = "CREATE DATABASE userRegistration";

if ($conn->query($sql) === TRUE)
{
	echo "Database created successfully";
}
else {
	echo "Error creating database: " . $conn->error;
}

//Close connection
$conn->close();
?>
