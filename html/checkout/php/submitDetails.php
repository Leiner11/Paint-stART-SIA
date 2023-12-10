<?php
session_start();

$userID = isset($_SESSION['userID']) ? $_SESSION['userID'] : null;

// Check if $userID is null
if ($userID === null) {
    // Handle the case where the userID is not set
    header("Location: /PaintstART_Files/html/login.php");
    exit; // or redirect to the login page
}

// Retrieve data from the POST request
$formData = $_POST;

// Add userID to the form data
$formData['userID'] = $userID;

// Define $username and $totalPrice
$username = isset($formData['username']) ? $formData['username'] : '';
$totalPrice = 0;

// Save Form Data to Database
saveFormDataToDatabase($userID, $formData, $username, $totalPrice);

// Store order details in session variables with consistent keys
$_SESSION['orderDetails'] = [
    'userID' => $userID,
    'username' => $username,
    'firstname' => $formData['firstname'],
    'lastname' => $formData['lastname'],
    'email' => $formData['email'],
    'twitter' => $formData['twitter'],
    'artType' => $formData['artType'],
    'style' => $formData['style'],
    'paymentMethod' => $formData['paymentMethod'],
    'pm_referenceNumber' => $formData['pm_referenceNumber'],
    'commissionDetails' => $formData['commissionDetails'],
    'typePrice' => $typePrice,  // Add these lines to include typePrice and stylePrice
    'stylePrice' => $stylePrice, // Add these lines to include typePrice and stylePrice
    'totalPrice' => $totalPrice,
];

// Redirect after successful execution
header("Location: /PaintstART_Files/html/receiptPage/receipt.php");
exit;

// Save Form Data to Database
function saveFormDataToDatabase($userID, $formData, $username, $totalPrice)
{
    require_once("./Config.php");

    // Validate and sanitize user inputs (add your validation/sanitization code)

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the 'paymentMethod' key exists in the $_POST array
        if (isset($_POST['paymentMethod'])) {
            $selectedPaymentMethod = $conn->real_escape_string($_POST['paymentMethod']);
            $selectedStyle = $conn->real_escape_string($_POST['style']);
            $selectedType = $conn->real_escape_string($_POST['artType']);

            // Fetch prices from the database based on selected type and style
            $stmt = $conn->prepare("SELECT $selectedType, $selectedStyle FROM art_price WHERE 1");
            if ($stmt) {
                $stmt->execute();
                $stmt->bind_result($typePrice, $stylePrice);
                $stmt->fetch();
                $stmt->close();

                $totalPrice = $typePrice + $stylePrice;

                echo "Selected Payment Method: " . $selectedPaymentMethod . "\r\n";
                echo "Selected Style: " . $selectedStyle . "\r\n";
                echo "Selected Art Type: " . $selectedType . "\r\n";
            } else {
                echo "Error in preparing the statement";
                return;
            }
        } else {
            echo "Payment method or style not selected.";
            return;
        }
    }

    $sql = "INSERT INTO order_details (userID, username, firstname, lastname, email, twitter, artType, style, paymentMethod, pm_referenceNumber, commissionDetails, total)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error in prepare statement: " . $conn->error;
        return;
    }

    $stmt->bind_param(
        "dssssssssssd",
        $userID,
        $username,
        $formData['firstname'],
        $formData['lastname'],
        $formData['email'],
        $formData['twitter'],
        $formData['artType'],
        $formData['style'],
        $formData['paymentMethod'],
        $formData['pm_referenceNumber'],
        $formData['commissionDetails'],
        $totalPrice
    );

    if ($stmt->execute()) {
        // Successfully saved to the database
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>