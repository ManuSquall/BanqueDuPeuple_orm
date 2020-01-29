<?php

namespace src\controller;

use libs\system\Controller;
use src\model\Admin_db;


class Admin_controller extends Controller{
    
    // public function add(){
    //     return $this->view->load("roles/add");
    // }

    public function boot(){
        
        return $this->view->load("connexion");
    }

    public function connect()
    {
        echo "squall";
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $admin_dao = new Admin_db();
        $admin = $admin_dao->connect($login, $pwd);
        return $this->view->load("accueil", $admin);
    }

    public function delete($id){
        echo $id;
        // return $this->view->load("roles/add");
    }

}

?>