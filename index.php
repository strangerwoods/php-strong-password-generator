<?php
session_start();
require_once './functions.php';

if (isset($_GET['password_length']) && $_GET['password_length'] !== '') {
	$password_length = (int) $_GET['password_length'];
	$password = generate_password($password_length);

	if ($password !== '') {
		$_SESSION['password'] = $password;
		header('Location: ./password.php');
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>password generator</title>
</head>

<body>
	<form action="">
		<input type="number" name="password_length" id="password_length" placeholder="Password Length" min="1">
		<input type="submit" value="Generate Password">
	</form>
</body>

</html>