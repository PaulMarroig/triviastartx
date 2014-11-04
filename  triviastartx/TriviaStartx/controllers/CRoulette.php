<?php

class CRoulette extends \BaseController{


public function index(){ 
	$this->loadView("vHeader");
	$this->loadView("vRoulette");
}

}