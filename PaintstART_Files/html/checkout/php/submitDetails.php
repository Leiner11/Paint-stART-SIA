<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Manually set the database name because it Config.php doesn't work for some reason AAAAAAAAA
$dbname = 'users';

// Retrieve data from the POST request
$requestBody = file_get_contents('php://input');
$formData = $_POST;

// Validate and sanitize the data (customize this based on your requirements)

// Save Form Data to Database
saveFormDataToDatabase($formData);

// Respond to the frontend
$response = ['message' => 'Form data received and saved successfully.'];
echo json_encode($response);

// Save Form Data to Database (Modify this function based on your database setup)
function saveFormDataToDatabase($formData)
{
    if ($formData === NULL) {
        echo "Error: Form data is NULL";
        return;
    }

    $host = "localhost";
    $username = "Group4PS_Admin";
    $password = "group_4_PS!!!1111";
    $dbname = "users";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if array keys exist before accessing
    $firstName = isset($formData['firstname']) ? $conn->real_escape_string($formData['firstname']) : '';
    $lastName = isset($formData['lastname']) ? $conn->real_escape_string($formData['lastname']) : '';
    $username = isset($formData['username']) ? $conn->real_escape_string($formData['username']) : '';
    $email = isset($formData['email']) ? $conn->real_escape_string($formData['email']) : '';
    $twitter = isset($formData['twitter']) ? $conn->real_escape_string($formData['twitter']) : '';
    $coloredArt = isset($formData['option_colored']) ? $conn->real_escape_string($formData['option_colored']) : '';
    $blacknwhiteArt = isset($formData['option_blacknwhite']) ? $conn->real_escape_string($formData['option_blacknwhite']) : '';
    $paymentMethod = isset($formData['paymentMethod']) ? $conn->real_escape_string($formData['paymentMethod']) : '';
    $refNumber = isset($formData['pm_referenceNumber']) ? $conn->real_escape_string($formData['pm_referenceNumber']) : '';

    // Modify this query based on table structure
    $sql = "INSERT INTO order_details (username, firstname, lastname, email, twitter, option_colored, option_blacknwhite, paymentMethod, pm_referenceNumber)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error in prepare statement: " . $conn->error;
        return;
    }

    $stmt->bind_param("sssssssss", $username, $firstName, $lastName, $email, $twitter, $coloredArt, $blacknwhiteArt, $paymentMethod, $refNumber);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
