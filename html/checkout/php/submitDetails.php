<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Manually set the database name because it Config.php doesn't work for some reason AAAAAAAAA
$dbname = 'users';

// Retrieve data from the POST request
$requestBody = file_get_contents('php://input');
$formData = $_POST;

// Validate and sanitize the data (customize this based on requirements)

// Save Form Data to Database
saveFormDataToDatabase($formData);

// Respond to the frontend
$response = ['message' => 'Form data received and saved successfully.'];
echo json_encode($response);




// Save Form Data to Database (Modify this function based on database setup)
function saveFormDataToDatabase($formData)
{
    if ($formData === NULL) {
        echo "Error: Form data is NULL";
        return;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the 'paymentMethod' key exists in the $_POST array
        if (isset($_POST['paymentMethod'])) {
            // Get the selected payment method
            $selectedPaymentMethod = $_POST['paymentMethod'];
            $selectedStyle = $_POST['style'];
            // Now $selectedPaymentMethod contains the value of the selected radio button
            echo "Selected Payment Method: " . $selectedPaymentMethod;
            echo "Selected Style: " . $selectedStyle;
        } else {
            echo "Payment method or style not selected.";
        }
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
    $refNumber = isset($formData['pm_referenceNumber']) ? $conn->real_escape_string($formData['pm_referenceNumber']) : '';

    // Modify this query based on table structure
    $sql = "INSERT INTO order_details (username, firstname, lastname, email, twitter, style, paymentMethod, pm_referenceNumber)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error in prepare statement: " . $conn->error;
        return;
    }

    $stmt->bind_param("ssssssss", $username, $firstName, $lastName, $email, $twitter, $selectedStyle, $selectedPaymentMethod, $refNumber);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
