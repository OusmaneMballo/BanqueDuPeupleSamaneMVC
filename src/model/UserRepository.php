<?php


namespace src\model;
use libs\system\Model;

class UserRepository extends Model
{


    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function updateUser($user){
        if($this->db != null)
        {
            $getUser = $this->db->find('User', $user->getId());
            if($getUser != null)
            {
                $getUser->setPasswd($user->gettPasswd());
                $getUser->setLogin($user->getLogin());
                $getUser->setEmail($user->getEmail());
                $this->db->flush();

            }else {
                die("Objet ".$user->getId()." does not existe!!");
            }
        }
    }

    public function addUser($User)
    {
        if($this->db != null)
        {
            $this->db->persist($User);
            $this->db->flush();

            return $User->getId();
        }
    }

    public function findAll()
    {
        if($this->db != null)
        {
            return $this->db->getRepository('User')->findAll();
        }
    }

    public function getUser($id)
    {
        if($this->db != null)
        {
            return $this->db->getRepository('User')->find(array('id' => $id));
        }
    }

    public function deleteUser($id){
        if($this->db != null)
        {
            $User = $this->db->find('User', $id);
            if($User != null)
            {
                $this->db->remove($User);
                $this->db->flush();
            }else {
                die("Objet ".$id." does not existe!");
            }
        }
    }

    public function getUserByLogin($login)
    {
        $lisuser=$this->db->getRepository("User")->findAll();

        foreach ($lisuser as $user) {

            if($user->getLogin()===$login || $user->getEmail()===$login)
            {
                return $user;
            }

        }
        return null;
    }

    public function connexion($user)
    {

        $lisuser=$this->db->getRepository("User")->findAll();

        foreach ($lisuser as $item) {

            if($item->getPasswd()===$user->getPasswd())
            {
                if($item->getLogin()===$user->getLogin() || $item->getEmail()===$user->getLogin())
                {
                    return $item;
                }
            }

        }
        return null;
    }
}