<?php
//mail("carlosraya10@gmail.com","asuntillo","Este es el cuerpo del mensaje");


	 
	//Enviamos el correo electrónico
	if(!mail("carlosraya10@gmail.com","asuntillo","Este es el cuerpo del mensaje")) {
	  echo "Error: ";
	} else {
	  echo "Message send";
	}
?>