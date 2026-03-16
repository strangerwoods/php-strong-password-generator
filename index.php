<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>password generator</title>
</head>

<body>
	<form action="">
		<input type="number" name="password_length" id="password_length" placeholder="Password Length">
		<input type="submit" value="Generate Password">
	</form>

	<?php
	require 'functions.php';
	if (isset($_GET['password_length']) && !empty($_GET['password_length'])) {
		$password_length = $_GET['password_length'];
		$password = generate_password($password_length);
		echo "<p>Your generated password is: <strong>$password</strong></p>";
	}
	?>
</body>

</html>