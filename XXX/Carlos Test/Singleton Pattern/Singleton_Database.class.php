<?php
class SingletonPattern{
	
    // Contient l'intance du Singleton
    private static $instance;
	private $values = array();
	private $dbh;
 
    // Un constructeur privé empêche la création d'un nouveau objet
    private function __construct() {
		$this->dbh = new PDO("mysql:host=localhost;dbname=EVENTSCHANGELIFE", "root", "");
    }
 
    // Méthode singleton
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
   
    // Empêche que l'objet puisse se clôner
    public function __clone()
    {
        trigger_error('La clonation de cet objet ne se permet pas.', E_USER_ERROR);
    }
}

//From: http://uno-de-piera.com/el-patron-singleton-en-php/
?>
