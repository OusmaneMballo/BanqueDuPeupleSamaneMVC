<?php


namespace src\model;
use libs\system\Model;

class AgenceRepository extends Model
{

    /**
     * AgenceRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }



    public function getAgence($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Agence')->find(array('id' => $id));
        }
    }

    public function add($agence)
    {
        if($this->db != null)
        {
            $this->db->persist($agence);
            $this->db->flush();

            return $agence->getId();
        }
    }
    public function delete($id){
        if($this->db != null)
        {
            $agence = $this->db->find('Agence', $id);
            if($agence != null)
            {
                $this->db->remove($agence);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function update($agence){
        if($this->db != null)
        {
            $getAgence = $this->db->find('Agence', $agence->getId());
            if($getAgence != null)
            {
                $getAgence->setNom($agence->getNom());
                $getAgence->setAdresse($agence->getAdresse());
                $getAgence->setRegion($agence->getRegion());
                $this->db->flush();

            }else {
                die("Objet ".$agence->getId()." does not existe!!");
            }
        }
    }

    public function listeAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Agence')->findAll();
        }
    }
}