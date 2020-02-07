<?php

namespace src\model;

use Exception;
use libs\system\Model;
use src\entities\Compte;

class Compte_db extends Model{

    public function get_compte(){
        try{
            // var_dump($entityManager);
            $res = self::$getManager
                    ->createQuery("select c from Compte c ")
                    ->getResult();
            
    
        }catch(Exception $e){
                $res=0;
        }

        return $res;
    }

    public function get_nbr_compte(){
        try{
            $res = self::$getManager
                    ->createQuery("select count (c) from Compte c ")
                    ->getResult();
            
    
        }catch(Exception $e){
                $res=0;
        }

        return $res;
    }

}



?>