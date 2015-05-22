<?php
class SingletonPattern{
	
    // Contient l'intance du Singleton
    private static $instance;
	private $values = array();
    private $values1 = array();
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

    public function query1($val)
    {
        $query1 = $this->dbh->prepare($val);
        $query1->execute();
        if ($query1->rowCount()>0) 
        {
            while($reg = $query1->fetch())
            {
               $this->values1[]=$reg;
            }
            return $this->values1;     
        }
    }

    public function query2($val2)
    {
        $query2 = $this->dbh->prepare($val2);
        if ($query2->execute()){
            //echo ("ok");
            return true;
        }
        else{
            echo ("Error! Merci de bien vérifier les données dans la page précédente.");
        }
    }
   
    // Empêche que l'objet puisse se cloner
    public function __clone()
    {
        trigger_error('La clonation de cet objet ne se permet pas.', E_USER_ERROR);
    }
}

//Basé sur l'exemple du site : http://uno-de-piera.com/el-patron-singleton-en-php/
?>
