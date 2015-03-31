<?php
//VERIFICA SI ESTA LOGUEADO
  require_once("../backend/admin/sesion.class.php");
  $sesion = new sesion();
  $usuario = $sesion->get("usuario");
  if( $usuario == false )
  { header("Location: ../backend/admin/login.php");    
  }
  	else 
  	{
		//Recuperamos el score
		$score = $_POST["puntos"];

		//Connexion DB
	    //Parametres mysql
	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "td_php";

	    $conn = new mysqli($servername, $username, $password, $dbname);
	    // Check connection
	    if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
	    } 

	    //Inserion de datos
	    $sql = "INSERT INTO scores (user, score) VALUES ('$usuario', $score)";

	    if ($conn->query($sql) === TRUE) {
	      echo "Your score was saved successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	        header("refresh:5; url=$self"); //Refrescamos a los 5 segundos
	    }
	    //Cerramos la conexion
	    $conn->close();

	    header("refresh:5; url=../html/snake.html"); //Redireccionamos
	}//else
	?>

