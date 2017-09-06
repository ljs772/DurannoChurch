<?php


abstract class Model{
    protected $db;
     protected $db_config = array();
    
    private function setDB()
    {
      $this->db_config = array(
            'HOST'      => 'localhost',
            'DB_NAME'   => 'duranno',
            'USERNAME'  => 'duranno',
            'PASS'      => 'duranno123!'
        );
    	
    }

    public function connectDB()
    {    	
    	
    //	$this->setDB();
     	$this->setDB();
        $hosttmp = "mysql:host=".$this->db_config['HOST'].";dbname=".$this->db_config['DB_NAME'].";charset=utf8";
        try{
            $this->db = new PDO($hosttmp,$this->db_config['USERNAME'],$this->db_config['PASS']);
            
            $this->db->exec("set names utf8");
            
         //  set session character_set_connection=utf8;
           // set session character_set_results=utf8;
          //  set session character_set_client=utf8;
         
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnectDB()
    {
        $this->db = null;
    }
}
?>
