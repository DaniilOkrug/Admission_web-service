<?php
require '../../config.php';
require 'settings.php';

$_SESSION['login_display_err'] = notifications(0);


if ($stmt = $con->prepare('SELECT password, role FROM users WHERE username = ?')) {
	// s = string i -integer
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($password, $role);
	$stmt->fetch();
	
	if (password_verify($_POST['password'], $password)) {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['role'] = $role;
		$stmt->close();

		$_SESSION['login_display_err'] = notifications(0);
		header('Location: ../index.php');
	} else {
		$_SESSION['login_display_err'] = notifications(1);
		header('Location: ../../index.php');
	}
} else {
	$_SESSION['login_display_err'] = notifications(1);
	header('Location: ../../index.php');
}
?>