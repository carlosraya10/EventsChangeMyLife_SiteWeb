<?php
//mail("micelandroid10@gmail.com","sujet","This is a simple e-mail.");


	 
	//Enviamos el correo electrónico
	if(!mail("micelandroid10@gmail.com","sujet","This is a simple e-mail.")) {
	  echo "Error: ";
	} else {
	  echo "Message send";
	}
?>