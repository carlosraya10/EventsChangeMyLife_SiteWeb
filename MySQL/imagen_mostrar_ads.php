<?php
########## imagen_mostrar.php ########## SINGLETON
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com

# Conectamos con MySQL
$link=mysql_connect("localhost","root","");
if (!$link) {
    die("Error al conectar: ".mysql_error());
}

# Seleccionamos la base de datos
$db_selected=mysql_select_db("Eventschangelife",$link);
if (!$db_selected) {
    die ("No se puede conectar con la base de datos: ".mysql_error());
}

# Buscamos la imagen a mostrar
$result=mysql_query("SELECT photo FROM `ADS` WHERE id_ad=".$_GET["id"],$link);
$row=mysql_fetch_array($result);

# Mostramos la imagen
//header("Content-type:".$row["tipo"]);
echo $row["photo"];
?>