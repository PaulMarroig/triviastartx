<?php

class CConnexion extends \BaseController{

	
	public function index(){ 
			$this->loadView("vHeader");
			$this->loadView("vConnexion");
	}
	
	public function login(){
		$joueur = new Joueur();
		RequestUtils::setValuesToObject($joueur);
		var_dump($joueur);
		$login = htmlspecialchars($_POST['login']);
		$password = htmlspecialchars($_POST['password']);
			
		if(!empty($login) && !empty($password)){
			$checkPlayer= DAO::getOne("Joueur", "login='".$login."'AND password='".$password."'");
			if($checkPlayer instanceof Joueur){
				$_SESSION['joueur']=$checkPlayer;
				echo JsUtils::execute('window.location = "../../cPartieLancer"');
			}
			else{
				echo "Identifiant incorrect";
			}
		}
		else{
			echo"Entrer vos identifiant.";
		}
	}

}