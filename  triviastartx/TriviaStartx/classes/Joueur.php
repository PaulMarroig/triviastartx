<?php

class Joueur extends \BaseObject{
	private $nom;
	private $prenom;
	private $mail;
/**
 * 
 * @Many ToOne()
 * @JoinColumn(name='idMonde",className="Monde")
 */
	private $monde;
/**
 *
 * @One ToMany(mappedBy="joueur1",classeName="Partie")
 */
	private $parties=array();
	
	public function getNom() {
		return $this->nom;
	}
	
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}
	
	public function getPrenom() {
		return $this->prenom;
	}
	
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	
	public function getMail() {
		return $this->mail;
	}
	
	public function setMail($mail) {
		$this->mail = $mail;
		return $this;
	}
	
}