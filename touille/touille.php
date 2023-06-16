<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Touille</title>
<link href="../styles/morata.css" rel="stylesheet" type="text/css">
<?php
	//inclusion du fichier 'connexion-bdd.php' qui évite de répéter ce code sur toutes les pages
	require('../module/connexion-bdd.php');
	// fin connexion
	//-----------------------------------------
	
	//recuperation du nombre d'inscrits par cathégorie
	$nb_10an=$_POST['nb_10an'];
	$nb_13an=$_POST['nb_13an'];
	$nb_18an=$_POST['nb_18an'];
	$nb_debu=$_POST['nb_debu'];
	$nb_arc_nu=$_POST['nb_arc_nu'];
	$nb_confirm=$_POST['nb_confirm'];
	$nb_super_confirm=$_POST['nb_super_confirm'];
	$nb_ultra_confirm=$_POST['nb_ultra_confirm'];
	$nb_poulie_debu=$_POST['nb_poulie_debu'];
	$nb_poulie_confirm=$_POST['nb_poulie_confirm'];
	//------------------------------------------
	
	//inclusion du fichier 'recup-archer.php' qui évite de répéter ce code sur toutes les pages
	require('../module/recup-archer.php');
?>
</head>

<body>
	<h2>Les Robins des Bois de Touille</h2>
		<hr>
	<h3>Choisir dans les listes ou ajouter un nouvel archer dans le champ "ajouter archer"</h3>
	<form action="../bdd/ecriture_bdd.php" method="post" id="touille">
		<!-- champ cacher contenat le nom du club-->
	<input name="nom_club" type="hidden" value="Touille">
	<h3>- Jeunes -</h3>
		<div id="jeune">		
	 		<div class="cath">
	 	<h3>Poussin - de 10 ans (10m)</h3>
		<?php
		//inclusion du fichier 'affichage-archer.php' qui évite de répéter ce code sur toutes les pages
		require('../module/affichage-archer.php');
		?>
		</div>
	</div>
		<p><input type="reset" class="espace"> <input type="submit" class="espace"></p>
	</form>
	</body>
</html>