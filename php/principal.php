<?php
	//VERIFICA SI ESTA LOGUEADO
	require_once("sesion.class.php");
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	if( $usuario == false )
	{	header("Location: login.php");		
	}
	else 
	{
	?>

	<!DOCTYPE html>
	<html lang = "fr">
		<head>
			<meta charset = "UTF-8"/>
			<link href="css/styles.css" type="text/css" rel="stylesheet" />
			<title>Bonjour, '.$login.'</title>
		</head>
		<body style="background-color:#E3F6CE">
			<section id="frmSection">
			<fieldset>
			<legend id="mainLegend"><h1>Tu es connecté(e)</h1></legend>
			<p>Bienvenue <?php echo $sesion->get("usuario"); ?>, maintenant tu es connecté(e) sur le site.</p>
			<a href="cerrarsesion.php"> Me déconnecter </a>
			</fieldset>
			</section>
		</body>
	</html>





	<?php 
	}//else (SY ESTA LOGUEADO)
?>