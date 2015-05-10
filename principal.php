<?php
	//VEFIFIER SI L'UTILISATEUR EST LOGIN
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");
	if( $user == false )
	{
		header("Location: account.php");
	}
	else 
	{
	?>

	<!DOCTYPE html>
	<html lang = "fr">
		<head>
			<meta charset = "UTF-8"/>
			<link href="css/styles.css" type="text/css" rel="stylesheet" />
			<title>Bonjour, <?= $user; ?></title>
		</head>
		<body style="background-color:#E3F6CE">
			<section id="frmSection">
			<fieldset>
			<legend id="mainLegend"><h1>Tu es connecté(e)</h1></legend>
			<p>Bienvenue <?= $user; ?>, maintenant tu es connecté(e) sur le site.</p>
			<a href="fermerSession.php"> Me déconnecter </a>
			</fieldset>
			</section>
		</body>
	</html>
	<?php 
	}//else (SY ESTA LOGUEADO)
?>