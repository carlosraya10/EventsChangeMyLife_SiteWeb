<?php
	//VEFIFIER SI L'UTILISATEUR EST LOGIN
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");


//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

	//Seleccionamos el id_photo del usuario actual desde PEOPLE_PHOTOS
			$res = "SELECT * FROM PEOPLE_PHOTOS where id_people = (SELECT id_people from PEOPLE where username = '$user' or email='$user');";
			$idphoto = $newSingleton->query($res);
			foreach ($idphoto as $row):
				$idphoto = $row["id_photo"];
			endforeach;

//ELIMINAMOS
		$res = "DELETE FROM PEOPLE WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
		$res = "DELETE FROM PEOPLE_PHOTOS WHERE id_photo='$idphoto';";
		$usuario = $newSingleton->query2($res);
		$res = "DELETE FROM PHOTOS WHERE id_photo='$idphoto';";
		$usuario = $newSingleton->query2($res);
		$eliminame = 0;
		header("Location: fermerSession.php");
?>