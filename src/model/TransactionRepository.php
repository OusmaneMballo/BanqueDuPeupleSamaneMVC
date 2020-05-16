<?php


namespace src\model;
use libs\system\Model;

class TransactionRepository extends Model
{

    /**
     * TransactionRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addTransaction($transac)
    {
        if($this->db != null)
        {
            $this->db->persist($transac);
            $this->db->flush();

            return $transac->getId();
        }
    }

    public function findAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Transaction')->findAll();
        }
    }

    public function getTransaction($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('Transaction')->find(array('id' => $id));
        }
    }

    public function update($transact){
        if($this->db != null)
        {
            $getTransaction = $this->db->find('Transaction', $transact->getId());
            if($getTransaction != null)
            {
                $getTransaction->setDateCreation($transact->getDateCreation());
                $getTransaction->setType($transact->getType());
                $getTransaction->setFrais($transact->getFrais());
                $getTransaction->setMontant($transact->getMontant());
                $getTransaction->setCompte($transact->getCompte());
                $getTransaction->setUtilisateur($transact->getUtilisateur());
                $getTransaction->setClient($transact->getClient());
                $this->db->flush();

            }else {
                die("Objet ".$transact->getId()." does not existe!!");
            }
        }
    }

    public function delete($id){
        if($this->db != null)
        {
            $Transaction = $this->db->find('Transaction', $id);
            if($Transaction != null)
            {
                $this->db->remove($Transaction);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }
}