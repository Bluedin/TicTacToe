<?php

try{
	$bdd = new PDO('mysql:host=localhost;dbname=tictactoe;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur: ' . $e->getMessage());
}


$nom = $_POST['nom'];
$contentGame = $_POST['game'];

$req = $bdd->prepare('INSERT INTO play(nom, game) VALUES(:nom, :contentGame)');
$req->execute(array(
	'nom' => $nom,
	'contentGame' => $contentGame
	));

$req->closeCursor();
?>