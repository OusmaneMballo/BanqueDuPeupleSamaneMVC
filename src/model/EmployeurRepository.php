<?php

namespace src\model;
use libs\system\Model;

class EmployeurRepository extends Model
{


    /**
     * EmployeurRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addEmployeur($employeur)
    {
        if($this->db != null)
        {
            $this->db->persist($employeur);
            $this->db->flush();

            return $employeur->getId();
        }
    }

    public function findAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Employeur')->findAll();
        }
    }

    public function getEmployeur($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Employeur')->find(array('id' => $id));
        }
    }
    public function updateEmployeur($employeur){
        if($this->db != null)
        {
            $getEployeur = $this->db->find('Employeur', $employeur->getId());
            if($getEployeur != null)
            {
                $getEployeur->setRaisonSocial($employeur->getRaisonSocial());
                $getEployeur->setNom($employeur->getNom());
                $getEployeur->setNumero($employeur->getNumero());
                $getEployeur->setAdresse($employeur->getAdresse());
                $this->db->flush();

            }else {
                die("Objet ".$employeur->getId()." does not existe!!");
            }
        }
    }

    public function deleteEmployeur($id){
        if($this->db != null)
        {
            $employeur = $this->db->find('Employeur', $id);
            if($employeur != null)
            {
                $this->db->remove($employeur);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

}