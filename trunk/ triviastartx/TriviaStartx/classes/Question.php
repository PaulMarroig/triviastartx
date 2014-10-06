<?php

class Question extends \BaseObject{
	
	private $iddomaine;
	private $idjoueur;
	private $libelle;
	private $validation;

	public function getIddomaine() {
		return $this->iddomaine;
	}
	
	public function setIddomaine($iddomaine) {
		$this->iddomaine = $iddomaine;
		return $this;
	}
	
	public function getIdjoueur() {
		return $this->idjoueur;
	}
	
	public function setIdjoueur($idjoueur) {
		$this->idjoueur = $idjoueur;
		return $this;
	}
	
	public function getLibelle() {
		return $this->libelle;
	}
	
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}
	
	public function getValidation() {
		return $this->validation;
	}
	
	public function setValidation($validation) {
		$this->validation = $validation;
		return $this;
	}
	
}