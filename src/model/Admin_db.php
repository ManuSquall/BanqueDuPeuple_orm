<?php

namespace src\model;

use Exception;
use libs\system\Model;

class Admin_db extends Model{

    public function connect($login, $pwd){
        
        try{
            $res = self::$getManager
                    ->createQuery("select a.id from Admin a where a.login ='$login' and a.pwd='$pwd'")
                    ->getResult();
            
    
        }catch(Exception $e){
                $res=0;
        }

        return $res;
    }
}



?>