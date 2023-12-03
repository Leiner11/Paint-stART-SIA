<!DOCTYPE html>
<html>

<head>
  <title>Order History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    .actions button {
      cursor: pointer;
    }

    /* Highlight status */
    .status.accepted {
      color: green;
      font-weight: bold;
    }

    .status.denied {
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
        <li><a href="../adminprofile/adminprofile.php">My Account</a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <main>
      <section class="order-history">
        <h1>Order History</h1>
        <table>
          <thead>
            <tr>
              <th>OrderID</th>
              <th>User ID</th>
              <th>Email</th>
              <th>Payment Reference Number</th>
              <th>Order Description</th>
              <th>Status</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once("../Config.php");

            $sql = "SELECT * FROM order_details";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $statusClass = strtolower($row['status']); // Convert status to lowercase for consistency
            ?>
                <tr>
                  <td><?php echo $row['order_id']; ?></td>
                  <td><?php echo $row['userID']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['pm_referenceNumber']; ?></td>
                  <td><?php echo $row['commissionDetails']; ?></td>
                  <td class="status <?php echo $statusClass; ?>"><?php echo $row['status']; ?></td>
                  <td class="actions">
                    <button class="accepted" data-orderid="<?php echo $row['order_id']; ?>">Accept</button>
                    <button class="denied" data-orderid="<?php echo $row['order_id']; ?>">Deny</button>
                  </td>
                  <td><?php echo '$' . number_format($row['total'], 2); ?></td>
                </tr>
            <?php
              }
            } else {
              echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
      </section>
    </main>
  </div>

  <script>
    $(document).ready(function() {
      $('.accepted, .denied').click(function() {
        var button = $(this);
        var orderId = button.data('orderid');
        var action = button.hasClass('accepted') ? 'ACCEPTED' : 'DENIED';

        $.ajax({
          type: 'POST',
          url: 'update_status.php',
          data: {
            orderId: orderId,
            action: action
          },
          success: function(response) {
            button.closest('tr').find('.status').text(action);
            button.closest('tr').find('.status').removeClass('accepted denied').addClass(action.toLowerCase());

            // Store the status in localStorage
            localStorage.setItem('order_status_' + orderId, action);
          },
          error: function() {
            alert('Error updating status');
          }
        });
      });

      // Retrieve and apply the stored status on page load
      $('[data-orderid]').each(function() {
        var orderId = $(this).data('orderid');
        var storedStatus = localStorage.getItem('order_status_' + orderId);

        if (storedStatus) {
          $(this).closest('tr').find('.status').text(storedStatus);
          $(this).closest('tr').find('.status').removeClass('accepted denied').addClass(storedStatus.toLowerCase());
        }
      });
    });
  </script>

</body>

</html>