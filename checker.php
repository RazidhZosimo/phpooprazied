<?php

include_once 'objects/class.database.php';
include_once 'objects/class.user.php';
include_once 'includes/check_input.php';

if(isset($_POST['txtUser']) && isset($_POST['txtPass'])){
	
	$uname = check_input($_POST['txtUser']);
	$upass = check_input(md5($_POST['txtPass']));
	
	$user = new User();
		
		if($user->login($uname, $upass)){
			echo 1;
		} else {
			echo 0;
		}
} else {
	echo 'denied';
}
?>