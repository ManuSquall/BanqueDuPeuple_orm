<?php




use libs\system\Controller;
use src\model\Client_db;


class Client_controller extends Controller{
    
    // public function add(){
    //     return $this->view->load("roles/add");
    // }
    
    public $liste_client;

    public function list_client(){

        $client_dao = new Client_db();
        echo 1;
        die();
        $liste_client = $client_dao->get_client();
        
        
        return $this->view->load("client/list_client", $liste_client);
    }

    public function add_client(){
        return $this->view->load("client/add_client");
    }
    
    public function detail_client(){
        
        return $this->view->load("client/detail_client");
    }

    public function edit_client(){
        return $this->view->load("client/edit_client");
    }

    



    

    

}

?>