<?php

//Create a random code
$random = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
//Send a mail of confirmation
$to      = 'micelandroid10@gmail.com';
$subject    = 'Bienvenue to Events Change My Life';
$message   = 'Veuillez confirmer votre mail en cliquant sur le lien suivant: http://localhost/xampp/www.CARVloz/github/EventsChangeMyLife_SiteWeb/php/confirm_account.php?confirmation_code='.$random;
//SignUp.php?nom=a&prenom=a&email=a&utilisateur=a&sexe=1&password1=a
$headers = 'From: eventschandelife@support.com' . "\r\n" .
    'Reply-To: eventschandelife@support.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
//@mail($to, $subject, $message, $headers);


	 
	//Enviamos el correo electrónico
	if(!mail($to, $subject, $message, $headers)) {
	  echo "Error: ";
	} else {
	  echo "Message send";
	}

?>

