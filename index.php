<?php

session_start();   

require_once "config/autoload.php";

use libs\system\BootStrap;
// if(isset($_SESSION['login']) && isset($_SESSION['mdp'])){

// echo $_SESSION['login'];
// echo $_SESSION['mdp'];
// }
$mvc = new BootStrap();

?>
    