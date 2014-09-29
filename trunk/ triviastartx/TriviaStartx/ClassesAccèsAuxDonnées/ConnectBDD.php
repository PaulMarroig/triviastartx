<?php
/** 
 * Classes d'accès à une base de donnée
 */
	// Connection au serveur
	try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=trivia', 'root', '');
		echo 'ok';
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}
