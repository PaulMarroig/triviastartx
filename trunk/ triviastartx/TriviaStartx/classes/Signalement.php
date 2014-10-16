<?php
class Signalement extends \BaseObject {
	
	/**
	 * @ManyToOne
	 * @JoinColumn(name="idprobleme",className="Probleme")
	 */
	private $idProblem;
	/**
	 * @ManyToOne
	 * @JoinColumn(name="idjoueur",className="Joueur")
	 */
	private $idJoueur;
	/**
	 * @ManyToOne
	 * @JoinColumn(name="idquestion",className="Question")
	 */
	private $idQuestion;
	private $dateS;
	
	public function getIdProblem() {
		return $this->idProblem;
	}
	public function setIdProblem($idProblem) {
		$this->idProblem = $idProblem;
		return $this;
	}
	public function getIdJoueur() {
		return $this->idJoueur;
	}
	public function setIdJoueur($idJoueur) {
		$this->idJoueur = $idJoueur;
		return $this;
	}
	public function getIdQuestion() {
		return $this->idQuestion;
	}
	public function setIdQuestion($idQuestion) {
		$this->idQuestion = $idQuestion;
		return $this;
	}
	public function getDateS() {
		return $this->dateS;
	}
	public function setDateS($dateS) {
		$this->dateS = $dateS;
		return $this;
	}
	

}