<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="transaction")
 **/
class Transaction
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $dateCreation;
    /** @Column(type="string") **/
    private $type;
    /** @Column(type="decimal") **/
    private $frais;
    /** @Column(type="decimal") **/
    private $montant;
    /**
     * Many transaction in Many Compte.
     * @ManyToMany(targetEntity="Compte", inversedBy="transaction", cascade={"persist"})
     * @JoinTable(name="transaction_comptes")
     */
    private $compte;

    /**
     * Many transaction have one utilisateur.
     * @ManyToMany(targetEntity="Utilisateur", inversedBy="transaction", cascade={"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $utilisateur;
    /**
     * Many transaction have one client.
     * @ManyToOne(targetEntity="Client", inversedBy="transaction", cascade={"persist"})
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * Transaction constructor.
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
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
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
    public function getFrais()
    {
        return $this->frais;
    }

    public function setFrais($frais)
    {
        $this->frais = $frais;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    public function setCompte($compte)
    {
        $this->compte = $compte;
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
    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }
}