<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $numero;
    /** @Column(type="string") **/
    private $dateCreation;
    /** @Column(type="string", nullable=true) **/
    private $dateLimite;
    /** @Column(type="string") **/
    private $type;
    /** @Column(type="string") **/
    private $etat;
    /** @Column(type="decimal") **/
    private $solde;
    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="Client", inversedBy="compte", cascade={"persist"})
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    /**
     * Many compte is created by one utilisateur. This is the owning side.
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="compte", cascade={"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $utilisateur;
    /**
     * Many Groups have Many Users.
     * @ManyToMany(targetEntity="Transaction", mappedBy="compte",cascade={"persist"})
     */
    private $transactions;

    /**
     * Compte constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation=$dateCreation;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return mixed
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @return mixed
     */
    public function getDateLimite()
    {
        return $this->dateLimite;
    }

    /**
     * @param mixed $dateLimite
     */
    public function setDateLimite($dateLimite)
    {
        $this->dateLimite = $dateLimite;
    }


}