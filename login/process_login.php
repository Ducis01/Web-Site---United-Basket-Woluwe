<?php
	include '../db_connect.php';
	include 'functions.php';
	sec_session_start(); // Our custom secure way of starting a php session. 
	 
	if(isset($_POST['email'], $_POST['p'])) { 
	   $email = $_POST['email'];
	   $password = $_POST['p']; // The hashed password.
	   	   
	   if(login($email, $password, $mysqli) == true) {
	      	// Login success
		  	header( "refresh:1;url=login.html" );
		  	echo 'Success: You have been logged in!';


	   } else {
	      	// Login failed
		  	header('Location: ./login.html?error=1');
	   }
	} else { 
	   
	   // The correct POST variables were not sent to this page.
	   echo 'Invalid Request';
	}

?>
