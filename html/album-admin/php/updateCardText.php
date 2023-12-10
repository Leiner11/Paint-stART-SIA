<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("./Config.php");

// Use prepared statements to prevent SQL injection
$cardIdentifier = mysqli_real_escape_string($conn, $_POST['cardIdentifier']);
$newText = mysqli_real_escape_string($conn, $_POST['newText']);

$sql = "UPDATE portfolio_images SET card_text = ? WHERE card_identifier = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "si", $newText, $cardIdentifier);

if (mysqli_stmt_execute($stmt)) {
    echo "Text updated successfully";
} else {
    echo "Error updating text: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>