<?php
class Article{
    public function getAll(){

        return array(array(1, "Ordinateur", 1234),
                    array(2, "Scanner", 5000)
        );
    
    }
    public function getStock($nomArticle){
        return 5000;
    }
}
ini_set( "soap.wsdl_cache_enabled", 0 );
ini_set( 'soap.wsdl_cache_ttl', 0 );
$server = new SoapServer( "http://localhost/mesprojets/ISI/LPGL/SOAP/saopserveur/config/organization.wsdl" );

$server->setClass('Article');
$server->addFunction( "getAll" );
$server->addFunction( "getStock" );
$server->handle();
?>