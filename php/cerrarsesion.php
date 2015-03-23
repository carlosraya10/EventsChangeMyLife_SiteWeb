<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");	
	if( $usuario == false )
	{	
		?><script languaje="javascript">
      		alert( "Deconnecté(e)" );
      		location.href = "../index.php";
      	</script><?php
    }
	else 
	{
		$usuario = $sesion->get("usuario");	
		$sesion->termina_sesion();
		?><script languaje="javascript">
      		alert( "Deconnecté(e)" );
      		location.href = "../index.php";
      	</script><?php
	}
?>