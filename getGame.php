<?php

try{
	$bdd = new PDO('mysql:host=localhost;dbname=tictactoe;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur: ' . $e->getMessage());
}


$req = $bdd->prepare('INSERT INTO play(nom, game) VALUES(:nom, :contentGame)');
$req->execute(array(
	'nom' => $nom,
	'contentGame' => $contentGame
	));
$req = bdd->prepare('SELECT nom, game FROM play WHERE nom = :nom');
$req->execute(array('nom' => $_GET['nom']));

$req->closeCursor();
?>