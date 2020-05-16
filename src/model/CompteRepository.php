<?php


namespace src\model;
use Doctrine\Common\Collections\ArrayCollection;
use libs\system\Model;

class CompteRepository extends Model
{

    /**
     * CompteRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getCompte($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Compte')->find(array('id' => $id));
        }
    }

    public function addCompte($compte)
    {
        if($this->db != null)
        {
            $this->db->persist($compte);
            $this->db->flush();

            return $compte->getId();
        }
    }
    public function deleteCompte($id){
        if($this->db != null)
        {
            $compte = $this->db->find('Compte', $id);
            if($compte != null)
            {
                $this->db->remove($compte);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function updateCompte($compte){
        if($this->db != null)
        {
            $getCompte = $this->db->find('Compte', $compte->getId());
            if($getCompte != null)
            {
                $getCompte->setNumero($compte->getNumero());
                $getCompte->setType($compte->getType());
                $getCompte->setEtat($compte->getEtat());
                $this->db->flush();

            }else {
                die("Objet ".$compte->getId()." does not existe!!");
            }
        }
    }


    public function findAllCompte()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Compte')->findAll();
        }
    }

// cette methode retourne la liste des comptes d'un client.
    public function listeCompteClient($id)
    {
        if($id != null)
        {
            $listCmpt=$this->db->getRepository("Compte")->findAll();

            $listCmptClient=new ArrayCollection();

            foreach ($listCmpt as $cmpt) {

                if($cmpt->getClient()!=null)
                {
                    if ($cmpt->getClient()->getId()==$id)
                    {
                        $listCmptClient->add($cmpt);
                    }

                }

            }
            return $listCmptClient;
        }
        return null;
    }

    public function findByNumCom($numCompte)
    {
        if($numCompte!=null)
        {
            $listCompte=$this->db->getRepository("Compte")->findAll();

            foreach ($listCompte as $compte) {

                if($compte->getNumero()===$numCompte)
                {
                    return $compte;
                }

            }
        }
        return null;
    }
}