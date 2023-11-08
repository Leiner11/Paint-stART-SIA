<?php
// If the user submitted the form to update the username and password, update the database
if (isset($_POST['update'])) {
	$new_username = $_POST['new_username'];
	//$new_password = $_POST['new_password'];
	//$current_username = $_POST['current_username'];
	//$current_password = $_POST['current_password'];

	$sql = "UPDATE register SET username='$new_username', password='$new_password' WHERE username='$current_username' AND password='$current_password'";

	if ($conn->query($sql) === TRUE) {
		echo "Username and password updated successfully.";
		echo '<form action="login.php">
			   <button type="submit" name="update" class="btn btn-primary">Go back to Login</button><br><br>
			  </form>';
	} else {
		echo "Error updating username and password: " . $conn->error;
	}
}

$conn->close();
?>