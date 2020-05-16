<?php


namespace src\model;


use Doctrine\Common\Collections\ArrayCollection;
use libs\system\Model;

class UtilisateurRepository extends Model
{

    /**
     * UtilisateurRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addUtilisateur($utilisateur)
    {
        if($this->db != null)
        {
            $this->db->persist($utilisateur);
            $this->db->flush();

            return $utilisateur->getId();
        }
    }

    public function findAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Utilisateur')->findAll();
        }
    }

    public function getUtilisateur($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Utilisateur')->find(array('id' => $id));
        }
    }

    public function listeCaissiereById($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Utilisateur')->findBy(array('agence_id' => $id));
        }
    }

    public function findByUser($user)
    {
        if($user!=null)
        {
            $liUtil=$this->db->getRepository("Utilisateur")->findAll();

            foreach ($liUtil as $util) {

                if($user->getLogin()==="mballoS")
                {
                    return null;
                }
                elseif ($util->getUser()->getId()==$user->getId())
                {
                    return $util;
                }

            }
        }
        return null;
    }

    public function findByAgence($idAgence)
    {

        if($idAgence!=null)
        {
            $liUtil=$this->db->getRepository("Utilisateur")->findAll();
            $listAgence=array();
            $i=0;
            foreach ($liUtil as $util) {

                if($util->getAgence()!=null)
                {
                    if ($util->getAgence()->getId()==$idAgence)
                    {
                        $listAgence[$i]=$util;
                        $i++;
                    }

                }

            }
            return $listAgence;
        }
        return null;
    }

    public function updateUtilisateur($utilisateur){
        if($this->db != null)
        {
            $getUtilisateur = $this->db->find('Utilisateur', $utilisateur->getId());
            if($getUtilisateur != null)
            {
                $getUtilisateur->setNom($utilisateur->getNom());
                $getUtilisateur->setPrenom($utilisateur->getPrenom());
                $getUtilisateur->setAdresse($utilisateur->getAdresse());
                $getUtilisateur->setTelephone($utilisateur->getTelephone());
                $getUtilisateur->setProfil($utilisateur->getProfil());
                $this->db->flush();

            }else {
                die("Objet ".$utilisateur->getId()." does not existe!!");
            }
        }
    }

    public function updateProfilUtilisateur($utilisateur){
        if($this->db != null)
        {
            $getUtilisateur = $this->db->find('Utilisateur', $utilisateur->getId());
            if($getUtilisateur != null)
            {
                $getUtilisateur->setProfil($utilisateur->getProfil());
                $this->db->flush();

            }else {
                die("Objet ".$utilisateur->getId()." does not existe!!");
            }
        }
    }
    public function deleteUtilisateur($id){
        if($this->db != null)
        {
            $Utilisateur = $this->db->find('Utilisateur', $id);
            if($Utilisateur != null)
            {
                $this->db->remove($Utilisateur);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

}