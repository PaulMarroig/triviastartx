<?php

class CReponse extends \BaseController{

	public function index(){
		$this->loadView("vHeader");
	}

	public function reponse(){ 

		$g=substr($_GET['c'],-1);
		if($g==1){
			echo "bonne réponse <br><a href='CRoulette'>Question suivante</a><br>";
		}
		else{
			echo"Mauvaise réponse<br><a href='CPartieLancer'>Rejouer</a><br>";
		}
	}
}