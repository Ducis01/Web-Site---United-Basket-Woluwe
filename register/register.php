<!DOCTYPE html>
<html>
    <head>
        <title>Register to United Basket Woluwe Member Center</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
        <h2>Register Page</h2>

		<p>
		<p >Si vous souhaitez inscrire votre enfant auprès de notre club, nous vous invitons à compléter soigneusement le formulaire d'inscription ci-dessous (tous les champs, à l'exception des 2 derniers qui sont facultatifs, doivent être remplis). Ce formulaire ne doit pas être complété par les joueurs déjà affiliés au club.<br>
		</p>
		
		
		<?php
			
			//$salt = mcrypt_create_iv(128, MCRYPT_DEV_RANDOM);
			
			
			
			//echo $salt;
		
		?>
		
		<script type="text/javascript" src="../script/sha512.js"></script>
		<script type="text/javascript" src="../script/forms.js"></script>

         
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
        <form action="process_register.php" method="post" name="register_form">
        <td>
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
        <td colspan="3"><strong>Member Registration</strong></td>
        </tr>
        
        <tr>
	        <td width="278">Prénom</td>
	        <td width="6">:</td>
	        <td width="294"><input type="text" name="name" /></td>
        </tr>

        <tr>
	        <td>Nom</td>
	        <td>:</td>
	        <td><input type="text" name="p" id="surname"/></td>
        </tr>

		                
        <tr>
	        <td>Genre</td>
	        <td>:</td>
	        <td>
            <select>
            	<option value="null"> - - </option>
				<option value="male">Homme</option>
				<option value="female">Femme</option>
			</select>
	        
	        </td>
        </tr>
        

        <tr>
	        <td>Email</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="email"/></td>
        </tr>

        <tr>
	        <td>Adresse (rue, numéro)</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="street"/></td>
        </tr>

        <tr>
	        <td>Code Postal</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="cp"/></td>
        </tr>

        <tr>
	        <td>Localité</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
        
        <tr>
        <!-- Add JQuery for additionnal buttons -->
	        <td>Telephone</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
        
        <tr>
	        <td>Prénom de votre enfant</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
        
        <tr>
	        <td>Nom de votre enfant</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
        
        <tr>
	        <td>Date de naissance de votre enfant</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
        
        <tr>
	        <td>Numero national ( voir carte SIS ) </td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
                
        <tr>
	        <td>Nationalite</td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>
                
        <tr>
	        <td>Votre enfant a-t-il deja joue au basket ?</td>
	        <td>:</td>
	        <td>
		    	<select>
				<option value="no">Non</option>
				<option value="yes">Oui</option>
			</select>
	        </td>
        </tr>
        
        <tr>
	        <td>Si oui, a quel club est-il actuellement ou était-il affilie ? </td>
	        <td>:</td>
	        <td><input type="text" name="other" id="other"/></td>
        </tr>

        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /></td>
        </tr>
        
        </table>
        </td>
        </form>
        </tr>
        </table>
	</body> 
</html>
