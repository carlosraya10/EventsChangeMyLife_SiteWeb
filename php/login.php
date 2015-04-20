<?php
require_once("sesion.class.php");
$sesion = new sesion();
$msg = "";

if( isset($_POST["btnOk"]) )
{
		
	$user = $_POST["user"];
	$password = $_POST["pass"];
	
	if(checkUser($user,$password) == true)
	{			
		$sesion->set("user",$user);
		
		header("location: principal.php");
	}
	else
	{
		//echo "Le mot de passe et/ou l'utilisateur sont incorrects";
		$msg = "Le mot de passe et/ou l'utilisateur sont incorrects. Veuillez ressayer.";
	}
}



function checkUser($user, $password)
{
<<<<<<< HEAD
	$conexion = new mysqli("localhost","root","root","EVENTSCHANGELIFE");

	$consulta = "select pass from PEOPLE where email = '$usuario';";
	
=======
	$conexion = new mysqli("localhost","root","","EVENTSCHANGELIFE");
	$consulta = "select pass from PEOPLE where username = '$user' or email = '$user';";
>>>>>>> origin/master
	$result = $conexion->query($consulta);
	if($result->num_rows > 0)
	{
		$fila = $result->fetch_assoc();
		if( strcmp($password,$fila["pass"]) == 0)
			return true;
		else
			return false;
	}
	else
		return false;
}
<<<<<<< HEAD
?>

<!DOCTYPE html> 
<html lang = "fr">
	<head> 
		<meta charset = "UTF-8 " /> 
		<link href="css/styles.css" type="text/css" rel="stylesheet" /> 
		<title>Administration</title> 
	</head> 
	<body onLoad="window.document.getElementById('saiLogin').focus();"> 
		<section id="frmSection"> 
		<form name="frmLogin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="identfrm" autocomplete="on"> 
			<fieldset> 
				<legend id="mainLegend">IDENTIFICATION REQUISE</legend> 
				<label for="saiLogin">Login/Nom d'utilisateur</label><br /> 
				<input type="text" size="40" name="usuario" value="" id="usuario" placeholder="Votre login" autofocus required /><br /> 
				<label for="saiPass">Pass/Mot de passe</label><br /> 
				<input type="password" size="40" autocomplete="off" name="contrasenia" value="" id="contrasenia" placeholder="Mot de passe" required /><br /><br /> 
				<input type="submit" name="btnOk" value="OK" id="btnOk" /> 
			</fieldset> 
		</form> 
		</section> 
	</body> 
</html>
=======
?>
>>>>>>> origin/master
