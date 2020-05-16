<?php
use src\model\UserRepository;
use src\model\UtilisateurRepository;
use libs\system\Controller;

class UserController extends Controller
{

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $user=$this->connexion();
        $data['error'] =0;
        if($user!=null)
        {
            $utilRepo=new UtilisateurRepository();
            $util=$utilRepo->findByUser($user);
            if($util!=null || $user->getLogin()==='mballoS')
            {
                $data['user'] = $user;
                if($user->getLogin()==='mballoS')
                {
                    return $this->view->load("admin/index",$data);
                }
                if($util->getProfil()->getLibel()==='Administrateur')
                {
                    return $this->view->load("admin/index",$data);
                }
                else{
                    if($util->getProfil()->getLibel()==='Responsable Compte')
                    {
                        return $this->view->load("ResCompte/index",$data);
                    }
                    else{
                        if($util->getProfil()->getLibel()==='Caissier')
                        {
                            return $this->view->load("caissier/index",$data);
                        }
                        else{
                            if($util->getProfil()->getLibel()==='Charger de Compte')
                            {
                                return $this->view->load("chargerCmp/index",$data);
                            }
                        }
                    }
                }
            }
        }
        return $this->view->load("welcome/index",$data);
    }

    public function connexion()
    {
        $userReposi=new UserRepository();
        if(isset($_POST)) {

            $user = new User();
            $user->setPasswd($_POST['pass']);
            $user->setLogin($_POST['username']);
            return $userReposi->connexion($user);

        }
        return null;
    }
}