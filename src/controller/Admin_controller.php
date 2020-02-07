<?php




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
        if(isset($_POST['login']) && isset($_POST['mdp'])){
        $login = $_POST['login'];
        $pwd = $_POST['mdp'];
        
        $admin_dao = new Admin_db();
        
        $squall = $admin_dao->connect($login, $pwd);
        if($squall!=null){

                     
            $_SESSION['login']=$login;
            $_SESSION['mdp']=$pwd;

            
            
            // var_dump( $squall);
            // var_dump( $squall[0]);
            // echo $squall[0]["id"];            
            $this->view->load("accueil");
        }else{
            // Admin_controller::boot();
            header("location: http://localhost/projects/banqueDuPeuple_orm/");
        }    
    } 
    }

    public function accueil(){

        // on quitte une page intérieur pour revenir a l'accueill
        if(isset($_SESSION['login']) && isset($_SESSION['mdp'])){
            $this->view->load("accueil");
        }else
        header("location: http://localhost/projects/banqueDuPeuple_orm/");


    }

    public function disconnect(){
        
       
        session_unset();
        session_destroy();
        // Admin_controller::boot();
        // echo $_SESSION['login'];
        // echo $_SESSION['mdp'];
        // die();
        header("location: http://localhost/projects/banqueDuPeuple_orm/");

    }

    public function delete($id){
        echo $id;
        // return $this->view->load("roles/add");
    }

}

?>