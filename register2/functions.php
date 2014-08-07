<?php 
	
	function registrationMail($sender_email)
	{
    
    	$passage_ligne = "\n";
		$boundary = "-----=".md5(rand());
    
    
		$recipient = "$sender_email";
		$subject = "Inscription via le site web";
    
    
		$mailheaders = "From: Inscription United Basket Woluwe <no_reply@registratonUnitedBasketWoluwe.be> \n";
		$mailheaders .= "Reply-To: $sender_email\n";
		$mailheaders .= "MIME-Version: 1.0".$passage_ligne;
		$mailheaders .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
		$message = "
		<html><head></head><body>
		<p><b>Merci !</b></p>
		
		<p><a href='http://localhost:8888/validation/validation.php?email=$sender_email'>Lien d'activation du compte.</a></p>
		
		
		<p>Le comit&eacute; organisateur de United Basket Woluwe </p> \n
    
    
    	</body></html>";
    
    	$message.= $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$msg.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
    
    
    
		mail($recipient, $subject, $message, $mailheaders);
				
	}
?>