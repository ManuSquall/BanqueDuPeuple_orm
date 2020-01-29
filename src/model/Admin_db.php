<?php

namespace src\model;

use libs\system\Model;

class Admin_db extends Model{

    public function connect($login, $pwd){
        
        return $this->entityManager
                    ->createQuery("select a.id from admin a where a.login ='$login' and a.pwd='$pwd'")
                    ->getResult();
                    // "select id_admin from admin where login_admin='$login' and mdp_admin='$mdp';";
    }

}



?>