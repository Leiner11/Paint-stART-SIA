<?php
session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
    // Unset specific session variables
    unset($_SESSION['userLoggedIn']);
    session_destroy();
}

header("Location: /PaintstART_Files/html/login.html");
exit;
