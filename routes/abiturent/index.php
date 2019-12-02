<?php
require '../../config.php';
require '../scripts/settings.php';

define($_SESSION['available_role'], 3);

//UserVerification($_SESSION['role']);
header('Location: profile.php');

?>