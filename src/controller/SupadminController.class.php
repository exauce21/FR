<?php
use libs\system\Controller; 
use src\model\UserRepository;

class SupadminController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    //DASHBOARD
    public function Dashboard() {
        return $this->view->load("supadmin/dashboard"); 
    }

    //SOUS_ADMIN
    public function ListeSousadmin() {
        return $this->view->load("supadmin/sous_admin/liste"); 
    }

    //ENTREPRISE
    public function ListeEntreprise() {
        $data['entreprises'] = null; 
        return $this->view->load("supadmin/entreprise/liste",$data); 
    }

    public function ListeAdmin() {
        return $this->view->load("supadmin/entreprise/admin"); 
    }

    public function Organigramme(){
        return $this->view->load("supadmin/entreprise/organigrame");
    }

    public function ListeUser() {
        return $this->view->load("supadmin/entreprise/listeuser"); 
    }

    public function Lsitedemande() {
        return $this->view->load("supadmin/entreprise/demandecreation"); 
    }

    //MISSION
    public function ListeMission() {
        return $this->view->load("supadmin/mission/listemission"); 
    }

    public function Mission() {
        return $this->view->load("supadmin/mission/mission"); 
    }

    public function Sitemission() {
        return $this->view->load("supadmin/mission/sitemission"); 
    }
    
    public function Evaluer(){
        return $this->view->load("supadmin/mission/evaluer"); 
    }

    public function Evaluer2(){
        return $this->view->load("supadmin/mission/evaluer2"); 
    }

    //INCIDENT
    public function ListeIncident() {
        return $this->view->load("supadmin/incident/liste"); 
    }

    //RISQUE
    public function ListeRisque() {
        return $this->view->load("supadmin/risque/listerisque"); 
    }

    //EVALUATION
    public function ListeEvaluation() {
        $data['entreprises'] = null; 
        return $this->view->load("supadmin/evaluation/listeevaluation",$data); 
    }

    //SITE
    public function ListeSite() {
        return $this->view->load("supadmin/site/listesite"); 
    }

    //MESSAGE
    public function Listemessage() {
        return $this->view->load("supadmin/message/listemessage"); 
    }

    public function Message() {
        return $this->view->load("supadmin/message/message"); 
    }


   
}
?>