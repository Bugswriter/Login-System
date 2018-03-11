<?php
	
	//Sucess Message
	session_start();
	echo "<h1>Success:</h1>";
	if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
		echo "Message: ". $_SESSION['message'];
		echo "\n<a href='index.php'>home</a>";
	}else{
		header("location: index.php");
	}

?>
