<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <?php
      // Retrieve the user's name from the database if they are logged in
      $db_hostname = 'localhost'; // replace with your database hostname
      $db_database = 'userregistration'; // replace with your database name
      $db_username = 'Group4PS_Admin'; // replace with your database username
      $db_password = 'group_4_PS!!!1111'; // replace with your database password

      $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      session_start();

      if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM register WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $name = $row['name'];
          echo "<p>Welcome, $name!</p>";
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
</html>
