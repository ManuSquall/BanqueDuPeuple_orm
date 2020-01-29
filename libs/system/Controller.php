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
}

