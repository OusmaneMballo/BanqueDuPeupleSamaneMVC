<?php

use libs\system\Controller;
use src\model\ProfilRepository;
use src\model\UserRepository;
use \src\model\ClientRepository;
use \src\model\CompteRepository;
use \src\model\UtilisateurRepository;
use src\model\EmployeurRepository;

class ResponsablecompteController extends Controller
{

    /**
     * ResponsablecompteController.class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index($login){
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        return $this->view->load("ResCompte/index",$data);
    }

//====================================--Traitement Client--================================================

    public function clientHome($login)
    {
        $UserRepos=new UserRepository();
        $clientRepos=new ClientRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listclient']=$clientRepos->findAll();
        return $this->view->load("ResCompte/client/index",$data);
    }
    //=======Ajouter un client===============

    public function addClient($login)
    {
        $clientRepos=new ClientRepository();
        $UserRepos=new UserRepository();
        $data['resultat']=0;
        if(isset($_POST))
        {
            $client=new Client();
            $user=new User();

            $user->setPasswd($_POST['passwd']);
            $user->setLogin($_POST['login']);
            $user->setEmail($_POST['email']);

            if($_POST['salaire']!=null && $_POST['nomemp']!=null)
            {
                $emp=new Employeur();
                $emp->setNom($_POST['nomemp']);
                $emp->setNumero($_POST['numero']);
                $emp->setAdresse($_POST['adresseEmp']);
                $emp->setRaisonSocial($_POST['social']);

                $client->setSalaire($_POST['salaire']);
                $client->setEmployeur($emp);
            }
            $client->setUser($user);
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setAdresse($_POST['adresse']);
            $client->setTelephone($_POST['telephone']);
            $client->setNci($_POST['nci']);
            $client->setProfession($_POST['profession']);
            $data['resultat']=$clientRepos->addClient($client);
        }

        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listclient']=$clientRepos->findAll();
        return $this->view->load("ResCompte/client/index",$data);
    }

//===================--Afficher les informations d'un client et la liste de ses comptes--=========================

    public function detailClient($val)
    {
        $UserRepos=new UserRepository();
        $clientRepos=new ClientRepository();
        $comptRepos=new CompteRepository();
        $data['resultat']=0;
        if(isset($val))
        {
            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $data['client']=$clientRepos->getClient($url[1]);
            $data['listCompte']=$comptRepos->listeCompteClient($url[1]);
            return $this->view->load("ResCompte/client/detail",$data);
        }

        return $this->view->load("ResCompte/client/detail",$data);
    }

    //==================--Trouver un client apartir de son id--======================

    public function findByIdClient($val)
    {
        $UserRepos=new UserRepository();
        $clientRepos=new ClientRepository();
        $data['resultat']=0;
        if(isset($val))
        {
            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $data['client']=$clientRepos->getClient($url[1]);
            $data['listclient']=$clientRepos->findAll();
            return $this->view->load("ResCompte/client/edit",$data);

        }
        return $this->view->load("ResCompte/client/edit",$data);
    }

    //====================--Modifier les information d'un client--=======================

    public function editClient($val)
    {
        $clientRepos=new ClientRepository();
        $UserRepos=new UserRepository();
        $data['resultat']=0;
        $url = explode(',', $val);
        if(isset($_POST))
        {
            $client=new Client();
            $user=new User();

            $user->setPasswd($_POST['passwd']);
            $user->setLogin($_POST['login']);
            $user->setEmail($_POST['email']);

            $client->setId($url[1]);
            if($_POST['salaire']!=null && $_POST['nomemp']!=null)
            {
                $emp=new Employeur();
                $emp->setNom($_POST['nomemp']);
                $emp->setNumero($_POST['numero']);
                $emp->setAdresse($_POST['adresseEmp']);
                $emp->setRaisonSocial($_POST['social']);

                $client->setSalaire($_POST['salaire']);
                $client->setEmployeur($emp);
            }
            $client->setUser($user);
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setAdresse($_POST['adresse']);
            $client->setTelephone($_POST['telephone']);
            $client->setNci($_POST['nci']);
            $client->setProfession($_POST['profession']);
            $clientRepos->updateClient($client);
            $data['resultat']='modifier';
        }

        $data['user']=$UserRepos->getUserByLogin($url[0]);
        $data['listclient']=$clientRepos->findAll();
        return $this->view->load("ResCompte/client/index",$data);
    }

    //===========================---Fin traitement Client--=================================


    //=========================--Debut de traitement Compte--===============================

    public function compteHome($login)
    {
        $UserRepos=new UserRepository();
        $compteReops=new CompteRepository();
        $clientRepos=new ClientRepository();

        $data['user']=$UserRepos->getUserByLogin($login);
        $data['listclient']=$clientRepos->findAll();
        $data['listcompte']=$compteReops->findAllCompte();
        return $this->view->load("ResCompte/compte/index",$data);
    }

    //==================Ajouter un compte=====================

    public function addCompte($login)
    {
        $clientRepos=new ClientRepository();
        $UserRepos=new UserRepository();
        $utilRepos=new UtilisateurRepository();
        $compteReops=new CompteRepository();
        $data['resultat']=0;
        $user=$UserRepos->getUserByLogin($login);
        if(isset($_POST))
        {
            if($_POST['client']!=0 && $_POST['type']!=0)
            {
                $client=$clientRepos->getClient($_POST['client']);
                $compte=new Compte();

                if($_POST['type']==1)
                {
                    $compte->setType("Epargne Simple et Xewel");
                }
                else{
                    if($_POST['type']==2)
                    {
                        $compte->setType("Courant");
                    }
                    else{
                        if($_POST['type']==3)
                        {
                            $compte->setType("Bloquer");
                        }
                    }
                }
                $compte->setSolde($_POST['solde']);
                $compte->setDateCreation(date('d-m-y'));
                $compte->setEtat("Actif");
                $compte->setNumero($client->getPrenom()[0].$client->getNom()[0].$client->getNci().date('y'));
                $data['resultat']=$compteReops->addCompte($compte);
                $compte->setClient($client);
                $compte->setUtilisateur($utilRepos->findByUser($user));
                $compteReops->updateCompte($compte);
            }
            else{
                $data['resultat']=-1;
            }
        }
        $data['user']=$user;
        $data['listcompte']=$compteReops->findAllCompte();
        $data['listclient']=$clientRepos->findAll();
        return $this->view->load("ResCompte/compte/index",$data);
    }

    //================--Gerer les fonctionnalites d'un compte client--====================

    public function findCompteById($val)
    {
        $UserRepos=new UserRepository();
        $compteRepos=new CompteRepository();
        if(isset($val))
        {
            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $data['compte']=$compteRepos->getCompte($url[1]);
        }
        return $this->view->load("ResCompte/compte/detail",$data);
    }

    public function changeEtat($val)
    {
        $UserRepos=new UserRepository();
        $compteRepos=new CompteRepository();
        if(isset($val))
        {
            $url = explode(',', $val);
            $data['user']=$UserRepos->getUserByLogin($url[0]);
            $compte=$compteRepos->getCompte($url[1]);

            if(isset($_POST))
            {
                if($_POST['etat']=="Bloquer")
                {
                    $compte->setEtat("Bloquer");
                    $compte->setDateLimite($_POST['dateDeblocage']);
                    $compteRepos->updateCompte($compte);
                    $data['compte']=$compteRepos->getCompte($url[1]);
                }
                elseif ($_POST['etat']=="Fermer")
                {
                    $compte->setEtat("Fermer");
                    $compte->setDateLimite($_POST['dateDeblocage']);
                    $compteRepos->updateCompte($compte);
                    $data['compte']=$compteRepos->getCompte($url[1]);
                }
                else{
                    $compte->setEtat("Geler");
                    $compte->setDateLimite($_POST['dateDeblocage']);
                    $compteRepos->updateCompte($compte);
                    $data['compte']=$compteRepos->getCompte($url[1]);
                }
            }
        }
        return $this->view->load("ResCompte/compte/detail",$data);
    }

    public function activerCompte($val)
    {
        $UserRepos=new UserRepository();
        $compteRepos=new CompteRepository();
        if(isset($val)) {
            $url = explode(',', $val);
            $data['user'] = $UserRepos->getUserByLogin($url[0]);
            $compte = $compteRepos->getCompte($url[1]);
            $compte->setEtat("Actif");
            $compte->setDateLimite(null);
            $compteRepos->updateCompte($compte);
            $data['compte']=$compteRepos->getCompte($url[1]);
        }

        return $this->view->load("ResCompte/compte/detail",$data);
    }
    //==============================--Fin Traitement Compte--================================
}