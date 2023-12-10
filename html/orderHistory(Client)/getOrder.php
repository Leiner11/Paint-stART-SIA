<?php
require_once("../Config.php");

session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: ../login.php");
    exit();
}

$loggedInUserID = $_SESSION['userID'];

$sql = "SELECT * FROM order_details WHERE userID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loggedInUserID);
$stmt->execute();
$result = $stmt->get_result();

$orderDetails = array();

// Fetch order details from the result set
while ($row = $result->fetch_assoc()) {
    $orderDetails[] = array(
        'orderID' => $row['order_id'],
        'email' => $row['email'],
        'paymentReferenceNumber' => $row['pm_referenceNumber'],
        'orderDescription' => $row['commissionDetails'],
        'total' => $row['total'],
        'status' => $row['status']
    );
}

// Return order details as JSON
header('Content-Type: application/json');
echo json_encode($orderDetails);

// Close database connection
$stmt->close();
$conn->close();
?>