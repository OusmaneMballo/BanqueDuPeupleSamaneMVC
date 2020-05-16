<?php


namespace src\model;
use libs\system\Model;

class ClientRepository extends Model
{

    /**
     * ClientRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addClient($Client)
    {
        if($this->db != null)
        {
            $this->db->persist($Client);
            $this->db->flush();

            return $Client->getId();
        }
    }

    public function findAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Client')->findAll();
        }
    }

    public function getClient($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Client')->find(array('id' => $id));
        }
    }

    public function getClientByNci($nci)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Client')->find(array('nci' => $nci));
        }
    }

    public function getClientByIdUsr($idusr)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Client')->find(array('user_id' => $idusr));
        }
    }


    public function updateClient($Client){
        if($this->db != null)
        {
            $getClient = $this->db->find('Client', $Client->getId());
            if($getClient != null)
            {
                $getClient->setNom($Client->getNom());
                $getClient->setPrenom($Client->getPrenom());
                $getClient->setAdresse($Client->getAdresse());
                $getClient->setTelephone($Client->getTelephone());
                $getClient->setProfession($Client->getProfession());
                $getClient->setSalaire($Client->getSalaire());
                $getClient->setNci($Client->getNci());
                $getClient->setUser($Client->getUser());
                $getClient->setEmployeur($Client->getEmployeur());
                $this->db->flush();

            }else {
                die("Objet ".$Client->getId()." does not existe!!");
            }
        }
    }

    public function deleteClient($id){
        if($this->db != null)
        {
            $Utilisateur = $this->db->find('Client', $id);
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