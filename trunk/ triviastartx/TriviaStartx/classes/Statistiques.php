<?php
class Statistiques extends \BaseObject {
	
	/**
	 * @ManyToOne
	 * @JoinColumn(name="iddomaine",className="Domaine")
	 */
	private $idDomaine;
	/**
	 * @ManyToOne
	 * @JoinColumn(name="idjoueur",className="Joueur")
	 */
	private $idJoueur;
	private $nbBonnesReponses;
	
	public function getIdDomaine() {
		return $this->idDomaine;
	}
	public function setIdDomaine($idDomaine) {
		$this->idDomaine = $idDomaine;
		return $this;
	}
	public function getIdJoueur() {
		return $this->idJoueur;
	}
	public function setIdJoueur($idJoueur) {
		$this->idJoueur = $idJoueur;
		return $this;
	}
	public function getNbBonnesReponses() {
		return $this->nbBonnesReponses;
	}
	public function setNbBonnesReponses($nbBonnesReponses) {
		$this->nbBonnesReponses = $nbBonnesReponses;
		return $this;
	}
	
	
}