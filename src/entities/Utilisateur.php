<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="utilisateur")
 **/
class Utilisateur
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $telephone;
    /**
     * Many utilisateur have one profil. This is the owning side.
     * @ManyToOne(targetEntity="Profil", inversedBy="utilisateur", cascade = {"persist"})
     * @JoinColumn(name="profil_id", referencedColumnName="id")
     */
    private $profil;
    /**
     * Many utilisateur have one agence. This is the owning side.
     * @ManyToOne(targetEntity="Agence", inversedBy="utilisateur", cascade = {"persist"})
     * @JoinColumn(name="agence_id", referencedColumnName="id")
     */
    private $agence;
    /**
     * One utilisateur has created many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="utilisateur")
     */
    private $compte;
    /**
     * One utilisateur have many transaction. This is the inverse side.
     * @OneToMany(targetEntity="Transaction", mappedBy="utilisateur")
     */
    private $transaction;

   /**
     * Many utilisateur have one User. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="utilisateur", cascade = {"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Utilisateur constructor.
     */
    public function __construct()
    {
        $this->compte=new ArrayCollection();
        $this->transaction=new ArrayCollection();
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
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    /**
     * @return mixed
     */
    public function getAgence()
    {
        return $this->agence;
    }

    public function setAgence($agence)
    {
        $this->agence = $agence;
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
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }


}
