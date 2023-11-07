<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in
    $userLoggedIn = true;
} else {
    $userLoggedIn = false;
}
$_SESSION['username'] = $userLoggedIn;
header("Location: /PaintstART_Files/html/index.php");
exit();
?>