<?php
require_once("../Config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderId = $_POST["orderId"];
    $action = $_POST["action"];

    $updateSql = "UPDATE order_details SET status = '$action' WHERE order_id = $orderId";
    $conn->query($updateSql);
}

$conn->close();
?>