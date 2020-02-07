<?php

namespace src\model;

use Client;
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

    public function add_client($data){
        $c = new Client();

        $c->setNom($data[0]);
        $c->setPrenom($data[1]);
        $c->setAdresse($data[2]);
        $c->setNumero($data[3]);

        self::$getManager->persist($c);
        self::$getManager->flush();
    }


}



?>