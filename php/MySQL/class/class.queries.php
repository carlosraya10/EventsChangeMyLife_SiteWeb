<?php
/**
 * @author CARVloz
 * @copyright 2015
 *
 * #############################
 * Archivo de clases principales
 */
 
//Se requiere el archivo de configuracion
require("cfg/config.php");

class connectorDB extends configuration //clase principal de conexion y consultas
{
	private $conexion;
		
	public function __construct(){
		$this->conexion = parent::connect(); //creo una variable con la conexión
		return $this->conexion;										
	}
	
	public function queryDB($query, $values = array()){  //funcion principal, ejecuta todas las consultas
		$result = false;
		
		if($statement = $this->conexion->prepare($query)){  //prepara la consulta
			if(preg_match_all("/(:\w+)/", $query, $campo, PREG_PATTERN_ORDER)){ //tomo los nombres de los campos iniciados con :xxxxx
				$campo = array_pop($campo); //inserto en un arreglo
				foreach($campo as $parametro){
					$statement->bindValue($parametro, $values[substr($parametro,1)]);
				}
			}
			try {
				if (!$statement->execute()) { //si no se ejecuta la consulta...
					print_r($statement->errorInfo()); //imprimir errores
				}
				$result = $statement->fetchAll(PDO::FETCH_ASSOC); //si es una consulta que devuelve valores los guarda en un arreglo.
				$statement->closeCursor();
			}
			catch(PDOException $e){
				echo "Erreur d'execution: \n";
				print_r($e->getMessage());
			}	
		}
		return $result;
		$this->conexion = null; //cerramos la conexión
	} /// Termina funcion consultarBD
}/// Termina clase conectorDB

//Esto es para probar la conexion de arriba
class Person
{
	private $people;
	
	public function getPeople(){
		$query = "SELECT * FROM PEOPLE";
		$values = null;
		
		$oConnect = new connectorDB; //instanciamos conector
		$this->people = $oConnect->queryDB($query,$values);
        
		return $this->people;
	} //Termina funcion obtenerPersonas();
	
	
	public function insertPeople($fname,$lname,$email,$sex,$username,$pass){
        $insert = false; //creamos una variable de control
		$query = "INSERT INTO PEOPLE (fname,lname,email,sex,username,pass) VALUES (:fname, :lname, :email, :sex, :username, :pass)";
		
		//VALORES PARA REGISTRO
		$values = array("fname"=>$fname,
						"lname"=>$lname,
						"email"=>$email,
						"sex"=>$sex,
						"username"=>$username,
						"pass"=>$pass);
		
		$oConexion = new connectorDB; //instanciamos conector
		$insert = $oConexion->queryDB($query, $values);
		
		if($insert !== false){
			return true;
		}
		else{
			return false;
		}
    } //Termina funcion registrarUsuarios()
}/// TERMINA CLASE USUARIOS ///