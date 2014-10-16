<?php

class CInscription extends \BaseController{


	public function index(){ 
		//$mondes= $this->getMonde();
		$this->loadView("vHeader");
		$this->loadView("vInscription");
	}
	
	
	public function getMonde(){
		$mondes =DAO::getAll("Monde");
		return $mondes;
	}
	
	public function addNew(){
		$nouveau = new Joueur();
		RequestUtils::setValuesToObject($nouveau);
		$monde=DAO::getOne("Monde", $_POST["idmonde"]);
		$nouveau->setMonde($monde);
		
		if(DAO::insert($nouveau)==1){
		
			$_SESSION['joueur']=$nouveau;
			echo JsUtils::execute('window.location="../../CPartieLancer"');
		}
	}

}