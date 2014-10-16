<?php

class CReponse extends \BaseController{

	public function index(){
		
	}

	public function reponse(){ 

		$g=substr($_GET['c'],-1);
		if($g==1){
			echo "bonne réponse <br><br>";
		}
		else{
			echo"faux <br><br>";
		}
	}
}