<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="description" content="PHP-OOP">
		<meta name="keywords" content="HTML, CSS, PHP, JavaScript">
		<meta name="author" content="Mel Razied Rubillos">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="libs/js/jquery.min.js"></script>
		<script src="libs/js/bootstrap.min.js"></script>
		<script src="libs/js/script.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</script>
		<?php
		include_once 'objects/class.database.php';
		include_once 'objects/class.user.php';
		include_once 'includes/db.php';
		?>
		
		<style>
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('images/widget-loader-lg-en.gif') 50% 50% no-repeat rgb(249,249,249);
			}
		 body{background: url('images/index.png') 50% 50% no-repeat; background-size: cover; background-attachment: fixed;}
		 #login-panel-body{background: url('images/white.png')no-repeat; background-size: cover; border: 3px solid #fff; box-shadow: 1px 2px 10px #000; margin-top: 150px;}
		</style>
	</head>