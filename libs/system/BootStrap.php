<?php


use libs\system\Controller;
use src\controller\Admin_controller;


namespace libs\system;



class BootStrap
{
    function __construct()
    {
if(isset($_GET["url"])){
            $url = explode("/", $_GET["url"]);
            
            $controller_file="src/controller/".$url[0]."_controller.php";
            if(file_exists($controller_file)){
                require_once $controller_file;
                $file=$url[0]."_controller";
                $controller_object = new $file();

                if(isset($url[2])){
                    $method = $url[1];
                    if(method_exists($controller_object, $method)){
                        $controller_object->$method($url[2]);
                    }else{
                        die($metod." n'existe pas dans le controlleur ".$file);
                    }
                }
                
                if(isset($url[3])){
                    $method = $url[1];
                    if(method_exists($controller_object, $method)){
                        $controller_object->$method($url[2], $url[3]);
                    }
                }

                else if(isset($url[1])){
                    $method = $url[1];
                    if(method_exists($controller_object, $method)){
                        $controller_object->$method();
                    }else{
                        die($metod." n'existe pas dans le controlleur ".$file);
                    }
                }

            }else{
                die($controller_file." n'existe pas ");
            }
        }else{

            $page="Admin";
            $controller_file="src/controller/Admin_controller.php";
            require_once $controller_file;
            $file="Admin_controller";
            $controller_object = new $file();
            $controller_object->boot();
        }
        
    }
}

?>