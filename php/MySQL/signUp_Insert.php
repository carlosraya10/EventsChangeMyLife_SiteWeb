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
echo $fname;
 
//requerimos solo la clase consultas
require_once("class/class.queries.php");

/* Pour faire une rêquete des personnes */
$infoPeople = new Person;
$people_record = $infoPeople->getPeople();

print_r($people_record);


/* Pour registrer une personne */
$oPeopleRecord = new Person;
$insert = $oPeopleRecord->insertPeople($fname,$lname,$email,$sex,$username,$pass);


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
	} else {
	  echo "Message send";
	}

//Confirmation successful
if($insert){ echo "Insert Successful"; }
?>
</body>
</html>