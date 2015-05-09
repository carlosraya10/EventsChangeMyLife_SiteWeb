<?php
class SingletonPattern{
	
    // Contenedor de la instance del singleton
    private static $instance;
	private $values = array();
	private $dbh;
 
    // Un constructor privado evita la creación de un nuevo objeto
    private function __construct() {
		$this->dbh = new PDO("mysql:host=localhost;dbname=EVENTSCHANGELIFE", "root", "");
    }
 
    // método singleton
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $myClass = __CLASS__;
            self::$instance = new $myClass;
        } 
        return self::$instance;
    }
	
	public function query($val)
	{
		$query = $this->dbh->prepare($val);
		$query->execute();
		if ($query->rowCount()>0) 
		{
            while($reg = $query->fetch())
            {
               $this->values[]=$reg;
        	}
            return $this->values;     
        }
	}
   
    // Evita que el objeto se pueda clonar
    public function __clone()
    {
        trigger_error('La clonation de cet objet ne se permet pas.', E_USER_ERROR);
    }
}
?>