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

/* Para consultar Personas */
$infoPeople = new Person;
$people_record = $infoPeople->getPeople();

print_r($people_record);


/* Para registrar Personas */
$oPeopleRecord = new Person;
$insert = $oPeopleRecord->insertPeople($fname,$lname,$email,$sex,$username,$pass);


//Create a random code
$random = "pollo";
//Send a mail of confirmation
$to      = 'carlosraya10@gmail.com';
$subject    = 'Bienvenue to Events Change My Life';
$message   = 'Merci de confirmer votre mail en faisant clic sur le lien suivant: http://localhost/xampp/www.CARVloz/github/EventsChangeMyLife_SiteWeb/php/confirm_account.php?confirmation_code='.$random;
//SignUp.php?nom=a&prenom=a&email=a&utilisateur=a&sexe=1&password1=a
$headers = 'From: eventschandelife@support.com' . "\r\n" .
    'Reply-To: eventschandelife@support.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($to, $subject, $message, $headers);

//Confirmation successful
if($insert){ echo "Insert Successful"; }
?>
</body>
</html>