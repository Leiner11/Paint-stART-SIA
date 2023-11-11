<?php
require_once './config.php';

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
