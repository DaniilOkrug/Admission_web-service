<?php
require '../../config.php';

if (!isset($_POST['fname'], $_POST['sname'], $_POST['tname'], $_POST['birthday'], $_POST['address'], $_POST['iin'], $_POST['id_number'],$_SESSION['name'])) {
	
	header('Location: profile.php');
	exit();
}

if (empty($_POST['fname'] || $_POST['sname'] || $_POST['tname'] || $_POST['birthday'] || $_POST['address'] || $_POST['iin'] || $_POST['id_number'] || $_SESSION['name'])) {
	
	header('Location: profile.php');
	exit();
}

$ready = 1;

if ($stmt = $con->prepare("UPDATE students SET fname = ?, sname = ?, tname = ?, date = ?, address = ?, iin = ?, id_number = ?, ready = ? WHERE email = ?")){
	
	$stmt->bind_param('sssssssis', $_POST['fname'], $_POST['sname'], $_POST['tname'], $_POST['birthday'], $_POST['address'], $_POST['iin'], $_POST['id_number'], $ready, $_SESSION['name']);
	$stmt->execute();
	$stmt->close();
	header('Location: profile.php');
}else{
	echo 'Could not prepare statement!';
}

?>