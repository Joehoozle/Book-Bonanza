<?php
	//Just logs session variables 
	session_start();
	//gather all student search information into session variables
	$_SESSION['author'] = $_POST['author'];
	$_SESSION['lexile'] = $_POST['lexile'];
	$_SESSION['length'] = $_POST['length'];
	$_SESSION['genre'] = $_POST['genre'];
	$_SESSION['trait1'] = $_POST['trait1'];
	$_SESSION['trait2'] = $_POST['trait2'];
?>
