<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Retrieve data from the POST request
$requestBody = file_get_contents('php://input');
$formData = $_POST;

// Save Form Data to Database
saveFormDataToDatabase($formData);

// Respond to the frontend
$response = ['message' => 'Form data received and saved successfully.'];
echo json_encode($response);

// Save Form Data to Database
function saveFormDataToDatabase($formData)
{
    if ($formData === NULL) {
        echo "Error: Form data is NULL";
        return;
    }

    require_once("./Config.php");
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Validate and sanitize user inputs
    $firstName = isset($formData['firstname']) ? $conn->real_escape_string($formData['firstname']) : '';
    $lastName = isset($formData['lastname']) ? $conn->real_escape_string($formData['lastname']) : '';
    $username = isset($formData['username']) ? $conn->real_escape_string($formData['username']) : '';
    $email = isset($formData['email']) ? filter_var($formData['email'], FILTER_SANITIZE_EMAIL) : '';
    $twitter = isset($formData['twitter']) ? $conn->real_escape_string($formData['twitter']) : '';
    $refNumber = isset($formData['pm_referenceNumber']) ? $conn->real_escape_string($formData['pm_referenceNumber']) : '';
    $commissionDetails = isset($formData['commissionDetails']) ? $conn->real_escape_string($formData['commissionDetails']) : '';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the 'paymentMethod' key exists in the $_POST array
        if (isset($_POST['paymentMethod'])) {
            $selectedPaymentMethod = $_POST['paymentMethod'];
            $selectedStyle = $_POST['style'];
            $selectedType = $_POST['artType'];

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

    $sql = "INSERT INTO order_details (username, firstname, lastname, email, twitter, artType, style, paymentMethod, pm_referenceNumber, commissionDetails, total)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error in prepare statement: " . $conn->error;
        return;
    }

    // Bind parameters with appropriate data types
    $stmt->bind_param(
        "ssssssssssd",
        $username,
        $firstName,
        $lastName,
        $email,
        $twitter,
        $selectedType,
        $selectedStyle,
        $selectedPaymentMethod,
        $refNumber,
        $commissionDetails,
        $totalPrice
    );

    if ($stmt->execute()) {
        header("Location: /PaintstART_Files/html/receiptPage/receipt.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>