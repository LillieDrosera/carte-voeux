<?php

			if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
			{
				//$emailValid = false;
				print("Email Invalide");
			}	
			else 
			{ 
				print("email envoyé");
				$expediteur = 	'lea.l@codeur.online';

				$to 		= 	$_REQUEST['email'];
     			$subject 	= 	'Une carte pour vous';
				$message 	= 	'Une petite carte pour vous : http://leal.student.codeur.online/carte-voeux/greetingsCard.html';
				$headers 	= 	"From: $expediteur" . "\r\n" .
								"Reply-To: webmaster@example.com" . "\r\n" .
								"X-Mailer: PHP/" . phpversion();

				mail($to, $subject, $message, $headers);
				header('Location:merci.html');
			}
		
?>

