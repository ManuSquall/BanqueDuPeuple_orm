<?php


use Doctrine\ORM\Mapping as ORM;

/**
 *  @orm\Entity @orm\Table(name="client")
 **/


class Client
{
    /** @orm\Id  @orm\Column(type="integer") @orm\GeneratedValue */
    private $id;

    /** @orm\Column(type="string") **/
    private $nom;

    /** @orm\Column(type="string") **/
    private $prenom;

    /** @orm\Column(type="string") **/
    private $adresse;

    /** @orm\Column(type="integer") **/
    private $numero;

    /** @orm\Column(type="string") **/
    private $compte;

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

    
    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    
    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    
    public function getAdresse()
    {
        return $this->adresse;
    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    
    public function getNumero()
    {
        return $this->numero;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    
    public function getCompte()
    {
        return $this->compte;
    }

    
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }
}

?>


