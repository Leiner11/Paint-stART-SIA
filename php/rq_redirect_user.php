<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in
    $userLoggedIn = true;
} else {
    $userLoggedIn = false;
    header("Location: /PaintstART_Files/html/login.php");
    exit();
}
$_SESSION['username'] = $userLoggedIn;
header("Location: /PaintstART_Files/html/php/checkIf_userOrAdmin.php");
exit();
