<?php
session_start();

if (isset($_SESSION['user_status'])) {
    // User is logged in
    $userLoggedIn = true;
    header("Location: /PaintstART_Files/html/RQ1.html");
    exit();
} else {
    // User is not logged in
    $userLoggedIn = false;
    header("Location: /PaintstART_Files/html/RQ5.html");
    exit();
}
?>