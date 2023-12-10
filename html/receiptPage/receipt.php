<?php
session_start();

echo '<script>';
echo 'console.log(' . json_encode($_SESSION) . ');';
echo '</script>';

// Retrieve order details from session with consistent keys
if (isset($_SESSION['orderDetails'])) {
  $orderDetails = $_SESSION['orderDetails'];

  // Use the userID from the order details
  $userID = $orderDetails['userID'];

  // Output data directly from the session
  $artType = $orderDetails["artType"];
  $artStyleDetail = $orderDetails["style"];

  // Retrieve prices from the database based on selected type and style
  require_once("../Config.php");
  $stmt = $conn->prepare("SELECT {$artType}, {$artStyleDetail} FROM art_price WHERE 1");

  if ($stmt) {
    $stmt->execute();
    $stmt->bind_result($typePrice, $stylePrice);
    $stmt->fetch();
    $stmt->close();

    // Update session data with retrieved prices
    $_SESSION['orderDetails']['typePrice'] = $typePrice;
    $_SESSION['orderDetails']['stylePrice'] = $stylePrice;
    $total = "$" . number_format($typePrice + $stylePrice);
    // Display your receipt content here
?>
    <!DOCTYPE html>
    <html style="font-size: 16px;" lang="en">

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="INTUITIVE">
      <meta name="description" content="">
      <title>Request Details</title>
      <link rel="stylesheet" href="nicepage.css" media="screen">
      <link rel="stylesheet" href="Receipt.css" media="screen">
      <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
      <meta name="generator" content="Nicepage 6.0.3, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">

      <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": ""
        }
      </script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="Contact Curse360">
      <meta property="og:type" content="website">
      <meta data-intl-tel-input-cdn-path="intlTelInput/">
    </head>

    <body data-home-page="Contact-Curse360.html" data-home-page-title="Contact Curse360" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
      <header class="u-black u-clearfix u-header u-header" id="sec-4b1f">
        <div class="u-clearfix u-sheet u-sheet-1">
          <style>
            input[type=text] {
              border: none;
              background-color: transparent;
              color: white;
            }
          </style>
          <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
              <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                <svg class="u-svg-link" viewBox="0 0 24 24">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                </svg>
                <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <rect y="1" width="16" height="2"></rect>
                    <rect y="7" width="16" height="2"></rect>
                    <rect y="13" width="16" height="2"></rect>
                  </g>
                </svg>
              </a>
            </div>
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-3" href="https://x.com/Curse360?t=dD0ISYAoMT1N-zRR3y8QJw&s=33" target="_blank" style="padding: 10px 20px;">Contact Curse360</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-3" href="../index.php" style="padding: 10px 20px;">Home</a>
                </li>
              </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contact Curse360</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Home</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
        </div>
      </header>
      <section class="skrollable u-clearfix u-gradient u-section-1" id="sec-5221">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
              <div class="u-layout-row" style="">
                <div class="u-align-center u-container-style u-layout-cell u-left-cell u-radius u-shape-round u-size-20 u-size-xs-60 u-layout-cell-1" src="">
                  <div class="u-border-8 u-border-custom-color-3 u-container-layout u-valign-top u-container-layout-1" src="">
                    <img class="custom-expanded u-border-5 u-border-grey-75 u-image u-image-round u-radius u-image-1" src="images/download20231106141847.png" data-image-width="600" data-image-height="600">
                    <img class="custom-expanded u-border-5 u-border-grey-75 u-image u-image-round u-radius u-image-2" src="images/download20231101225543.png" data-image-width="600" data-image-height="600">
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-40 u-size-xs-60 u-layout-cell-2" src="">
                  <div class="u-container-layout u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-font-lato u-text u-text-default u-text-1" style="color: white;">Request Details: <span style="font-weight: 700;" class="u-text-custom-color-3"></span><input type="text" id="SizenColor" name="Costbox1" value="" readonly style="color: #7b6ada;">
                    </h2>
                    <p class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-2">Purchase Details:</p>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-3">
                      <input type="text" id="SizenColor" name="TextBox1" value="Art Type:" readonly>
                    </div>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-4">
                      <input type="text" id="artType" name="artType" value="<?php echo $artType; ?>" readonly>
                    </div>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-5">
                      <input type="text" id="artTypeCost" name="artTypeCost" value="<?php echo $typePrice; ?>" readonly>
                    </div>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-6">
                      <input type="text" id="artStyle" name="artStyle" value="Additionals:" readonly>
                    </div>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-7">
                      <input type="text" id="artStyleDetail" name="artStyleDetail" value="<?php echo $artStyleDetail; ?>" readonly>
                    </div>

                    <div class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-8">
                      <input type="text" id="artStyleDetailCost" name="artStyleDetailCost" value="<?php echo $stylePrice; ?>" readonly>
                    </div>

                    <p class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-9">Amount:</p>

                    <div class="u-align-center u-text u-text-body-alt-color u-text-10">
                      <input type="text" id="total" name="total" value="<?php echo $total; ?>" readonly>
                    </div>

                    <div class="u-align-center u-text u-text-body-alt-color u-text-11">
                      <input type="text" id="transacID" name="transacID" value="" readonly>
                    </div>
                    <p class="u-align-center u-custom-font u-font-lato u-text u-text-body-alt-color u-text-12">Transaction ID:</p>

                    <a href="../orderHistory(Client)/orderHistory.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-6 u-hover-palette-3-light-3 u-radius-50 u-text-grey-90 u-btn-1">My Orders</a>
                    <a href="../album-client/ClientPortfolio.php" class="u-btn u-btn-round u-button-style u-hover-palette-3-light-3 u-palette-2-light-2 u-radius-50 u-text-grey-90 u-btn-2">More Arts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-a700">
        <div class="u-clearfix u-sheet u-sheet-1">
          <p class="u-custom-font u-font-lato u-small-text u-text u-text-body-alt-color u-text-variant u-text-1"> Copyright © 2023 Paint stART. All rights reserved.</p>
        </div>
      </footer>
      <section class="u-backlink u-clearfix u-grey-80">
      </section>
  <?php
  } else {
    // Handle the case where the database query fails
    die("Error in preparing the statement");
  }
} else {
  // Handle the case where order details are not set
  die("Order details not found");
}

// Close the database connection
$conn->close();
  ?>

    </body>

    </html>