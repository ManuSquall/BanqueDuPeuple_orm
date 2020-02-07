<?php

namespace src\model;

use Exception;
use libs\system\Model;

class Client_db extends Model{

    
    // public function __construct(){
        

    //    var_dump($this->entityManager);
    //    var_dump(self::$getManager);
        
    // }

    public function get_client(){
        try{
            // var_dump(Model::$getManager);
            // var_dump(self::$getManager);
            // die();
            $res = self::$getManager->createQuery("select c from Client c ")
                    ->getResult();
                    
    
        }catch(Exception $e){
                $res=0;
        }

        return $res;
    }

}



?>