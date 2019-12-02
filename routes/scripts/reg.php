<?php

require '../../config.php';
require 'settings.php';

$role =  3; //регистрация только абитурентов
$_SESSION['login_display_err'] = notifications(0);

if ($stmt = $con->prepare('SELECT password FROM users WHERE username = ?')) {
	// s = string
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	
	if ($stmt->num_rows > 0) {
		$_SESSION['display_err'] = notifications(1);
		$_SESSION['display_success'] = notifications(0);
	} else {
		if ($stmt = $con->prepare('INSERT INTO users (username, password, role) VALUES ( ?, ?, ?)')) {

			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$stmt->bind_param('ssi', $_POST['email'], $password, $role);
			$stmt->execute();

			if ($stmt = $con->prepare('INSERT INTO students (fname, phone, email) VALUES ( ?, ?, ?)')) {

				$stmt->bind_param('sss', $_POST['personal_name'], $_POST['phone_number'], $_POST['email']);
				$stmt->execute();

				$_SESSION['display_err'] = notifications(0);
				$_SESSION['display_success'] = notifications(1);
			} else {
				echo 'Could not prepare statement!';
			}	
		} else {
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
}

header('Location: ../../signup.php');
?>