<?php

class Score extends \BaseObject {
	
	private $idPartie;
	private $idJoueur;
	private $idDomaine;
	private $points;
	
	public function getIdPartie() {
		return $this->idPartie;
	}
	public function setIdPartie($idPartie) {
		$this->idPartie = $idPartie;
		return $this;
	}
	public function getIdJoueur() {
		return $this->idJoueur;
	}
	public function setIdJoueur($idJoueur) {
		$this->idJoueur = $idJoueur;
		return $this;
	}
	public function getIdDomaine() {
		return $this->idDomaine;
	}
	public function setIdDomaine($idDomaine) {
		$this->idDomaine = $idDomaine;
		return $this;
	}
	public function getPoints() {
		return $this->points;
	}
	public function setPoints($points) {
		$this->points = $points;
		return $this;
	}
	
	function incPoints() {
		$this->points++;
	}
	
	function couronne() {
		if ($this->points == 3){
		}
	}
	
	
	
}