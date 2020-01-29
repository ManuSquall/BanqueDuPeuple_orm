<?php

namespace libs\system;

class View
{
    function __construct()
    {
        
    }

    public function load()
    {
        // variable pour compter le nbre d'args
        $num = func_num_args();

        //tableau d'argument passé avec load
        $args = func_get_args();

        switch ($num) {
            case 1:
                $file = "src/view/".$args[0].".php";
                
                if (file_exists($file)) {
                    require_once $file;
                }else {
                    die($file." n'existe pas comme vue");
                }
                break;
            case 2:
                $file = "src/view/".$args[0].".php";
                
                if (file_exists($file)) {
                    $data = $args[1];
                    require_once $file;
                }else {
                    die($file." n'existe pas comme vue");
                }
                break;
            case 3:
                $file = "src/view/".$args[0]."/".$args[1].".php";
                
                if (file_exists($file)) {
                    $data = $args[2];
                    require_once $file;
                }else {
                    die($file." n'existe pas comme vue");
                }
                break;
            
            default:
                # code...
                break;
        }

    }

}

