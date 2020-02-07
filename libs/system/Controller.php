<?php

namespace libs\system;

use libs\system\View;

class Controller
{
    protected $view;
    function __construct()
    {
        $this->view=  new View();
    }

    // public function accueil()
    // {
    //     header("location: http://localhost/projects/banqueDuPeuple_orm/accueil");
    // }
    
    // public function connexion()
    // {
    //     header("location: http://localhost/projects/banqueDuPeuple_orm/");
    // }
}

