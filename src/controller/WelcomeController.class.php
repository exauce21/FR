<?php
use libs\system\Controller;
class WelcomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * method or url localhost/projectName/Welcome/index
     */
    public function index(){
        return $this->view->load("welcome/index"); 
    }

    public function Connecter(){
        return $this->view->load("welcome/login"); 
    }

    public function Connexion() {

        if(isset($_POST))
        {
       
            $email = htmlentities($_POST['email']);
            $password = htmlentities($_POST["password"]);

            #On recupere le token
            /*
            $curl = curl_init();
            $params = [
                'email' => $email,
                'password' => $password
            ];

            $params_string = http_build_query($params);

            $ops = [
                CURLOPT_URL => 'http://127.0.0.1:8000/api/user/connexion/',
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $params_string,
                CURLOPT_RETURNTRANSFER => true,
            ];

            curl_setopt_array($curl, $ops);*/

            // $url = "http://localhost/Licence/php/Forage/Back/User/Connexion?login=$email&password=$password";
            // $json = file_get_contents($url);
            // $data['user'] = json_decode($json, TRUE);



            //$response = json_decode(curl_exec($curl), true);

           // if($response['token'] != null) {

              //  $token = $response['token'];

              //  echo $token;
                
                /**
                 * C'est a partir d'ici qu'il y'a le problene
                 */
              /*  $curl = curl_init();
                
                $ops = [
                    CURLOPT_URL => 'http://127.0.0.1:8000/api/user/mon_profils/',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => [
                        'Content-length' => '255',
                        'Content-type'=> 'application/json',
                        'Authorization'=> 'token '.$token
                    ]
                ];*/
    
                // $headr = array (
                //     'Content-length: 0',
                //     'Content-type: application/json',
                //     'Authorization: Bearer '.$token
                // );
                /*
                curl_setopt_array($curl, $ops);
                // curl_setopt_array($curl, CURLOPT_HTTPHEADER , $headr);
                curl_setopt($curl, CURLOPT_HEADER, true);
              
                $response = json_decode(curl_exec($curl), true);
                // --------------------------------------------------------------
                echo $response;
                */

                switch($password){
                    case 'supadmin':
                       return $this->view->load("supadmin/dashboard"); 
                    break;
                    case 'sousadmin':
                        return $this->view->load("sous_admin/dashboard"); 
                    break;
                    case 'adminentreprise':
                        return $this->view->load("admin_entreprise/dashboard"); 
                    break;
                    case 'user':
                        return $this->view->load("users/dashboard"); 
                    break;
            //}

            }
        }
        
    }
    
}
?>