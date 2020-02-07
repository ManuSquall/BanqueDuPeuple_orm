<?php

namespace libs\system;

use Doctrine\ORM\EntityManager;

class Model
{
    protected $entityManager;
    protected static $getManager;

    public function __construct()
    {
        require_once "bootstrap.php";
        echo get_called_class().'<br/> ';
        if(isset($entityManager)){
            if($entityManager!=null){
                // $this->entityManager = $entityManager;
                Model::$getManager = $entityManager;
            }
        }
        
        
        
        // var_dump( self::$getManager);
        // var_dump($entityManager);

        // var_dump($this->entityManager);
        // die(); 
    }

}

