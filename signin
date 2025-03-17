// signin.php
<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alhawy_philo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$_SESSION["logged_in"] = true;
			header("Location: index.php");
			exit;
		} else {
			echo "Invalid username or password";
		}
	}

	$conn->close();
?>
