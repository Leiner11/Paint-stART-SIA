<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Checkout Page Revamp</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../Images/Icon.png" alt="" width="72" height="72">
        <h2>Paint stART Commission Form</h2>
        <p class="lead">Fill up the form below so I can process your requested art and it will be submitted to your email address!
          <br><br>Important Note: Don't forget to fill the reference number so that we can redirect your account number to ours!
        </p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Selected Art Type</h6>
                <small class="text-body-secondary" id="selectedType">Selected Type</small>
              </div>
              <span class="text-body-secondary">$</span>
            </li>
            <!-- Update the corresponding elements in "Your Cart" section -->
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Selected Style Option</h6>
                <small class="text-body-secondary" id="selectedStyle">Selected Style</small>
              </div>
              <span class="text-body-secondary">$</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Chosen Payment Method</h6>
                <small class="text-body-secondary" id="chosenPaymentMethod">Payment Method</small>
              </div>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
              <div class="text-success">
                <h6 class="my-0">TOTAL</h6>
                <small>Accepted currency (USD)</small>
              </div>
              <span class="text-success"></span>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing Details</h4>

          <form class="needs-validation" action="./php/submitDetails.php" method="post" id="checkoutForm" novalidate enctype="application/json">

            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="" required>

                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-body-secondary">(IMPORTANT!)</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="col-12">
                <label for="twitter" class="form-label">Twitter <span class="text-body-secondary">(Optional)</span></label>
                <input type="email" class="form-control" id="twitter" name="twitter" placeholder="@username">
                <div class="invalid-feedback">
                  Please enter a valid Twitter username for optional updates.
                </div>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Art Type</h4>
              <?php
              // Array of color options
              $typeOptions = ['Portrait', 'HalfBody', 'Landscape', 'Live2D_Model'];

              // Loop through style
              foreach ($typeOptions as $typeOption) {
              ?>
                <div class="form-check">
                  <input id="<?php echo $typeOption; ?>" name="artType" type="radio" class="form-check-input" value="<?php echo $typeOption; ?>" <?php echo ($typeOption === 'Full Portrait') ? 'checked' : ''; ?> required>
                  <label class="form-check-label" for="<?php echo $typeOption; ?>"><?php echo ucfirst($typeOption); ?></label>
                </div>
              <?php
              }
              ?>

              <hr class="my-4">
              <h4 class="mb-3">Art Style</h4>
              <?php
              // Array of color options
              $artOptions = ['Colored', 'BlackNWhite', 'Sketch'];

              // Loop through style
              foreach ($artOptions as $Artoption) {
              ?>
                <div class="form-check">
                  <input id="<?php echo $Artoption; ?>" name="style" type="radio" class="form-check-input" value="<?php echo $Artoption; ?>" <?php echo ($Artoption === 'colored') ? 'checked' : ''; ?> required>
                  <label class="form-check-label" for="<?php echo $Artoption; ?>"><?php echo ucfirst($Artoption); ?></label>
                </div>
              <?php
              }
              ?>

              <hr class="my-4">
              <h4 class="mb-3">Payment Method</h4>

              <?php
              // Array of payment options
              $paymentOptions = ['GCash', 'Paypal', 'GoTyme Bank'];

              // Loop through payment options and create radio buttons with clickable links
              foreach ($paymentOptions as $option) {
              ?>
                <div class="form-check">
                  <input id="<?php echo $option; ?>" name="paymentMethod" type="radio" class="form-check-input" value="<?php echo $option; ?>" <?php echo ($option === 'GCash') ? 'checked' : ''; ?> required>
                  <label class="form-check-label" for="<?php echo $option; ?>">
                    <a href="<?php echo getPaymentLink($option); ?>" target="_blank">
                      <?php echo ucfirst($option); ?>
                    </a>
                  </label>
                </div>
              <?php
              }

              // Function to get the payment link based on the payment method
              function getPaymentLink($paymentMethod)
              {
                switch ($paymentMethod) {
                  case 'GCash':
                    return './paymentMethod/gcashCurseQR.html';
                  case 'Paypal':
                    return 'https://paypal.me/Curse360?country.x=PH&locale.x=en_US';
                  case 'GoTyme Bank':
                    return './paymentMethod/gotymeDetails.html';
                  default:
                    return '#';
                }
              }
              ?>
            </div>

            <hr class="my-4">
            <div class="row gy-3">
              <div class="col-md-10">
                <label for="commissionDetails" class="form-label">Enter your commission details</label>
                <input type="text" class="form-control" id="commissionDetails" name="commissionDetails" placeholder="" required style="height: 80%;">
                <div class="invalid-feedback">
                  Commission details is required!
                </div>
              </div>

              <hr class="my-5">
              <div class="row gy-6">
                <div class="col-md-10">
                  <label for="pm_referenceNumber" class="form-label">Payment Method Reference Number</label>
                  <input type="text" class="form-control" id="pm_referenceNumber" name="pm_referenceNumber" placeholder="" required>
                  <small class="text-body-secondary">Input Reference Number</small><br>
                  <small class="text-body-secondary">Reference number from any payment method you chose.</small><br>
                  <small class="text-body-secondary">This helps me verify if your payment is successful!</small><br>
                  <div class="invalid-feedback">
                    Reference number is required
                  </div>
                </div>
                <hr class="my-4">
                <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
      <p class="mb-1">Copyright &copy; 2023 Paint stART. All rights reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="../index.php">Back to Homepage</a></li>
        <li class="list-inline-item"><a href="../album-client/ClientPortfolio.php">Curse360 Arts</a></li>
      </ul>
    </footer>
  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="checkout.js"></script>

  
  <script>
    //SCRIPT 1//

    document.addEventListener('DOMContentLoaded', function() {
      // Function to update "USER'S Your Cart" content
      function updateCartContent() {
        var selectedType = document.querySelector('input[name="artType"]:checked').value;
        var selectedStyle = document.querySelector('input[name="style"]:checked').value;
        var selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

        var typeOption = document.querySelector('.list-group-item:nth-child(1) small');
        typeOption.textContent = '(' + selectedType + ')';

        var styleOption = document.querySelector('.list-group-item:nth-child(2) small');
        styleOption.textContent = '(' + selectedStyle + ')';

        var paymentOption = document.querySelector('.list-group-item:nth-child(3) small');
        paymentOption.textContent = '' + selectedPaymentMethod + '';

        // Update the total price
        var totalPrice = document.querySelector('.list-group-item:last-child span.text-success');
        totalPrice.textContent = '';
      }
      
      // Event listeners to radio buttons
      var typeRadioButtons = document.querySelectorAll('input[name="artType"]');
      typeRadioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', updateCartContent);
      });

      var styleRadioButtons = document.querySelectorAll('input[name="style"]');
      styleRadioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', updateCartContent);
      });

      var paymentMethodRadioButtons = document.querySelectorAll('input[name="paymentMethod"]');
      paymentMethodRadioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', updateCartContent);
      });
    });

    //END OF SCRIPT 1//
  </script>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    //SCRIPT 2//

    document.addEventListener('DOMContentLoaded', function() {
      // Initialize total price variable
      var totalPrice = 0;

      // Function to update prices
      function updatePrices() {
        var selectedType = document.querySelector('input[name="artType"]:checked');
        var selectedStyle = document.querySelector('input[name="style"]:checked');

        if (selectedType && selectedStyle) {
          selectedType = selectedType.value;
          selectedStyle = selectedStyle.value;

          // Make AJAX request to get prices
          fetch('./php/retrievePrice.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
              body: JSON.stringify({
                selectedType: selectedType,
              }),
            })
            .then(response => response.json())
            .then(data => {
              // Update prices on the page for the selected type and style
              var typeOption = document.getElementById('selectedType');
              typeOption.textContent = selectedType;

              var styleOption = document.getElementById('selectedStyle');
              styleOption.textContent = selectedStyle;

              // Update the corresponding elements in "Your Cart" section
              var typePriceElement = document.querySelector('.list-group-item:nth-child(1) span.text-body-secondary');
              typePriceElement.textContent = '$' + data[selectedType.toLowerCase()];

              var stylePriceElement = document.querySelector('.list-group-item:nth-child(2) span.text-body-secondary');
              stylePriceElement.textContent = '$' + data[selectedStyle.toLowerCase()];

              // Update the total price variable
              totalPrice = data[selectedType.toLowerCase()] + data[selectedStyle.toLowerCase()];

              // To calculate and update the total price (only includes type and style)
              var totalPriceElement = document.querySelector('.list-group-item:last-child span.text-success');
              totalPriceElement.textContent = '$' + totalPrice.toFixed(2);
            })
            .catch(error => {
              console.error('Error fetching prices:', error);
              // Handle the error
            });
        }
      }

      // Event listeners to radio buttons
      var typeRadioButtons = document.querySelectorAll('input[name="artType"]');
      typeRadioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', updatePrices);
      });

      var styleRadioButtons = document.querySelectorAll('input[name="style"]');
      styleRadioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', updatePrices);
      });

      // Function to handle form submission
      function submitDetails() {
        // Access the total price variable here
        console.log('Total Price:', totalPrice);

        // Prepare the data to be sent
        var formData = {
          totalPrice: totalPrice,
          // Add other form fields as needed
        };
        // Function to handle form submission
        function submitDetails() {
          // Access the total price variable here
          console.log('Total Price:', totalPrice);

          // Prepare the data to be sent
          var formData = {
            totalPrice: totalPrice.toFixed(2), // Convert to string with 2 decimal places
            // Add other form fields as needed
          };
        }
      }

    //END OF SCRIPT 2//
    });
  </script>

</body>
</html>