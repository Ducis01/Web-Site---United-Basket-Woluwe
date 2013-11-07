<?php
	include '../db_connect.php';
	include 'functions.php';
	sec_session_start(); // Our custom secure way of starting a php session. 
	 
	//TODO
	
	//echo variables
	$ECHO = TRUE;
	
	
	
	
	if(isset($_POST['pEmail'], $_POST['p'])) { 
		
			
	        //-----------------//
			//Player Generality
	        //-----------------//
	        
	        $pName 		= $_POST['pName'];			//Player Name
	        $pSurname 	= $_POST['pSurname'];		//Player Surname
            $pGender 	= $_POST['pGender'];		//Player Gender
	        $pBirth 	= $_POST['pBirth'];			//Player Birthday
   	        $pNationality = $_POST['pNationality'];	//Player Nationality
	        $pBirthPlace = $_POST['pBirthPlace'];	//Player Birth Place
		    $pPlay 		= $_POST['pPlay'];			//Player ? basketPlayer
	        
	        //Adress Player
   	        $pStreet 	= $_POST['pStreet'];
	        $pCP 		= $_POST['pCP'];
	        $pLocality 	= $_POST['pLocality'];
	        
	        
	        
	        //-----------------//
	        //Tutor Generality
	        //-----------------//
	        
	        $tName 		= $_POST['tName'];			//Tutor Name
	        $tSurname 	= $_POST['tSurname'];		//Tutor Surname
	        //Adress Tutor
	        $tStreet 	= $_POST['tStreet'];
	        $tCP 		= $_POST['tCP'];
	        $tLocality 	= $_POST['tLocality'];


			//Electronics Information
	        
   	        $pEmail 	= $_POST['pEmail'];			//Player Mail + Login !!
	        $pPhone 	= $_POST['pPhone'];			//Player Phone Number
	        $pID 		= $_POST['pID'];			//Player Identity Card\Passport Number


	        $pass 		= $_POST['p'];				//Encrypted password
	        
	        
	        if ( $ECHO == true ) {
	        
		        echo "pName = " 		. $pName 		. "<br />";	
				echo "pSurname = " 		. $pSurname 	. "<br />";
				echo "pGender = " 		. $pGender 		. "<br />";

				echo "pBirth = " 		. $pBirth 		. "<br />";
				echo "tName = " 		. $tName 		. "<br />";	
				echo "tSurname = " 		. $tSurname 	. "<br />";
				echo "pEmail = " 		. $pEmail 		. "<br />";
				echo "pStreet = " 		. $pStreet 		. "<br />";
				echo "pCP = " 			. $pCP 			. "<br />";
				echo "pLocality = " 	. $pLocality 	. "<br />";	
				echo "tStreet = " 		. $tStreet 		. "<br />";
				echo "tCP = " 			. $tCP 			. "<br />";
				echo "tLocality =" 		. $tLocality	. "<br />";	
				echo "pPhone = " 		. $pPhone 		. "<br />";
				echo "pID = " 			. $pID 			. "<br />";
				echo "pNationality = " 	. $pNationality . "<br />";
				echo "pBirthPlace = " 	. $pBirthPlace 	. "<br />";
				echo "pPlay = " 		. $pPlay 		. "<br />";
				echo "pass = " 			. $pass			. "<br />";
				
			}	
			
			
			//Insert Player Model
			
			//Set Tutor variables if needed
			
			//Set Tuto Informations
			
			//Add Login and password + salt
			
			$salt = mcrypt_create_iv(128, MCRYPT_DEV_RANDOM);
			
			echo "salt = " 			. $salt			. "<br />";
				


	  
	  }

?>
