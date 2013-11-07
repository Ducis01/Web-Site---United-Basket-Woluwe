<?php 
	//Sources from http://www.wikihow.com.

	function sec_session_start() {
			$session_name = 'sec_ubw_session_id'; // Set a custom session name
			$secure = false; // Set to true if using https.
			$httponly = true; // This stops javascript being able to access the session id.
	
			ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies.
			$cookieParams = session_get_cookie_params(); // Gets current cookies params.
			session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
			session_name($session_name); // Sets the session name to the one set above.
			session_start(); // Start the php session
			session_regenerate_id(); // regenerated the session, delete the old one.
	}
	
	function login($email, $password, $mysqli) {
	
	   // Using prepared Statements means that SQL injection is not possible.
	   if ($stmt = $mysqli->prepare("SELECT id, username, password, salt FROM MEMBERS_LOGIN WHERE email = ? LIMIT 1")) {
		  $stmt->bind_param('s', $email); // Bind "$email" to parameter.
		  $stmt->execute(); // Execute the prepared query.
		  $stmt->store_result();
		  $stmt->bind_result($user_id, $username, $db_password, $salt); // get variables from result.
		  $stmt->fetch();
		  $password = hash('sha512', $password.$salt); // hash the password with the unique salt.
	
		  if($stmt->num_rows == 1) { // If the user exists
		  
			 // We check if the account is locked from too many login attempts
			 
			 if(checkbrute($user_id, $mysqli) == true) {
				// Account is locked
				// Send an email to user saying their account is locked
				return false;
				
			 } else {
			 
			 	if($db_password == $password) { // Check if the password in the database matches the password the user submitted.
					// Password is correct!
	
	
					$user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
	
					$user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
					$_SESSION['user_id'] = $user_id;
					$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
					$_SESSION['username'] = $username;
					$_SESSION['login_string'] = hash('sha512', $password.$user_browser);
				
					// Login successful.
					return true;
				
				} else {
			 
					// Password is not correct
					// We record this attempt in the database
				
					$now = time();
					$mysqli->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
					return false;
				}
			}
				
		} else {
		
			 // No user exists.
			 return false;
		  }
	   }
	}
?>