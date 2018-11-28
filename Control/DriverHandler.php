<?php

require '../vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class DriverHandler {
    protected $database;
    protected $dbname = 'TransitPorts';
    
    public function __construct() {
        $acc = $serviceAccount = ServiceAccount::fromJsonFile('../secret/transitports-ee351-ff3793a676d7.json');
        $firebase = (new Factory)
                        ->withServiceAccount($serviceAccount)
                        ->withDatabaseUri('https://transitports-ee351.firebaseio.com/Driver/')
                        ->create();

                $this->database = $firebase->getDatabase();
    }
    
    public function get(int $driverID = NULL){
        if(empty($driverID)|| !isset($driverID)){return FALSE;}
        
        if($this->database->getReference($this->dbname)->getSnapshot()->hasChild($driverID)){
            return $this->database->getReference($this->dbname)->getChild($driverID)->getValue();
        }else{
            return FALSE;
        }
    }
    
    public function insert(array $data) {
 
       if (empty($data) || !isset($data)) { return FALSE; }
 
       foreach ($data as $key => $value){
 
           $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
 
       }
       
       return TRUE;
 
   }
 
   public function delete(int $userID) {
 
       if (empty($userID) || !isset($userID)) { return FALSE; }
 
       if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
 
           $this->database->getReference($this->dbname)->getChild($userID)->remove();
 
           return TRUE;
 
       } else {
 
           return FALSE;
 
       }
 
   }
   
   public function getLastID() {
       $numChild = $this->database->getReference($this->dbname)->getSnapshot()->numChildren();
       return $numChild+1;
       
   }
   
   
        

                
                
    
                
}

