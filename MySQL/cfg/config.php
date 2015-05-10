<?php
/**
 * @author CARVloz
 * @copyright 2015
 *
 * #############################
 * Archivo de configuración
 * - Se requiere el archivo "configuration.ini" en la misma carpeta
 */
 
 
abstract class configuration {
	
	protected $datahost;
	protected function connect($file = 'configuration.ini'){
		
		if (!$ajustes = parse_ini_file($file, true)) throw new exception ('Is not possible to open the flie ' . $file . '.');
		$driver = $ajustes["database"]["driver"]; //controlador (MySQL la mayoría de las veces)
		$server = $ajustes["database"]["host"]; //servidor como localhost o 127.0.0.1 usar este ultimo cuando el puerto sea diferente
		$port = $ajustes["database"]["port"]; //Puerto de la BD
		$dbase = $ajustes["database"]["schema"]; //nombre de la base de datos

		try{
			return $this->datahost = new PDO (
										"mysql:host=$server;port=$port;dbname=$dbase",
										$ajustes['database']['username'], //usuario
										$ajustes['database']['password'], //constrasenia
										array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
										);
			}
		catch(PDOException $e){
				echo "Connection error: ".$e->getMessage();
			}
	}
}
?>