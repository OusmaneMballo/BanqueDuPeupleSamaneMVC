<?php
use \libs\system\Controller;
use src\model\CompteRepository;
use src\model\ClientRepository;
use src\model\UtilisateurRepository;
use src\model\UserRepository;
use src\model\TransactionRepository;
class TransactionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add($login)
    {

        $utilRepos=new UtilisateurRepository();
        $transRepos=new TransactionRepository();
        $UserRepos=new UserRepository();

        $data['resultat']=0;
        $user=$UserRepos->getUserByLogin($login);
        if(isset($_POST))
        {
            $transaction=new Transaction();

            if($_POST['type']!=0)
            {

                $compte=$this->transaction($_POST['numCompte'], $_POST['type'], $_POST['montant']);
                if($compte!=null)
                {
                    $util=$utilRepos->findByUser($user);
                    //$listUtil=array($util);
                    //echo $util->getUser()->getLogin();
                    //echo $util->getProfil()->getLibel();
                    $listCmpte=array($compte);
                    $transaction->setCompte($listCmpte);
                    //$transaction->setUtilisateur($listUtil);
                    $transaction->setClient($compte->getClient());
                    $transaction->setDateCreation(date('d-m-y'));
                    $transaction->setFrais($_POST['frais']);
                    $transaction->setMontant($_POST['montant']);
                    if($_POST['type']==1)
                    {
                        $transaction->setType('Depot');
                    }
                    else{
                        $transaction->setType('Retrait');
                    }
                    $data['resultat']=$transRepos->addTransaction($transaction);

                }
            }
            else{
                $data['resultat']=-1;
            }
        }
        $data['user']=$user;
        return $this->view->load("caissier/transaction/index",$data);
    }

    public function transaction($numCompte, $type, $montant)
    {
        $comptRepo=new CompteRepository();
        $compte=$comptRepo->findByNumCom($numCompte);
        if($compte!=null)
        {

            if($type==="Depot")
            {
                $compte->setSolde($compte->getSolde() + $montant);
            }
            else{
                $compte->setSolde($compte->getSolde() - $montant);
            }

            $ok=$comptRepo->addCompte($compte);
            if($ok!=0)
            {
                return $compte;
            }
        }
        return null;
    }
}