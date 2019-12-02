<?php 
require '../../config.php';

if($stmt = $con->prepare('SELECT fname, sname, tname, date, address, iin, id_number, phone FROM students WHERE email = ?')){
	$stmt->bind_param('s', $_SESSION['name']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($fname, $sname, $tname, $date, $address, $iin, $id_number, $phone);
	$stmt->fetch();

	$_SESSION['first_name'] = $fname;
	$_SESSION['second_name'] = $sname;
	$_SESSION['third_name'] = $tname;
	$_SESSION['date'] = $date;
	$_SESSION['address'] = $address;
	$_SESSION['iin'] = $iin;
	$_SESSION['id_number'] = $id_number;
	$_SESSION['phone_number'] = $phone;
	$stmt->close();

}else{
	echo 'Could not prepare statement!';
}
?>