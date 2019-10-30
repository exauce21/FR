<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class TestRepository extends Model{
	
	/**
	 * La base de données samane_test est dans src/view/test
	 * Pour tester importer la 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getTest($ID)
	{
		return $this->db->getRepository('Test')->find(array('id' => $ID));
	}
	
	public function addTest($test)
	{
		$this->db->persist($test);
		$this->db->flush();

		return $test->getId();
	}
	
	public function deleteTest($id){
		$test = $this->db->find('Test', $id);
		if($test != null)
		{
			$this->db->remove($test);
			$this->db->flush();
		}else {
			die("Objet ".$id." n'existe pas!");
		}
	}
	
	public function updateTest($test){
		$getTest = $this->db->find('Test', $test->getId());
		if($getTest != null)
		{
			$getTest->setValeur1($test->getValeur1());
			$getTest->setValeur2($test->getValeur2());
			$this->db->flush();

		}else {
			die("Objet ".$test->getId()." n'existe pas!");
		}	
	}
	
	public function listeTest(){
		return $this->db
				->createQuery("SELECT t FROM Test t")
				->getResult();
		/**
		 * ou bien
		 * return $this->db->getRepository('Test')->findAll();
		*/
	}
	/*
	public function listeTestsById($id)
	{
		return $this->db->getRepository('Test')->findBy(array('id' => $id));
	}
	//or 
	public function listeOfTestsById($id){
		
		return $this->db
				->createQuery("SELECT t FROM Test t WHERE t.id = " . $id)
				->getResult();
		//or
		//return $this->db->getRepository('Test')->findAll();
	}
	*/
}