<?php
require_once './Config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = [];

    // Query to get the prices from the database based on selected type
    $stmt = $conn->prepare("SELECT portrait, halfbody, landscape, live2d_model FROM art_price WHERE 1");
    if ($stmt) {
        $stmt->execute();
        $stmt->bind_result($fullPortrait, $halfBody, $fullLandscape, $live2D);
        $stmt->fetch();
        $stmt->close();

        // Query to get the prices for different art styles
        $stmtArtStyle = $conn->prepare("SELECT colored, blacknwhite, sketch FROM art_price WHERE 1");
        if ($stmtArtStyle) {
            $stmtArtStyle->execute();
            $stmtArtStyle->bind_result($colored, $BNW, $sketch);
            $stmtArtStyle->fetch();
            $stmtArtStyle->close();

            // Populate the response array
            $response = [
                'portrait' => $fullPortrait,
                'halfbody' => $halfBody,
                'landscape' => $fullLandscape,
                'live2d_model' => $live2D,
                'colored' => $colored,
                'blacknwhite' => $BNW,
                'sketch' => $sketch,
            ];
        } else {
            $response['error'] = 'Error in preparing the art style statement';
        }
    } else {
        $response['error'] = 'Error in preparing the main statement';
    }

    // Return the response as JSON
    echo json_encode($response);
} else {
    // Invalid request method
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
