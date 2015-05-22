<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
    .error {font-weight: bold; color:red;}
    .mensaje {color:#030;}
    .listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
    </style>
</head>
<body>

<?php
	//On créé la connexion
    include 'Singleton_Database.class.php';

//On accede à la méthode singleton qui va créer une instance de notre classe
$newSingleton = SingletonPattern::singleton();

//on accede au méthode "query2"
$res = "INSERT INTO PEOPLE(fname,lname,email,sex,username,pass) values('pepe','pepe','pepe@gmail.com','h','pepe','pepe');";
$usuario = $newSingleton->query2($res);

//on accede au méthode "query2"
$res = "UPDATE PEOPLE SET fname='pollo' WHERE username='pepe' or email='pepe@gmail.com';";
$usuario = $newSingleton->query2($res);

//on accede au méthode "query2"
$res = "DELETE FROM PEOPLE WHERE username='pepe' or email='user';";
$usuario = $newSingleton->query2($res);

//on accede au méthode "query"
$res = "SELECT * FROM people";
$usuario = $newSingleton->query($res);

//On montre tous les utilisateurs
echo "On montre tous les utilisateurs <br/>";

foreach ($usuario as $row):
  echo "<tr>";
  echo "<td align='center'>".$row["id_people"]."</td><td align='center'>" . $row["fname"]."</td><td align='center'>" . $row["lname"]."</td><td align='center'>" . $row["email"]."</td><td align='center'>" . $row["sex"]. "</td><td align='center'>" . $row["username"]. "</td><td align='center'>" . $row["pass"]. "</td>";
  echo "</tr>";
  echo "<br/>";
endforeach;



//**************************IMAGENES**************************
# Comprovamos que se haya subido un fichero
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img

        # Escapa caracteres especiales
        $imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `PHOTOS` (photo) VALUES ('".$imagenEscapes."')";
        //$result=mysql_query($sql,$link);
        $usuario = $newSingleton->query2($sql);
    }else{
        echo "<div class='error'>Error: Le format du fichier doit être JPG, GIF, BMP ou PNG.</div>";
    }
}


?>




<h2>Selecciona una imagen</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <input name="userfile" type="file">
    <p><input type="submit" value="Guardar Imagen">
</form>

<h2>Listado de las imagenes añadidas a la base de datos</h2>
<div class="listadoImagenes">
    <?php
    $res = "SELECT * FROM PHOTOS";
	$usuario = $newSingleton->query1($res);
    //On montre tous les photos

	foreach ($usuario as $row):
	  echo "<tr>";
	  echo "<td align='center'>".$row["id_photo"]."</td><td align='center'>" . "<img src='imagen_mostrar.php?id=".$row["id_photo"]."'/'></td>";
	  echo "</tr>";
	  echo "<br/>";
	endforeach;
    ?>
</div>
</body>
</html>
