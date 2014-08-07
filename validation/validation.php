<?php
	
	include '../db_connect.php';
	include 'function.php';
		
	validateMail($_GET['email'], $mysqli);
	
?>


