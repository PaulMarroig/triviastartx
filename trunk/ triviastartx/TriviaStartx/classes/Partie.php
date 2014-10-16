<?php
class Partie extends \BaseObject {
	
	/**
	 *
	 * @ManyToOne
	 * @JoinColumn(name="idJoueurEnCours",className="Joueur")
	 */
	private $joueurEnCours;
	
	/**
	 * 
	 * @ManyToOne
	 * @JoinColumn(name="idJoueur1",className="Joueur")
	 */
	private $joueur1;
	/**
	 *
	 * @ManyToOne
	 * @JoinColumn(name="idJoueur2",className="Joueur")
	 */
	private $joueur2;
	private $dernierCoup;
	
	public function getDernierCoup() {
		return $this->dernierCoup;
	}
	public function setDernierCoup($dernierCoup) {
		$this->dernierCoup = $dernierCoup;
		return $this;
	}
	public function getJoueur2() {
		return $this->joueur2;
	}
	public function setJoueur2($joueur2) {
		$this->joueur2 = $joueur2;
		return $this;
	}
	public function getJoueur1() {
		return $this->joueur1;
	}
	public function setJoueur1($joueur1) {
		$this->joueur1 = $joueur1;
		return $this;
	}
	public function getJoueurEnCours() {
		return $this->joueurEnCours;
	}
	public function setJoueurEnCours($joueurEnCours) {
		$this->joueurEnCours = $joueurEnCours;
		return $this;
	}
	
	public function __toString() {
		return $this->joueur1." (".$this->dernierCoup.")";
	}
	
	

	
	
	
}