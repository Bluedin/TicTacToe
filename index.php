<!DOCTYPE html>
<html>
<head>
	<title>TicTacToe</title>
	<style type="text/css" href="app.css"></style>
</head>
<body>

<button action="Fenetre.lancerPartie()">New Game</button>
<button action="Fenetre.rejouerPartie()">Replay Game</button>
<input type="text" name="player1">
<input type="text" name="player2">
<button>Change P1</button>
<button>Change P2</button>
<table>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<script type="text/javascript">
	var Fenetre = {
		var fenetre = {};
		fenetre.lancerPartie = function(){
			Partie.plateauDeJeu = [][];
		};
		fenetre.creerJoueur = function(){

		};
		fenetre.rejouerPartie = function(){

		};
		fenetre.panneauGrille = [];
		fenetre.panneauScore = [];
		return fenetre;
	};
	var Partie = {
		var plateauDeJeu = [][];
		var addAction = function(){

		};
		var getAction = function(){

		};
		var getActions = function(){

		};
		var getGames = function(){

		};
		var play = function(x, y, marque){

		};

	};
	var tabCase = {
		
	};
	var cCase = {
			var contenu = new Marque();
	};
	var Marque = {
		var character;
		var getImage = function(){

		};
	};
	var ControleurDeJeu = {
		var checkVictory = function(){

		};
		var ajouterMarque = function(j, x, y){

		};
		var ajouterPoint = function(j){

		};
		var play = function(){

		};
	}
</script>
</table>
</body>
</html>
