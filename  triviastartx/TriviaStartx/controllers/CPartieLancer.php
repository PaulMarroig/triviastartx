<?php

class CPartieLancer extends \BaseController{


	public function index(){ 
	
		$in = DAO::getAll("Reponse");
		$this->loadView("newpartie",$in);
	}

}
