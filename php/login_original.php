<?php
require_once("sesion.class.php");
$sesion = new sesion();

if( isset($_POST["btnOk"]) )
{
		
	$utilisateur = $_POST["utilisateur"];
	$password = $_POST["contrasenia"];
	
	if(validerUtilisateur($utilisateur,$password) == true)
	{			
		$sesion->set("utilisateur",$utilisateur);
		
		header("location: principal.php");
	}
	else
	{
		echo "Le mot de passe et/ou l'utilisateur sont incorrects";
	}
}



function validerUtilisateur($utilisateur, $password)
{
	$conexion = new mysqli("localhost","root","","EVENTSCHANGELIFE");

	$consulta = "select pass from PEOPLE where username = '$utilisateur';";
	
	$result = $conexion->query($consulta);
	
	if($result->num_rows > 0)
	{
		$fila = $result->fetch_assoc();
		if( strcmp($password,$fila["pass"]) == 0 )
			return true;
		else
			return false;
	}
	else
		return false;
}
?>

<!DOCTYPE html> 
<html lang = "fr">
	<head> 
		<meta charset = "UTF-8 " /> 
		<link href="css/styles.css" type="text/css" rel="stylesheet" /> 
		<title>Administration</title> 
	</head> 
	<body onload="window.document.getElementById('saiLogin').focus();"> 
		<section id="frmSection"> 
		<form name="frmLogin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="identfrm" autocomplete="on"> 
			<fieldset> 
				<legend id="mainLegend">IDENTIFICATION REQUISE</legend> 
				<label for="saiLogin">Login/Nom d'utilisateur</label><br /> 
				<input type="text" size="40" name="utilisateur" value="" id="utilisateur" placeholder="Votre login" autofocus required /><br /> 
				<label for="saiPass">Pass/Mot de passe</label><br /> 
				<input type="password" size="40" autocomplete="off" name="contrasenia" value="" id="contrasenia" placeholder="Mot de passe" required /><br /><br /> 
				<input type="submit" name="btnOk" value="OK" id="btnOk" /> 
			</fieldset> 
		</form> 
		</section> 
	</body> 
</html>