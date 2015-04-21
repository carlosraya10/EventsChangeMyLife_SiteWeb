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
	

	$conexion = new mysqli("localhost","root","","EVENTSCHANGELIFE");
	$query1 = "select pass from PEOPLE where username = '$user' or email = '$user';";

	$result = $conexion->query($query1);
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

?>