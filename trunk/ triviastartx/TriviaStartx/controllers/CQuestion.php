<?php

class CQuestion extends \BaseController{


public function index(){ 
	/*
	 * Obtenir une question aléatoire.
	 */
	$e = DAO::getOne("Question","1=1 order by rand() limit 1");
	$a = $this->affiche($e);
	$valeur=array("Question"=>$e,
				"Reponse"=>$a	
	);
	
	$this->loadView("vHeader");
	$this->loadView("vPartieLancer",$valeur);
	echo JsUtils::getAndBindTo(".reponse", "click", "/Trivia/CReponse/reponse", "{}","#message");

}


public function affiche($e){
	$rep = DAO::getAll( "Reponse", "idquestion=".$e->getId());
	return $rep;	
}

public function verif(){
	$ver = DAO::getAll("Reponse", estBonne == 1);
	return $ver;
}
}

?>