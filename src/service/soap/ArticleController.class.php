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

    class ArticleController extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function getMyService()
        {
            $client = new SoapClient( "http://localhost/mesprojets/ISI/LPGL/SOAP/saopserveur/config/organization.wsdl",
                                         array( 
                                                'cache_wsdl' => WSDL_CACHE_NONE,
                                                "exceptions" => true, 
                                                "connection_timeout" => 1000
                                            )
                                    );
            try {
                
                $stockArticle = $client->getStock("Ordinateur");
                //echo $stockArticle;
                $allArticle = $client->getAll();
                var_dump($allArticle);
            } catch (\Throwable $th) {
                echo $client->__getLastResponse();
                
                throw $th;
            }
            //$allArticle = $client->__call('getStock', Array("ordinateur"));
            //return $this->view->load("article/all");
        }
        public function getService()
        {
            $client = new SoapClient( "http://localhost/mesprojets/ISI/LPGL/SOAP/soapserveurbis/organization.wsdl",
                                         array( 
                                                'cache_wsdl' => WSDL_CACHE_NONE,
                                                "exceptions" => true, 
                                                "connection_timeout" => 1000
                                            )
                                    );
            try {
                
                $stockArticle = $client->getStock("Ordinateur");
                //echo $stockArticle;
                $allArticle = $client->getAll();
                var_dump($allArticle);
            } catch (\Throwable $th) {
                echo $client->__getLastResponse();
                
                throw $th;
            }
            //$allArticle = $client->__call('getStock', Array("ordinateur"));
            //return $this->view->load("article/all");
        }
        public function getStock()
        {

            return $this->view->load("article/stock");
        }

        public function soapCaller()
        {
            $client = new SoapClient( "http://localhost/mesprojets/ISI/LPGL/SOAP/organization.wsdl", array( 
                'cache_wsdl' => WSDL_CACHE_NONE,
                "exceptions" => true, 
                "connection_timeout" => 1000
            ));
            try {
                $responseLogin = $client->login( 'test_user@gmail.com', 'passer' ); // call login(login, password) from .wsdl

                $responseGet = $client->get( "yes@yes.sn" ); // call get(login) from .wsdl

                $responseList = $client->liste(); // call list() from .wsdl

                echo $responseLogin . "<br/>";
                echo $responseGet . "<br/>";
                foreach ($responseList as $key => $value) {
                foreach ($value as $k => $v) {
                    echo $v . '   |   ';
                }
                echo "<br/>";
                }

                $responseSomme = $client->somme(12, 13); // call somme(x, y) from .wsdl
                echo $responseSomme . "<br/>";
            } catch ( SoapFault $sf ) {
                echo $sf->getMessage();
            }
        }
        
    }
?>