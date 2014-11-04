<?php

class CPartieLancer extends \BaseController{


	public function index(){ 
		$this->loadView("vheader");
		$in = DAO::getAll("Reponse");
		$this->loadView("vNewPartie",$in);
	}

}
