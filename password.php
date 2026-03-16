<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password</title>
</head>
<body>
	<?php
	session_start();
	if (isset($_SESSION['password'])) {
		echo "<h1>Your Generated Password: " . $_SESSION['password'] . "</h1>";
	} else {
		echo "<h1>No password generated yet.</h1>";
	}
	?>
</body>
</html>