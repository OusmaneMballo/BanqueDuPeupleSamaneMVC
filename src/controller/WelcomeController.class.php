<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
use libs\system\Controller;
use src\model\ProfilRepository;
use src\model\UserRepository;
class WelcomeController extends Controller{
    private $init=0;
    public function __construct(){
        parent::__construct();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){
       $data['error']=1;
        if($this->init==0)
       {
           $this->initialize();
           $this->init=1;
       }

        return $this->view->load("welcome/index",$data);
    }
/*
 * initialize() permet d'initialiser les profils dans la base de donnee.
 */
   public function initialize()
    {
        $profilReposi=new ProfilRepository();
        $userReposi=new UserRepository();

        //======Initialisation des profil==========

        $listProfil=array("Responsable Compte","Caissier","Charger de Compte","Administrateur");
        $i=0;
        while ($i<=3)
        {
            $profil=$profilReposi->getProfilByLibelle($listProfil[$i]);
            if($profil===null)
            {
                $profil=new Profil();
                $profil->setLibel($listProfil[$i]);
                $profilReposi->addProfil($profil);
            }
            $i++;
        }

        /*========= Creation de super user ========*/

        $user=$userReposi->getUserByLogin("mballoS");
        if($user===null)
        {
            $User=new User();
            $User->setEmail("ousmanemballo576@gmail.com");
            $User->setLogin("mballoS");
            $User->setPasswd("mballo0101");
            $userReposi->addUser($User);
        }

    }
}
