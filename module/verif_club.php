<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>verifiaction club</title>
	<link href="../styles/morata.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	//-----------------conection à la BDD--------------------
	//inclusion du fichier 'connexion-bdd.php' qui évite de répéter ce code sur toutes les pages
	require('../module/connexion-bdd.php');
	
	//-------------fin de conection------------------------
	
	//--------------test pour vérification de double saisie d'un club------------------		
		
//recuperation du club qui envoi les résultats
	$nom_club=strip_tags($_GET['nom_club']);
	$page_club=strip_tags($_GET['page_club']);
//recuperation des clubs déjà passés
$challenge_ok=$morata->query('SELECT * FROM clubs');
	
	//boucle pour verifier tos les noms de la liste		
	while($verif_club=$challenge_ok->fetch()){
	// si le club est dans la liste
		if($nom_club==$verif_club['club']){
	//ecrire un texte pour le signaler
		echo("<h2 align='center'>Bonjour ".$verif_club['club'].", il semblerait que vous ayez déjà saisi vos résultats.</h2><h3 align='center'> si ce n'est pas le cas contactez Olivier Laplaze des Archers du Girou</h3>");
	// aller directement à la fin de la page pour interompre le script et empecher l'ajou du nom du club et des résultats 
		goto fin;
		}
	
	}
	header($page_club);
	
	$challenge_ok->closeCursor();	
	fin:
	?>
</body>
</html>