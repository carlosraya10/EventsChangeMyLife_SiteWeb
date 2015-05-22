<?php

$currentIdAd = $_GET['currentIdAd'];
//echo "currentIdAd=".$currentIdAd;

	//VEFIFIER SI L'UTILISATEUR EST LOGIN
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");


//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

//ELIMINAMOS
		$res = "DELETE FROM ADS WHERE id_ad=$currentIdAd;";
		$usuario = $newSingleton->query2($res);
		header("Location: spaceClient_myAds.php");
?>