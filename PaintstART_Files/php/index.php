<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <?php
    require_once './Config.php';

    // Check the connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

      session_start();

      if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM register WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $name = $row['name'];
          $id = $row['id'];
          echo "<p>Welcome, $name!</p>";
          echo "<p>Account ID Number: $id</p>";
        }
      } else {
        header("location: login.php");
      }
    ?>
  </body>
   		<form action="login.php">
      	<button type="submit">Go back to Login</button>
    		</form>

      <form action="logout.php">
      	<button type="submit">Logout</button>
    		</form>

      <form action="update.php">
      	<button type="submit">Update Account</button>
    		</form>
</html>
