<?php




use libs\system\Controller;
use src\model\Client_db;
use src\model\Compte_db;


class Compte_controller extends Controller{
    
    // public function add(){
    //     return $this->view->load("roles/add");
    // }

    public function list_compte(){
        
        $compte_dao = new Compte_db();
        // echo 1;
        // die();
        $liste_compte = $compte_dao->get_compte();
        
        return $this->view->load("compte/list_compte", $liste_compte);
    }
    
    public function add_compte(){

        $numero = self::generate_numero();
        
        $client_dao = new Client_db();
        
        // var_dump($client_dao->get_client());
        $liste_client = $client_dao->get_client();
        
        $data = array($numero, $liste_client);

        
        
        return $this->view->load("compte/add_compte", $data);
    }
    
    public function edit_compte(){
        
        return $this->view->load("compte/edit_compte");
    }

    public function generate_numero(){
        $compte_dao = new Compte_db();

        $i=intval($compte_dao->get_nbr_compte()[0]);
        $table= $compte_dao->get_compte();
        //on le concatène au dernier id

        $numero = 'CT-'.date("dmY-his",time()).'-'.($table[$i-1])->getId();

        

        return $numero;
    }

    // public function create_compte(){

    //     $c = new Compte();
    // }

    

    

}

?>