<?php
	function check_input($data){
		$data = htmlspecialchars($data);
		$data = htmlentities($data);
		$data = trim($data);
		$data = stripslashes($data);
		
		return $data;
	}
?>