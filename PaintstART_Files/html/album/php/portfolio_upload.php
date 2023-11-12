<?php
error_reporting(E_ALL);

require_once 'Config.php';

$msg = "";
$recentlyUploadedImage = [];

// Database connection (using variables from Config.php)
$db = mysqli_connect(host, username, password, dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $cardIdentifier = mysqli_real_escape_string($db, $_POST['cardIdentifier']);
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    // Get all the submitted data from the form
    $sql = "INSERT INTO portfolio_images (filename, card_identifier) VALUES ('$filename', '$cardIdentifier')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: images
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully!";
        $absolutePath = realpath($folder);
        // Ensure the file exists before storing the path
        if ($absolutePath !== false && file_exists($absolutePath)) {
            $recentlyUploadedImage[$cardIdentifier] = $absolutePath;
        } else {
            $msg = "Failed to move the uploaded image or the file does not exist!";
        }
    } else {
        $msg = "Failed to upload image!";
    }
}

// Close the database connection
mysqli_close($db);
?>
