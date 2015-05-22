<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prueba | Clase para conexion MySQL con PHP y PDO by VCARVloz</title>
</head>

<body>
<?php
/**
 * @author CARVloz
 * @copyright 2015
 *
 * #############################
 * Archivo de prueba
 */

//Recuperamos los datos del registro para una persona
$fname = $_GET['prenom'];
$lname = $_GET['nom'];
$email = $_GET['email'];
$sex = $_GET['sexe'];
$username = $_GET['utilisateur'];
$pass = $_GET['password1'];
//$fname = $_POST['prenom'];
 
//On créé la connexion
    require_once 'Singleton_Database.class.php';

//On accede à la méthode singleton qui va créer une instance de notre classe
$newSingleton = SingletonPattern::singleton();

//Pour registrer une personne on accede au méthode "query2"
$res = "INSERT INTO PEOPLE(fname,lname,email,sex,username,pass) values('$fname','$lname','$email','$sex','$username','$pass');";
$usuario = $newSingleton->query2($res);

$res = "INSERT INTO PHOTOS(photo) values('');";
$usuario = $newSingleton->query2($res);

//Insertamos en PHOTOS un valor nulo y en PEOPLE_PHOTOS la referencia al nuevo usuario
$res = "SELECT * FROM PEOPLE order by id_people desc limit 1";
$idpeople = $newSingleton->query($res);
$res2 = "SELECT id_photo FROM PHOTOS order by id_photo desc limit 1";
$idphoto = $newSingleton->query1($res2);
foreach ($idpeople as $row):
	$idpe = $row["id_people"];
endforeach;
foreach ($idphoto as $row2):
	$idph = $row2["id_photo"];
endforeach;
	$res = "INSERT INTO PEOPLE_PHOTOS(id_people, id_photo) values('$idpe','$idph');";
	$usuario = $newSingleton->query2($res);

//Confirmation successful
if($usuario){ echo "Insert Successful"; header("Location: ../account.php");}

//Create a random code
$random = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
//Send a mail of confirmation
$to      = $email;
$subject    = 'Bienvenue to Events Change My Life '.$fname;
$message   = 'Veuillez confirmer votre mail en cliquant sur le lien suivant: http://localhost/xampp/www.CARVloz/github/EventsChangeMyLife_SiteWeb/php/confirm_account.php?confirmation_code='.$random;
//SignUp.php?nom=a&prenom=a&email=a&utilisateur=a&sexe=1&password1=a
$headers = 'From: eventschandelife@support.com' . "\r\n" .
    'Reply-To: eventschandelife@support.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
//@mail($to, $subject, $message, $headers);

	//On envoie l'e-mail
	if(!mail($to, $subject, $message, $headers)) {
	  echo "Error: ";
	  header("Location: ../account.php");
	} else {
	  echo "Message send";
	  header("Location: ../account.php");
	}

?>
</body>
</html>