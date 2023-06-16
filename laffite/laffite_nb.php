<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>lafite nombre inscription</title>
<link href="../styles/morata.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h2>Archers Lafitois</h2>
	<form action="laffite_nb.php" method="post">
		<p>Votre mot de passe : <input type="password" name="mot_de_passe" /></p>
        <p><input type="submit" value="Valider" /></p>
        </form>
	<?php
	//si la variable 'mot de passe' existe et si sa valeur est egale à 'coucou'
	if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "coucou"){ 
	//ecriture du début du formulaire avec la cible spécifique au club
		echo(
	'<form action="laffite.php" method="post">
	<h3>Nombre d\'inscriptions par catégorie</h3>'
	);
		//inclusion du fichier 'form-nb-inscription.php' qui évite de répéter ce code sur toutes les pages
	require('../module/form-nb-inscription.php');
	}
	//Sinon
	elseif(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] !=  "coucou"){
	//ecrire erreur de mot de passe !
		echo('erreur de mot de passe !');
	}		
	?>
</body>
</html>
