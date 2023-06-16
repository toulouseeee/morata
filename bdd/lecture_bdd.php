<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Affichage résultats cumulés</title>	
<link href="../styles/morata.css" rel="stylesheet" type="text/css">
	<?php
	//-----------------conection à la BDD--------------------
	//inclusion du fichier 'connexion-bdd.php' qui évite de répéter ce code sur toutes les pages
	require('../module/connexion-bdd.php');
	//-------------------fin connexion BDD--------------------
	?>
</head>

<body>
	<h1>Résultats</h1>
	
	<!----------liste club qui ont remplis leur résultat------------>
	<?php
	//recuperation des nom des clubs
	$challenge_ok=$morata->query('SELECT club FROM clubs');
	
	//-- ecriture de la liste des clubs ayant fait leur challenge-->
	echo('<h4>Challenge(s) réalisé(s) :</h4><h3>');
	
	while($nom_clubs=$challenge_ok->fetch()){
		echo($nom_clubs['club'].',&nbsp;');
	}
	$challenge_ok->closeCursor();
	echo('</h3>');
	?>
	<hr/>
	<!-----------------------ecriture classement-------------------->
<h3>- Jeunes -</h3>
<div id="jeune">
	<?php
	//-----------------------Poussin moins de 10 an--------------------
	// variable qui afichera la position
	$pos_10_an=1;
	// la variable '$final_10an' stoque toute (*) les entrées  de la table "10_ans" de la bdd "archersdpw001" par ordre Décroissant (DESC) des points
	$final_10an=$morata->query('SELECT * FROM dix_ans ORDER BY point DESC');
	//ouvre une div et ecrit la cathégorie sur une ligne unique
	echo('<div class="cath"><h3>Poussin - de 10 ans (10m)</h3>');
	//affichage des entrées dans un tableau (array) $donnees
		while($donnees_2=$final_10an->fetch()){
		echo('<p align="center"><b>'.$pos_10_an.'</b><br>'.$donnees_2['nom'].'<br/>'. $donnees_2['point'].' Points<br>------</p>');
		$pos_10_an=$pos_10_an+1;
		}
	echo('</div>');
	$final_10an->closeCursor();
	
	//-----------------------jeune débutant moins de 13 an--------------------
	$pos_13_an=1;
	$final_13an=$morata->query('SELECT * FROM treize_ans ORDER BY point DESC');
	echo('<div class="cath"><h3>Jeune débutant - 13 ans (15m)</h3>');
		while($donnees=$final_13an->fetch()){
		echo('<p align="center"><b>'.$pos_13_an.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
		$pos_13_an=$pos_13_an+1;
		}
	echo('</div>');
	$final_13an->closeCursor();
	
	//-----------------------junior moins de 18 an--------------------
	$pos_18_an=1;
	$final_18an=$morata->query('SELECT * FROM dix_huit_ans ORDER BY point DESC');
	echo('<div class="cath"><h3>Juinior - 18 ans (18m)</h3>');
		while($donnees=$final_18an->fetch()){
		echo('<p align="center"><b>'.$pos_18_an.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
		$pos_18_an=$pos_18_an+1;
		}
	echo('</div>');
	$final_18an->closeCursor();
	?>
</div>
<h3>- Adulte -</h3>
<div id="classique">
	<?php
	//-----------------------débutants--------------------
	$pos_debu=1;
	$final_debu=$morata->query('SELECT * FROM debu ORDER BY point DESC');
			echo('<div class="cath"><h3>Débutant (18m)</h3>');
			while($donnees=$final_debu->fetch()){
			echo('<p align="center"><b>'.$pos_debu.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_debu=$pos_debu+1;
		}
	echo('</div>');
	$final_debu->closeCursor();
	
	//-----------------------arc nu--------------------
	$pos_arc_nu=1;
	$final_arc_nu=$morata->query('SELECT * FROM arc_nu ORDER BY point DESC');
			echo('<div class="cath"><h3>arc nu (18m)</h3>');
			while($donnees=$final_arc_nu->fetch()){
			echo('<p align="center"><b>'.$pos_arc_nu.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_arc_nu=$pos_arc_nu+1;
		}
	echo('</div>');
	$final_arc_nu->closeCursor();
	
	//-----------------------Confirmés--------------------
	$pos_confirm=1;
	$final_confirm=$morata->query('SELECT * FROM confirm ORDER BY point DESC');
			echo('<div class="cath"><h3>Confirmé (30m)</h3>');
			while($donnees=$final_confirm->fetch()){
			echo('<p align="center"><b>'.$pos_confirm.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_confirm=$pos_confirm+1;
		}
	echo('</div>');
	$final_confirm->closeCursor();
	
	//-----------------------Super confirmés--------------------
	$pos_super_confirm=1;
	$final_super_confirm=$morata->query('SELECT * FROM super_confirm ORDER BY point DESC');
			echo('<div class="cath"><h3>Super confirmé (50m)</h3>');
			while($donnees=$final_super_confirm->fetch()){
			echo('<p align="center"><b>'.$pos_super_confirm.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_super_confirm=$pos_super_confirm+1;
		}
	echo('</div>');
	$final_super_confirm->closeCursor();
	
	//-----------------------Ultra confirmés--------------------
	$pos_ultra_confirm=1;
	$final_ultra_confirm=$morata->query('SELECT * FROM ultra_confirm ORDER BY point DESC');
			echo('<div class="cath"><h3>Ultra confirmé (70m)</h3>');
			while($donnees=$final_ultra_confirm->fetch()){
			echo('<p align="center"><b>'.$pos_ultra_confirm.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_ultra_confirm=$pos_ultra_confirm+1;
		}
	echo('</div>');
	$final_ultra_confirm->closeCursor();
	?>
</div>
	<h3>- Poulie -</h3>
<div id="poulie">
	<?php
	//-----------------------Débutant--------------------
	$pos_poulie_debu=1;
	$final_poulie_debu=$morata->query('SELECT * FROM poulie_debu ORDER BY point DESC');
			echo('<div class="cath"><h3>Débutant (30m)</h3>');
			while($donnees=$final_poulie_debu->fetch()){
			echo('<p align="center"><b>'.$pos_poulie_debu.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_poulie_debu=$pos_poulie_debu+1;
		}
	echo('</div>');
	$final_poulie_debu->closeCursor();
	
	//-----------------------Confirmés--------------------
	$pos_poulie_confirm=1;
	$final_poulie_confirm=$morata->query('SELECT * FROM poulie_confirm ORDER BY point DESC');
			echo('<div class="cath"><h3>Confirmé (30m)</h3>');
			while($donnees=$final_poulie_confirm->fetch()){
			echo('<p align="center"><b>'.$pos_poulie_confirm.'</b><br>'.$donnees['nom'].'<br/>'.$donnees['point'].' Points<br>------</p>');
			$pos_poulie_confirm=$pos_poulie_confirm+1;
		}
	echo('</div>');
	$final_poulie_confirm->closeCursor();
	?>
</div>
</body>
</html>