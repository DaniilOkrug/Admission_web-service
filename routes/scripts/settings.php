<?php

function UserVerification($available_role,$role) {
	if($available_role != $role){
		header('Location: ../index.php');
	}
}

function notifications($display){
	switch ($display) {
		case '0': return 'none';
		case '1': return 'block';
		default: return 'none';
	}
}

function variablesUpdate(){
	$_SESSION['display_err'] = notifications(0);
	$_SESSION['display_success'] = notifications(0);
}

function generate_string($strength = 16) {
	$input ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
?>