<?php

	/**
		Login process script 
		By Bugswriter/Suraj
	**/
	
	session_start();
	
	if(isset($_SESSION['user_id']) && $_SESSION['login'] == True){
		//unsetting Session user ID and setting login == False
		unset($_SESSION['user_id']);	
		$_SESSION['login'] = False;	
		header('location: index.php');
	}


?>