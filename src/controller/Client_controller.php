<?php



use src\entities\Client;
use libs\system\Controller;
use src\model\Client_db;


class Client_controller extends Controller{
    
    // public function add(){
    //     return $this->view->load("roles/add");
    // }
    
    public $liste_client;

    public function list_client(){

        $client_dao = new Client_db();
        // echo 1;
        // die();
        $liste_client = $client_dao->get_client();
        
        
        return $this->view->load("client/list_client", $liste_client);
    }

    public function add_client(){
        return $this->view->load("client/add_client");
    }

    public function create_client(){

        if(isset($_POST['save'])){
            $data= array($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['numero']);
            $client_dao = new Client_db();
            $client_dao->add_client($data);
            
        }
        // echo $_POST['nom'];
        // echo $_POST['prenom'];
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