<?php
require_once 'Config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardIdentifier = mysqli_real_escape_string($db, $_POST['cardIdentifier']);

    // Delete the record from the database
    $sql = "DELETE FROM portfolio_images WHERE card_identifier = '$cardIdentifier'";
    mysqli_query($db, $sql);

    // Can also delete the corresponding image file if needed
    // $filename = get the filename from the database based on $cardIdentifier
    // unlink("./images/$filename");

    echo 'Image deleted successfully';
} else {
    echo 'Invalid request';
}
