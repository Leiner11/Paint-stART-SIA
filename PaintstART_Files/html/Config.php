<?php
// Database Configuration
define('host', 'localhost'); 
define('username', 'Group4PS_Admin'); 
define('password', 'group_4_PS!!!1111'); 
define('dbname', 'users'); 

$conn = new mysqli(host, username, password, dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
