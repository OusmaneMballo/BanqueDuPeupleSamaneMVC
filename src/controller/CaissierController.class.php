<?php
use \libs\system\Controller;
use src\model\ClientRepository;
use src\model\CompteRepository;
use src\model\UserRepository;
use src\model\UtilisateurRepository;
use src\model\TransactionRepository;

class CaissierController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($login)
    {
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        return $this->view->load("caissier/index",$data);
    }

    public function transHome($login)
    {
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);

        return $this->view->load("caissier/transaction/index",$data);
    }

    public function viretHome($login)
    {
        $UserRepos=new UserRepository();
        $data['user']=$UserRepos->getUserByLogin($login);
        return $this->view->load("caissier/virement/index",$data);
    }

    public function transac($login)
    {
        $UserRepos=new UserRepository();
        $utilRepos=new UtilisateurRepository();
        $compteReops=new CompteRepository();
        $data['resultat']=0;
        $user=$UserRepos->getUserByLogin($login);
        $data['user']=$user;

        if(isset($_POST))
        {
            $compt=$compteReops->findByNumCom($_POST['numCompte']);
            if($compt!=null)
            {
                //$clientObj=$compt->getClient();
                $util=$utilRepos->findByUser($user);
                if($_POST['type']==1)
                {
                    $soldeActuelle=$compt->getSolde();
                    $compt->setSolde($_POST['montant'] + $soldeActuelle);
                    $compteReops->updateCompte($compt);
                    $transac=$this->transaction($compt, $util);
                    if($transac!=0)
                    {
                        $data['resultat']=$transac;
                    }

                }
                elseif ($_POST['type']==2)
                {
                    if($_POST['montant'] >= $compt->getSolde()){
                        $data['resultat']=-1;
                    }
                    else{
                        $soldeActuelle=$compt->getSolde();
                        $compt->setSolde($soldeActuelle - $_POST['montant']);
                        $compteReops->updateCompte($compt);
                        $transac=$this->transaction($compt, $util);

                        if($transac!=0)
                        {
                            $data['resultat']=$transac;
                        }
                    }
                }
                else{
                    $data['resultat']=-2;
                }


            }
        }

        return $this->view->load("caissier/transaction/index",$data);
    }

    public function virement($login)
    {
        $UserRepos=new UserRepository();
        $utilRepos=new UtilisateurRepository();
        $compteReops=new CompteRepository();
        $transactRepos=new TransactionRepository();
        $data['resultat']=0;
        $user=$UserRepos->getUserByLogin($login);
        $data['user']=$user;

        if(isset($_POST))
        {
            $comptDepot=$compteReops->findByNumCom($_POST['cmptdepot']);
            $comptRetrait=$compteReops->findByNumCom($_POST['cmptretrait']);
            $util=$utilRepos->findByUser($user);

            if($comptDepot!=null && $comptRetrait!=null)
            {
                $soldeActuelle=$comptRetrait->getSolde();
                $comptRetrait->setSolde($_POST['montant'] - $soldeActuelle);
                $compteReops->updateCompte($comptRetrait);
                $transac1=$this->transaction($comptRetrait, $util);

                $soldeActuelle=$comptDepot->getSolde();
                $comptDepot->setSolde($_POST['montant'] + $soldeActuelle);
                $compteReops->updateCompte($comptDepot);
                $transac2=$this->transaction($comptDepot, $util);

                if($transac1!=0 && $transac2!=0)
                {
                    $data['resultat']=$transac2;
                }

            }
        }
        return $this->view->load("caissier/virement/index",$data);
    }

    public function transaction($compte, $util)
    {
        $transactRepos=new TransactionRepository();
        $transObj=new Transaction();
        $transObj->setClient($compte->getClient());
        $transObj->setCompte($compte);
        $transObj->setUtilisateur($util);
        $transObj->setMontant($_POST['montant']);
        $transObj->setFrais($_POST['frais']);
        $transObj->setType('retrait');
        $transObj->setDateCreation(date('d-m-y'));
        $val=$transactRepos->addTransaction($transObj);
        if($val!=0 && $val>0)
        {
            return $val;
        }

        return 0;
    }
}