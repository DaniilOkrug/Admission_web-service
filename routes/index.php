<?php
require '../config.php';
//require 'scripts/settings.php';

function getRedirectUri($role){
	switch ($role) {
    case '1': return 'admin/index.php';
    case '2': return 'subadmin/index.php';
    case '3':  return 'abiturent/index.php';
    default: return '../index.php';
  }
}

$redirectUri = getRedirectUri($_SESSION['role']);
if ($redirectUri) {
  header("Location: $redirectUri");
  exit;
}
?>