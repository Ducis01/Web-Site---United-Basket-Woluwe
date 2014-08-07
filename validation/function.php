<?php

$error_msg = "";

	function validateMail($mail, $mysqli) {
		
		$email = filter_var($mail, FILTER_VALIDATE_EMAIL);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        // L’adresse email n’est pas valide
        	$error_msg .= '<p class="error">L’adress email que vous avez entrée n’est pas valide</p>';
        }
        		
        $prep_stmt = "SELECT id, username, password, salt FROM members WHERE email = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param('s', $email); // Bind "$email" to parameter.
		$stmt->execute(); // Execute the prepared query.
		$stmt->store_result();
		$stmt->bind_result($user_id, $username, $db_password, $salt, $validated); // get variables from result.
		$stmt->fetch();
 
		if ( strcasecmp($validated, '0')==0 ) {
            	
            	$stmt->free_result();
            	$stmt->close();
            	
            	$prep_stmt = "UPDATE members SET username='1' WHERE email=?";
				$stmt = $mysqli->prepare($prep_stmt);
            	$stmt->bind_param('s', $email);
   	            if (! $stmt->execute()) {
	                header('Location: ../error.php?err=Validation failure: UPDATE');
	            } else {
		            header('Location: ./validationSuccessfull.html');
	            }
	            
	            return true;
			
		} else {
        	$error_msg .= '<p class="error">Erreur de base de données</p>';
        	
        	return false;
		}
        
	}
		
?>
