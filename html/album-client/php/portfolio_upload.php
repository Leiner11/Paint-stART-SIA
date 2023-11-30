<?php
error_reporting(E_ALL);

require_once '../Config.php';

$msg = "";
$recentlyUploadedImage = [];

$db = mysqli_connect(host, username, password, dbname);

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Function to get recently uploaded images from the database
function getRecentlyUploadedImages($db)
{
  $recentlyUploadedImage = [];
  $query = "SELECT card_identifier, filename FROM portfolio_images WHERE id IN (SELECT MAX(id) FROM portfolio_images GROUP BY card_identifier)";
  $result = mysqli_query($db, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $recentlyUploadedImage[$row['card_identifier']] = $row['filename'];
  }
  return $recentlyUploadedImage;
}

// If upload button is clicked ...
if (isset($_POST['upload'])) {
  $cardIdentifier = mysqli_real_escape_string($db, $_POST['cardIdentifier']);
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];

  // Generate a unique identifier (timestamp)
  $uniqueIdentifier = time(); // Other methods are also okay to generate a unique identifier

  // Extract file extension
  $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

  // Modify the filename to make it unique
  $uniqueFilename = $uniqueIdentifier . '_' . $cardIdentifier . '.' . $fileExtension;

  $folder = "./images/" . $uniqueFilename;

  // Get all the submitted data from the form
  $sql = "INSERT INTO portfolio_images (filename, card_identifier) VALUES ('$uniqueFilename', '$cardIdentifier')";

  // Execute query
  mysqli_query($db, $sql);

  // Move the uploaded image into the folder: images
  if (move_uploaded_file($tempname, $folder)) {
    $msg = "Image uploaded successfully!";
    $absolutePath = realpath($folder);

    // Ensure the file exists before storing the path
    if ($absolutePath !== false && file_exists($absolutePath)) {
      $recentlyUploadedImage = getRecentlyUploadedImages($db); // Update with the latest data
    } else {
      $msg = "Failed to move the uploaded image or the file does not exist!";
    }
  } else {
    $msg = "Failed to upload image!";
  }
}

// If delete button is clicked ...
if (isset($_POST['delete'])) {
  $cardIdentifier = mysqli_real_escape_string($db, $_POST['cardIdentifier']);

  // Get the filename from the database for the specified card
  $query = "SELECT filename FROM portfolio_images WHERE card_identifier = '$cardIdentifier'";
  $result = mysqli_query($db, $query);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $filenameToDelete = $row['filename'];

    // Delete the image file
    $fileToDelete = "./images/" . $filenameToDelete;
    if (file_exists($fileToDelete)) {
      unlink($fileToDelete);
    }

    // Delete the filename from the database
    $deleteQuery = "DELETE FROM portfolio_images WHERE card_identifier = '$cardIdentifier'";
    mysqli_query($db, $deleteQuery);

    // Set the recentlyUploadedImage to an empty string for the specified card
    $recentlyUploadedImage[$cardIdentifier] = '';
  }
}

// Get recently uploaded images from the database
$recentlyUploadedImage = getRecentlyUploadedImages($db);

mysqli_close($db);
