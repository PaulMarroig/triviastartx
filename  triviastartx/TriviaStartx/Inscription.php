<center>
		<label>login</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>nom</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>prenom</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>mail</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>password</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		 <input type="submit" value="S'inscrire" />
	</center>
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