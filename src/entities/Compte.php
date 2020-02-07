<?php



use Doctrine\ORM\Mapping as orm;

/**
 *  @orm\Entity @orm\Table(name="compte")
 **/


class Compte
{
    /** @orm\Id  @orm\Column(type="integer") @orm\GeneratedValue */
    private $id;

    /** @orm\Column(type="string") **/
    private $numero;

    /** @orm\Column(type="integer") **/
    private $solde;

    /**
     * Many to one
     * Many "compte" have one "client". This is the owning side.
     * @orm\ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @orm\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

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

    
    public function getNumero()
    {
        return $this->numero;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    
    public function getSolde()
    {
        return $this->solde;
    }

    
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    
    public function getClient()
    {
        return $this->client;
    }

    
    public function setClient($client)
    {
        $this->client = $client;
    }
}

?>


