<?php
use src\model\UtilisateurRepository;
use src\model\ProfilRepository;
use src\model\UserRepository;
use src\model\AgenceRepository;
use libs\system\Controller;
class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($login){
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        return $this->view->load("admin/index",$data);
    }

    public function adminHome($login){
        $data['user']=$login;
        return $this->view->load("admin/admin",$data);
    }

//===============================================--Traitement Employer--================================================
    public function employerHome($login)
    {
        $UserRepos=new UserRepository();
        $ProfilRepos=new ProfilRepository();
        $UtilRepos=new UtilisateurRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listProfil']=$ProfilRepos->listeAllProfil();
        $data['listUtil']=$UtilRepos->findAll();
        return $this->view->load("admin/employer/employer",$data);
    }

    public function add($login){

        $ProfilRepos=new ProfilRepository();
        $utilRepos=new UtilisateurRepository();
        $UserRepos=new UserRepository();
        $data['resultat']=0;
            if(isset($_POST))
            {
                $util=new Utilisateur();
                $user=new User();
                $objProfil=new Profil();

                $user->setPasswd($_POST['passwd']);
                $user->setLogin($_POST['login']);
                $user->setEmail($_POST['email']);

                $profil=$ProfilRepos->getProfil($_POST['profil']);
                $objProfil->setId($profil->getId());
                $objProfil->setLibel($profil->getLibel());

                $util->setProfil($objProfil);
                $util->setUser($user);
                $util->setNom($_POST['nom']);
                $util->setPrenom($_POST['prenom']);
                $util->setAdresse($_POST['adresse']);
                $util->setTelephone($_POST['telephone']);

                $data['resultat']=$utilRepos->addUtilisateur($util);

               // $utilRepos->updateUtilisateur($util);
            }
        
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listUtil']=$utilRepos->findAll();
        $data['listProfil']=$ProfilRepos->listeAllProfil();
        return $this->view->load("admin/employer/employer",$data);
    }

    public function findEmpById($val)
    {
        $UtilRepos=new UtilisateurRepository();
        $UserRepos=new UserRepository();
        $ProfilRepos=new ProfilRepository();
        $data['resultat']=0;
        if(isset($val))
        {
            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $data['util']=$UtilRepos->getUtilisateur($url[1]);
            $data['listProfil']=$ProfilRepos->listeAllProfil();
            $data['listUtil']=$UtilRepos->findAll();
            return $this->view->load("admin/employer/edit",$data);
        }

        return $this->view->load("admin/employer/employer",$data);
    }

    public function editEmp($val)
    {

        $ProfilRepos=new ProfilRepository();
        $utilRepos=new UtilisateurRepository();
        $UserRepos=new UserRepository();
        $data['resultat']=0;
        if(isset($_POST))
        {
            $util=new Utilisateur();
            $user=new User();
            $objProfil=new Profil();

            if(isset($val))
            {
                $user->setPasswd($_POST['passwd']);
                $user->setLogin($_POST['login']);
                $user->setEmail($_POST['email']);

                $profil=$ProfilRepos->getProfil($_POST['profil']);
                $objProfil->setId($profil->getId());
                $objProfil->setLibel($profil->getLibel());

                $util->setProfil($objProfil);
                $util->setUser($user);
                $util->setNom($_POST['nom']);
                $util->setPrenom($_POST['prenom']);
                $util->setAdresse($_POST['adresse']);
                $util->setTelephone($_POST['telephone']);
                $url = explode(',', $val);
                $data['user']=$UserRepos->getUserByLogin($url[0]);
                $util->setId($url[1]);

                $data['resultat']=$utilRepos->updateUtilisateur($util);
            }
        }

        $data['listUtil']=$utilRepos->findAll();
        $data['listProfil']=$ProfilRepos->listeAllProfil();
        return $this->view->load("admin/employer/employer",$data);
    }

    public function supprimerEmp($val)
    {
        $utilRepos=new UtilisateurRepository();
        $UserRepos=new UserRepository();
        $ProfilRepos=new ProfilRepository();
        $data['resultat']=0;

        if(isset($val))
        {

            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $util=$utilRepos->getUtilisateur($url[1]);
            $ok=$utilRepos->deleteUtilisateur($url[1]);
            if(!empty($ok))
            {
                $idUser=$util->getUser()->getId();
                $ok=$UserRepos->deleteUser(20);
                if($ok>0)
                {
                    $data['resultat']='';
                    $data['idUser']=$idUser;
                }
            }
        }
        $data['listUtil']=$utilRepos->findAll();
        $data['listProfil']=$ProfilRepos->listeAllProfil();
        return $this->view->load("admin/employer/employer",$data);
    }

    //============================================--Fin Traitement Employer--===========================================

    //==============================================--Traitement Agence--===============================================

    public function agenceHome($login)
    {
        $UserRepos=new UserRepository();
        $AgenceRepos=new AgenceRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listAgence']=$AgenceRepos->listeAll();
        return $this->view->load("admin/agence/agence",$data);
    }

   public function addAgence($login)
   {
        $AgenceRepos=new AgenceRepository();
        $agence=new Agence();
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['resultat']=0;
       if(isset($_POST))
       {
        $agence->setNom($_POST['nom']."-BP");
        $agence->setAdresse($_POST['adresse']); 
        $agence->setRegion($_POST['region']);
        date_default_timezone_set('Europe/Londre');
        $agence->setDateCreation(date('d-m-y'));       
        $data['resultat']=$AgenceRepos->add($agence);

       }
       $data['listAgence']=$AgenceRepos->listeAll();
       return $this->view->load("admin/agence/agence",$data);
   }

   public function findAgenceById($val)
   {
       $AgenceRepos=new AgenceRepository();
       $UserRepos=new UserRepository();
       if(isset($val))
       {
           $url = explode(',', $val);
           $data['user']=$UserRepos->getUserByLogin($url[0]);
           $data['agence']=$AgenceRepos->getAgence($url[1]);
           $data['listAgence']=$AgenceRepos->listeAll();
           return $this->view->load("admin/agence/edit",$data);
       }
   }
   public function editAgence($val)
   {
       $AgenceRepos=new AgenceRepository();
       $agence=new Agence();
       $UserRepos=new UserRepository();
       $data['resultat']=0;
       if(isset($_POST))
       {
           if(isset($val))
           {

               $agence->setNom($_POST['nom']);
               $agence->setAdresse($_POST['adresse']);
               $agence->setRegion($_POST['region']);

               $url = explode(',', $val);
               $data['user']=$UserRepos->getUserByLogin($url[0]);
               $agence->setId($url[1]);
               $ok=$AgenceRepos->update($agence);
               if(!empty($ok))
               {
                   $data['resultat']='modifier';
               }
           }

       }
       $data['listAgence']=$AgenceRepos->listeAll();
       return $this->view->load("admin/agence/agence",$data);
   }

   public function supprimerAgence($val)
   {
       $AgenceRepos=new AgenceRepository();
       $UserRepos=new UserRepository();
       $data['resultat']=0;
       if(isset($val))
       {

               $url = explode(',', $val);
               $data['user']=$UserRepos->getUserByLogin($url[0]);
               $ok=$AgenceRepos->delete($url[1]);
               if(!empty($ok))
               {
                   $data['resultat']='suprimer';
               }
       }
       $data['listAgence']=$AgenceRepos->listeAll();
       return $this->view->load("admin/agence/agence",$data);
   }

   public function detailAgence($val)
   {
       $AgenceRepos=new AgenceRepository();
       $utilRepos=new UtilisateurRepository();
       $UserRepos=new UserRepository();
       $data['resultat']=0;
       if(isset($val))
       {

           $url = explode(',', $val);
           $data['user']=$UserRepos->getUserByLogin($url[0]);
           $data['agence']=$AgenceRepos->getAgence($url[1]);
           $data['listUtil']=$utilRepos->findByAgence($url[1]);
       }
       return $this->view->load("admin/agence/detaille",$data);
   }

   //===============================================--Fin traitement Agence--===========================================

    //============================================--Traitement Affectation--============================================

    public function affectationHome($login)
    {
        $UserRepos=new UserRepository();
        $AgenceRepos=new AgenceRepository();
        $UtilRepos=new UtilisateurRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listAgence']=$AgenceRepos->listeAll();
        $data['listUtil']=$UtilRepos->findAll();
        return $this->view->load("admin/affectation/affectation",$data);
    }

   public function affectation($login)
   {
       $UserRepos=new UserRepository();
        $AgenceRepos=new AgenceRepository();
        $UtilRepos=new UtilisateurRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listAgence']=$AgenceRepos->listeAll();
        $data['listUtil']=$UtilRepos->findAll();
         $data['resultat']=0;
       if(isset($_POST))
       {
           if($_POST['caissier']!=0 && $_POST['agence']!=0)
           {
            $util=$UtilRepos->getUtilisateur($_POST['caissier']);
            $util->setAgence($AgenceRepos->getAgence($_POST['agence']));
            $UtilRepos->updateUtilisateur($util);
            $data['resultat']=1;
           }
       }
        return $this->view->load("admin/affectation/affectation",$data);
   }
}

//============================================--Fin Traitement Affectation--============================================