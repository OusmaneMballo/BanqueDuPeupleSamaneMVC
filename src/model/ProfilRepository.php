<?php


namespace src\model;
use libs\system\Model;

class ProfilRepository extends Model
{

    /**
     * ProfilRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getProfil($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Profil')->find(array('id' => $id));
        }
    }

    public function addProfil($profil)
    {
        if($this->db != null)
        {
            $this->db->persist($profil);
            $this->db->flush();

            return $profil->getId();
        }
    }
    public function deleteProfil($id){
        if($this->db != null)
        {
            $profil = $this->db->find('Profil', $id);
            if($profil != null)
            {
                $this->db->remove($profil);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function updateProfil($profil){
        if($this->db != null)
        {
            $getProfil = $this->db->find('Profil', $profil->getId());
            if($getProfil != null)
            {
                $getProfil->setLibel($profil->getLibel());
                $this->db->flush();

            }else {
                die("Objet ".$profil->getId()." does not existe!!");
            }
        }
    }

    public function listeAllProfil()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Profil')->findAll();
        }
    }
    public function getProfilByLibelle($libel)
    {
        $listprofil=$this->db->getRepository("Profil")->findAll();
        foreach ($listprofil as $profil) {
            if($profil->getLibel()===$libel)
            {
                return $profil;
            }

        }
        return null;
    }
}