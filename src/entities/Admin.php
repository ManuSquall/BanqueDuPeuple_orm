<?php


use Doctrine\ORM\Mapping as ORM;

/**
 *  @orm\Entity @orm\Table(name="admin")
 **/


class Admin
{
    /** @orm\Id  @orm\Column(type="integer") @orm\GeneratedValue */
    private $id;

    /** @orm\Column(type="string") **/
    private $login;

    /** @orm\Column(type="string") **/
    private $pwd;
    

    public function __construct()
    {
        
    }

   

    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

   
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }
}

?>
