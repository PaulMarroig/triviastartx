<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../CSS/style.css">
<title>Trivia</title>
</head>
<body>
<left>Connecté en tant que: </left>
<?php 
/*
 * require_once '../ClassesAccèsAuxDonnées/ConnectBDD.php';
$result = mysql_query("SELECT * FROM joueur ORDER BY id ASC");

if((!empty($_POST['login'])) && (!empty($_POST['password']))) {
echo 'Connecter';
}
 */
?>
<center><div class="Three-Dee">TriviaStart</div></center>
	<form method="post" action="../View/PartieLancer.php">
		<hr> + Nouvelle Partie: 
		<input type="submit" value="Créer Partie" />
 	</form>
 		<hr> Leur tour:<p>
 		<table border="1">
 		<tr><td>NomduJoueur</td>
 				<td>ScoreDuJoueur</td>
 				<td>ScoreDeAdversaire</td></tr>
 		</table>
		 <hr>Votre tour:
		 </body>
</html>