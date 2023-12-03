<!DOCTYPE html>
<html>

<head>
  <title>My Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    .status.accepted-text {
      color: green;
      font-weight: bold;
    }

    .status.denied-text {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../userprofile/userprofile.php">My Account</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <main>
      <section class="order-history">
        <h1>Order History</h1>

        <table id="orderTable">
          <thead>
            <tr>
              <th>OrderID</th>
              <th>Email</th>
              <th>Payment Reference Number</th>
              <th>Order Description</th>
              <th>Total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Content will be dynamically loaded here -->
          </tbody>
        </table>
      </section>
    </main>
  </div>

  <script>
    $(document).ready(function() {
      // Fetch order details on page load
      fetchOrderDetails();

      // Function to fetch order details using AJAX
      function fetchOrderDetails() {
        $.ajax({
          type: 'POST',
          url: './getOrder.php',
          dataType: 'json',
          success: function(response) {
            populateOrderTable(response);
          },
          error: function() {
            alert('Error fetching order details');
          }
        });
      }

      // Function to populate order details in the table
      function populateOrderTable(data) {
        var tableBody = $('#orderTable tbody');
        tableBody.empty(); // Clear existing rows

        // Iterate through the data and append rows to the table
        $.each(data, function(index, order) {
          var newRow = '<tr>' +
            '<td>' + order.orderID + '</td>' +
            '<td>' + order.email + '</td>' +
            '<td>' + order.paymentReferenceNumber + '</td>' +
            '<td>' + order.orderDescription + '</td>' +
            '<td>' + order.total + '</td>' +
            '<td class="actions">' +
            '<label class="status ' + order.status.toLowerCase() + '-text">' + order.status + '</label>' +
            '</td>' +
            '</tr>';

          tableBody.append(newRow);
        });
      }
    });
  </script>
</body>

</html>