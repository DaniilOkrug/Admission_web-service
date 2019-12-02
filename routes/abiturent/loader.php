<?php
require '../../config.php';

if ($stmt = $con->prepare("UPDATE students SET fname = ?, sname = ?, tname = ?, date = ?, address = ?, iin = ?, id_number = ? WHERE email = ?")){
	
	$stmt->bind_param('ssssssss', $_POST['fname'], $_POST['sname'], $_POST['tname'], $_POST['birthday'], $_POST['address'], $_POST['iin'], $_POST['id_number'],$_SESSION['name']);
	$stmt->execute();
	$stmt->close();
	header('Location: profile.php');
}else{
	echo 'Could not prepare statement!';
}

?>