<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$user = $sesion->get("user");	
	if( $user == false ) //S'il n'y a pas une session active, alors déconnecter pour que personne ne puisse pas regarder le code écrit ici
	{	
		?><script languaje="javascript">
      		alert( "Deconnecté(e)" );
      		location.href = "../index.php";
      	</script><?php
    }
	else 
	{ //Si l'utilisateur il existe, alors fermer la session
		$user = $sesion->get("user");	
		$sesion->termina_sesion();
		?><script languaje="javascript">
      		alert( "Deconnecté(e)" );
      		location.href = "../index.php";
      	</script><?php
	}
?>