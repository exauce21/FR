<?php
use libs\system\Controller; 
use src\model\UserRepository;

class UserController extends Controller{
    public function __construct(){
        parent::__construct();
    }
   
    //DASHBOARD
    public function Dashboard() {
        return $this->view->load("users/dashboard"); 
    }

    //MISSION
    public function ListeMission() {
        return $this->view->load("users/mission/listemission");
       /*  if($nbsite==0){
            return $this->view->load("users/mission/listemission"); 
        }else{
            $nbsite--;
            return $this->view->load("users/mission/sitemission"); 
        } */
        
    }

    public function Mission() {
        return $this->view->load("users/mission/mission"); 
    }

    public function Sitemission() {
       
        if(isset($_POST))
        {
            $nbsite = htmlentities($_POST['nbsite']);
            echo $nbsite;

           
            return $this->view->load("users/mission/sitemission"); 
            
        }
       // return $this->view->load("users/mission/sitemission"); 
    }
    
    public function Evaluer(){
        return $this->view->load("users/mission/evaluer"); 
    }

    public function Evaluer2(){
        return $this->view->load("users/mission/evaluer2"); 
    }

    public function Verification(){
        if(isset($_POST))
        {
            $p = htmlentities($_POST['Proba']);
            $s = htmlentities($_POST["Severite"]);

            $r =  $p*$s; 
            
            if($r > 0.6*25){
                $ok = 0;
                $data['ok']= $ok;
                return $this->view->load("users/mission/evaluer",$data);
            }else{
                //return $this->view->load("users/mission/chekrisque"); 
                return $this->view->load("users/mission/evaluer3");
            }
        }
    }

    public function Chekrisque(){
        return $this->view->load("users/mission/chekrisque"); 
    }

    //INCIDENT
    public function ListeIncident() {
        return $this->view->load("users/incident/liste"); 
    }

    //RISQUE
    public function Evaluationrisque() {
        return $this->view->load("users/risque/listerisque"); 
    }

    public function Risque()
    {
        return $this->view->load("users/listerisque"); 
    }

    //EVALUATION
    public function ListeEvaluation() {
        $data['entreprises'] = null; 
        return $this->view->load("users/evaluation/listeevaluation",$data); 
    }

    public function Evaluation() {
        return $this->view->load("users/evaluation/evaluation"); 
    }

    public function EvaluerMission(){
        return $this->view->load("users/evaluation/evaluer"); 
    }
    
    public function EvaluerMission2(){
        return $this->view->load("users/evaluation/evaluer2"); 
    }

 
    //SITE
    public function ListeSite() {
        return $this->view->load("users/site/listesite"); 
    }

    public function PermitWork() {
        return $this->view->load("users/site/permitwork"); 
    }

    //MESSAGE
    public function Listemessage() {
        return $this->view->load("users/message/listemessage"); 
    }

    public function Message() {
        return $this->view->load("users/message/message"); 
    }
}
?>