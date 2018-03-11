<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);	
	session_start();

	require_once('functions.php');
	$check = check();
?>



<!DOCTYPE html>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
		<style>
			<?php require_once('theme.css'); ?>
		</style>
	</head>
	<body>
		
		<div class="header">
			<div class="favicon">
				<label><a href="index.php"><span class="highlight">Bugs</span>writer</a></label>
			</div>
			<div class="nav">
				<?php 
					if(!$check){
				?>
				<div class="navlist"><a href="#">About</a></div>
				<div class="navlist"><a href="#">SignUp</a></div>
				<div class="navlist"><a href="#">Login</a></div>
				<div class="navlist"><a href="#">Contact</a></div>
				<?php
					}else{
				?>
				<div class="navlist"><a href="#">Feed</a></div>
				<div class="navlist"><a href="#">Profile</a></div>
				<div class="navlist"><a href="#">Notification</a></div>
				<div class="navlist"><a href="#">Logout</a></div>
				<?php } ?>
			</div>
		</div> 