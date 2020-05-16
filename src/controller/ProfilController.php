<?php
use libs\system\Controller;
use src\model\ProfilRepository;

class ProfilController extends Controller
{


    /**
     * ProfilController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        return $this->view->load("profil/index");
    }
}