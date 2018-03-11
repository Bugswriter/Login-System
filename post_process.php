<?php

	/**
		Post process script 
		By Bugswriter/Suraj
	**/
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES)){
		$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		$caption = filter_var($_POST['caption'], FILTER_SANITIZE_STRING);
		
		
	}else{
		$_SESSION['message'] = "Wrong way to get access to this page\n";
		header("location: error.php");
	}


?>