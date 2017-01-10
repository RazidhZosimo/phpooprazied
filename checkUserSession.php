<?php
	$user = new User();
	if($user->is_loggedIn()!=''){
		$user->redirect('index.php');
	}
?>
