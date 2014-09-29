<?php
class Inscription{
	private $nom;        
	private $prenom; 
	private $mail;   
	private $login;       
	private $password = 123;

public function afficher(){
	return 'nom<br>prenom<br>'.$this->password;	
}
public function participer(){
	
}

public function verif_password(){
	
}

	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}
	

}