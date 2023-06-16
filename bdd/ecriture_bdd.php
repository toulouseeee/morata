<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ecriture dans la base de donnée</title>
<link href="../styles/morata.css" rel="stylesheet" type="text/css">
	
<?php
	//-----------------conection à la BDD--------------------
	//inclusion du fichier 'connexion-bdd.php' qui évite de répéter ce code sur toutes les pages
	require('../module/connexion-bdd.php');
	
	//-------------fin de conection------------------------
	

//---------Récupération des valeurs du formulaire, "strip_tags()" suprime les balises (protection contre le piratage)-------
	
 // Nombre d'inscrit par cathégorie
	$nb_10an=strip_tags($_POST['nb_10an']);
	$nb_13an=strip_tags($_POST['nb_13an']);
	$nb_18an=strip_tags($_POST['nb_18an']);
	$nb_debu=strip_tags($_POST['nb_debu']);
	$nb_arc_nu=strip_tags($_POST['nb_arc_nu']);
	$nb_confirm=strip_tags($_POST['nb_confirm']);
	$nb_super_confirm=strip_tags($_POST['nb_super_confirm']);
	$nb_ultra_confirm=strip_tags($_POST['nb_ultra_confirm']);
	$nb_poulie_debu=strip_tags($_POST['nb_poulie_debu']);
	$nb_poulie_confirm=strip_tags($_POST['nb_poulie_confirm']);

//-------------------Saisie des noms par catégorie-------------------
	
//------------------ poussin moins de 10 an -----------------
for($i=0;$i<$nb_10an;$i++){
	${'10_nom_'.$i}=strip_tags($_POST['10nom_'.$i]);
	${'10_nom_ajout_'.$i}=strip_tags($_POST['10nom_ajout'.$i]);
	var_dump(${'10nom_'.$i});
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_10an=array();
	for($d=1;$d<=$nb_10an;$d++){
		if(${'10_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_10an[]=${'10_nom_'.$d};
		}
		else {
		$resultat_10an[]=${'10_nom_ajout_'.$d};
		}
	}
	$resultat_10an_unique=array_unique($resultat_10an);
	
	//------------------ jeune débutant moins de 13 an -----------------
for($i=1;$i<=$nb_13an;$i++){
	${'13_nom_'.$i}=strip_tags($_POST['13nom_'.$i]);
	${'13_nom_ajout_'.$i}=strip_tags($_POST['13nom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_13an=array();
	for($d=1;$d<=$nb_13an;$d++){
		if(${'13_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_13an[]=${'13_nom_'.$d};
		}
		else {
		$resultat_13an[]=${'13_nom_ajout_'.$d};
		}
	}
	$resultat_13an_unique=array_unique($resultat_13an);
	
	//------------------ junior moins de 18 an -----------------
for($i=1;$i<=$nb_18an;$i++){
	${'18_nom_'.$i}=strip_tags($_POST['18nom_'.$i]);
	${'18_nom_ajout_'.$i}=strip_tags($_POST['18nom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_18an=array();
	for($d=1;$d<=$nb_18an;$d++){
		if(${'18_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_18an[]=${'18_nom_'.$d};
		}
		else {
		$resultat_18an[]=${'18_nom_ajout_'.$d};
		}
	}
	$resultat_18an_unique=array_unique($resultat_18an);
	
	//------------------ débutants -----------------
for($i=1;$i<=$nb_debu;$i++){
	${'debu_nom_'.$i}=strip_tags($_POST['debunom_'.$i]);
	${'debu_nom_ajout_'.$i}=strip_tags($_POST['debunom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_debu=array();
	for($d=1;$d<=$nb_debu;$d++){
		if(${'debu_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_debu[]=${'debu_nom_'.$d};
		}
		else {
		$resultat_debu[]=${'debu_nom_ajout_'.$d};
		}
	}
	$resultat_debu_unique=array_unique($resultat_debu);
	
	
	//------------------ arc nu -----------------
for($i=1;$i<=$nb_arc_nu;$i++){
	${'arc_nu_nom_'.$i}=strip_tags($_POST['arc_nunom_'.$i]);
	${'arc_nu_nom_ajout_'.$i}=strip_tags($_POST['arc_nunom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_arc_nu=array();
	for($d=1;$d<=$nb_arc_nu;$d++){
		if(${'arc_nu_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_arc_nu[]=${'arc_nu_nom_'.$d};
		}
		else {
		$resultat_arc_nu[]=${'arc_nu_nom_ajout_'.$d};
		}
	}
	$resultat_arc_nu_unique=array_unique($resultat_arc_nu);
	
	
	//------------------ confirmé -----------------
for($i=1;$i<=$nb_confirm;$i++){
	${'confirm_nom_'.$i}=strip_tags($_POST['confirmnom_'.$i]);
	${'confirm_nom_ajout_'.$i}=strip_tags($_POST['confirmnom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_confirm=array();
	for($d=1;$d<=$nb_confirm;$d++){
		if(${'confirm_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_confirm[]=${'confirm_nom_'.$d};
		}
		else {
		$resultat_confirm[]=${'confirm_nom_ajout_'.$d};
		}
	}
	$resultat_confirm_unique=array_unique($resultat_confirm);
	
	//------------------ super confirmé -----------------
for($i=1;$i<=$nb_super_confirm;$i++){
	${'super_confirm_nom_'.$i}=strip_tags($_POST['super_confirmnom_'.$i]);
	${'super_confirm_nom_ajout_'.$i}=strip_tags($_POST['super_confirmnom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_super_confirm=array();
	for($d=1;$d<=$nb_super_confirm;$d++){
		if(${'super_confirm_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_super_confirm[]=${'super_confirm_nom_'.$d};
		}
		else {
		$resultat_super_confirm[]=${'super_confirm_nom_ajout_'.$d};
		}
	}
	$resultat_super_confirm_unique=array_unique($resultat_super_confirm);
	
		
	//------------------ ultra confirmé -----------------
for($i=1;$i<=$nb_ultra_confirm;$i++){
	${'ultra_confirm_nom_'.$i}=strip_tags($_POST['ultra_confirmnom_'.$i]);
	${'ultra_confirm_nom_ajout_'.$i}=strip_tags($_POST['ultra_confirmnom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_ultra_confirm=array();
	for($d=1;$d<=$nb_ultra_confirm;$d++){
		if(${'ultra_confirm_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_ultra_confirm[]=${'ultra_confirm_nom_'.$d};
		}
		else {
		$resultat_ultra_confirm[]=${'ultra_confirm_nom_ajout_'.$d};
		}
	}
	$resultat_ultra_confirm_unique=array_unique($resultat_ultra_confirm);
	
	
		//------------------ poule debutant -----------------
for($i=1;$i<=$nb_poulie_debu;$i++){
	${'poulie_debu_nom_'.$i}=strip_tags($_POST['poulie_debunom_'.$i]);
	${'poulie_debu_nom_ajout_'.$i}=strip_tags($_POST['poulie_debunom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_poulie_debu=array();
	for($d=1;$d<=$nb_poulie_debu;$d++){
		if(${'poulie_debu_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_poulie_debu[]=${'poulie_debu_nom_'.$d};
		}
		else {
		$resultat_poulie_debu[]=${'poulie_debu_nom_ajout_'.$d};
		}
	}
	$resultat_poulie_debu_unique=array_unique($resultat_poulie_debu);
	
	
		//------------------ poulie confirmé -----------------
for($i=1;$i<=$nb_poulie_confirm;$i++){
	${'poulie_confirm_nom_'.$i}=strip_tags($_POST['poulie_confirmnom_'.$i]);
	${'poulie_confirm_nom_ajout_'.$i}=strip_tags($_POST['poulie_confirmnom_ajout'.$i]);
}
	//--------- pour test de doublon (debut de <head>)

	$resultat_poulie_confirm=array();
	for($d=1;$d<=$nb_poulie_confirm;$d++){
		if(${'poulie_confirm_nom_ajout_'.$d}=='ajouter archer'){
		$resultat_poulie_confirm[]=${'poulie_confirm_nom_'.$d};
		}
		else {
		$resultat_poulie_confirm[]=${'poulie_confirm_nom_ajout_'.$d};
		}
	}
	$resultat_poulie_confirm_unique=array_unique($resultat_poulie_confirm);
	
	
//---------------fin de saisie des noms___________________
	
	
	
	
//------------------ points atribués au 5 premiers--------------------
	$_1=7;
	$_2=5;
	$_3=4;
	$_4=3;
	$_5=2;

?>

</head>

<body>
	<?php
	
	
	// -------------------verification des doublons---------------------------------
	
	
	/* liste des diférents resultats pour test (OK)
	echo('<p>10 an : '.count($resultat_10an).'<br/>'.count($resultat_10an_unique).'</p>
		 <p> 13 an : '.count($resultat_13an).'<br/>'.count($resultat_13an_unique).'</p>
		 <p> 18 an : '.count($resultat_18an).'<br/>'.count($resultat_18an_unique).'</p>
		 <p> debutant'.count($resultat_debu).'<br/>'.count($resultat_debu_unique).'</p>
		 <p> arc nu : '.count($resultat_arc_nu).'<br/>'.count($resultat_arc_nu_unique).'</p>
		 <p> confirmé : '.count($resultat_confirm).'<br/>'.count($resultat_confirm_unique).'</p>
		 <p> super confirmé : '.count($resultat_super_confirm).'<br/>'.count($resultat_super_confirm_unique).'</p>
		 <p> ultra confirmé : '.count($resultat_ultra_confirm).'<br/>'.count($resultat_ultra_confirm_unique).'</p>
		 <p> poulie debutant : '.count($resultat_poulie_debu).'<br/>'.count($resultat_poulie_debu_unique).'</p>
		 <p> poulie confirmé : '.count($resultat_poulie_confirm).'<br/>'.count($resultat_poulie_confirm_unique).'<p>');*/
		
	if(count($resultat_10an)-count($resultat_10an_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la cathégorie - de 10 an</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour 13_an
	elseif(count($resultat_13an)-count($resultat_13an_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie - de 13 an</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour 18_an
	elseif(count($resultat_18an)-count($resultat_18an_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie - de 18 an</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour debutan
	elseif(count($resultat_debu)-count($resultat_debu_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie debutant classique</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour arc_nu
	elseif(count($resultat_arc_nu)-count($resultat_arc_nu_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie arc nu</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour confirmé
	elseif(count($resultat_confirm)-count($resultat_confirm_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie classique confirmé</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour super_confirmé
	elseif(count($resultat_super_confirm)-count($resultat_super_confirm_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie classique super confirmé</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour ultra confirmé
	elseif(count($resultat_ultra_confirm)-count($resultat_ultra_confirm_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie classique ultra confirmé</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour poulie debutant
	elseif(count($resultat_poulie_debu)-count($resultat_poulie_debu_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie Poule débutant</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// meme chose pour poulie confirmé
	elseif(count($resultat_poulie_confirm)-count($resultat_poulie_confirm_unique)!=0){
	echo('	<h3>doublon !!</h3>
			<p>Vous avez des noms en double dans la catégorie poulie confirmé</p>
			<p><a href="javascript:history.go(-3)">retour</a></p><hr/>');
	}
	// ---------fin des verification de doublon------------------------
	
	
	//--------------------si aucun doublon, Calcul des points---------------------------
	else{
	//-------------------------10_an------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_10an<5){$nb_10an_petit=$nb_10an;}
		//si il y a  5 inscrits et plus tous les points sont atribués
	else{$nb_10an_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_10an_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'10_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE dix_ans SET point = point+${'_'.$i}  WHERE nom ='${'10_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO dix_ans VALUES('${'10_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_10an>5){
		for($i=6;$i<=$nb_10an;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'10_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE dix_ans SET point = point+1  WHERE nom ='${'10_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO dix_ans VALUES('${'10_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table 10_an
		
	//-------------------------13_an------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_13an<5){$nb_13an_petit=$nb_13an;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_13an_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_13an_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'13_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE treize_ans SET point = point+${'_'.$i}  WHERE nom ='${'13_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO treize_ans VALUES('${'13_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_13an>5){
		for($i=6;$i<=$nb_13an;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'13_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE treize_ans SET point = point+1  WHERE nom ='${'13_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO treize_ans VALUES('${'13_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table 13_an
		
	//-------------------------18_an------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_18an<5){$nb_18an_petit=$nb_18an;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_18an_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_18an_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'18_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE dix_huit_ans SET point = point+${'_'.$i}  WHERE nom ='${'18_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO dix_huit_ans VALUES('${'18_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_18an>5){
		for($i=6;$i<=$nb_18an;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'18_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE dix_hiut_ans SET point = point+1  WHERE nom ='${'18_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO dix_huit_ans VALUES('${'18_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table 18_an
		
	//-------------------------debutant------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_debu<5){$nb_debu_petit=$nb_debu;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_debu_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_debu_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'debu_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE debu SET point = point+${'_'.$i}  WHERE nom ='${'debu_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO debu VALUES('${'debu_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_debu>5){
		for($i=6;$i<=$nb_debu;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'debu_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE debu SET point = point+1  WHERE nom ='${'debu_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO debu VALUES('${'debu_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table débutant
		
	//-------------------------Arc nu------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_arc_nu<5){$nb_arc_nu_petit=$nb_arc_nu;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_arc_nu_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_arc_nu_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'arc_nu_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE arc_nu SET point = point+${'_'.$i}  WHERE nom ='${'arc_nu_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO arc_nu VALUES('${'arc_nu_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_arc_nu>5){
		for($i=6;$i<=$nb_arc_nu;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'arc_nu_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE arc_nu SET point = point+1  WHERE nom ='${'arc_nu_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO arc_nu VALUES('${'arc_nu_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table confirmé
		
	//-------------------------confirmé------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_confirm<5){$nb_confirm_petit=$nb_confirm;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_confirm_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_confirm_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'confirm_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE confirm SET point = point+${'_'.$i}  WHERE nom ='${'confirm_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO confirm VALUES('${'confirm_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_confirm>5){
		for($i=6;$i<=$nb_confirm;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'confirm_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE confirm SET point = point+1  WHERE nom ='${'confirm_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO confirm VALUES('${'confirm_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table confirmé
		
	//-------------------------Super confirmé------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_super_confirm<5){$nb_super_confirm_petit=$nb_super_confirm;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_super_confirm_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_super_confirm_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'super_confirm_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE super_confirm SET point = point+${'_'.$i}  WHERE nom ='${'super_confirm_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO super_confirm VALUES('${'super_confirm_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_super_confirm>5){
		for($i=6;$i<=$nb_super_confirm;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'super_confirm_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE super_confirm SET point = point+1  WHERE nom ='${'super_confirm_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO confirm VALUES('${'super_confirm_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table super confirmé
		
	//-------------------------Ultra confirmé------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_ultra_confirm<5){$nb_ultra_confirm_petit=$nb_ultra_confirm;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_ultra_confirm_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_ultra_confirm_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'ultra_confirm_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE ultra_confirm SET point = point+${'_'.$i}  WHERE nom ='${'ultra_confirm_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO ultra_confirm VALUES('${'ultra_confirm_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_ultra_confirm>5){
		for($i=6;$i<=$nb_confirm;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'ultra_confirm_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE ultra_confirm SET point = point+1  WHERE nom ='${'ultra_confirm_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO ultra_confirm VALUES('${'ultra_confirm_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table ultra confirmé
		
	//-------------------------Poulie débutant------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_poulie_debu<5){$nb_poulie_debu_petit=$nb_poulie_debu;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_poulie_debu_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_poulie_debu_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'poulie_debu_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE poulie_debu SET point = point+${'_'.$i}  WHERE nom ='${'poulie_debu_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO poulie_debu VALUES('${'poulie_debu_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_poulie_debu>5){
		for($i=6;$i<=$nb_poulie_debu;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'poulie_debu_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE poulie_debu SET point = point+1  WHERE nom ='${'poulie_debu_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO poulie_debu VALUES('${'poulie_debu_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table confirmé
		
	//-------------------------Poulie confirmé------------------------------------
	// Choix insert (nouvel archer) ou update (archer deja present)
	
	//Si il y a moins de 5 inscrits, tous les points ne sont pas atribués	
	if($nb_poulie_confirm<5){$nb_poulie_confirm_petit=$nb_poulie_confirm;}
		//si il y a au moins 5 inscrits tous les points sont atribués
	else{$nb_poulie_confirm_petit=5;}
		//boucle qui verifie les champs des 5 premiers pour pouvoir leur atribuer les points
			for($i=1;$i<=$nb_poulie_confirm_petit;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'poulie_confirm_nom_ajout_'.$i}=='ajouter archer'){
			//met à jour le champ 'point' en ajoutant le nombre de point correspondant au classement (1er, deuxieme ...)
			$morata->exec("UPDATE poulie_confirm SET point = point+${'_'.$i}  WHERE nom ='${'poulie_confirm_nom_'.$i}'");
			//}
		}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO poulie_confirm VALUES('${'poulie_confirm_nom_ajout_'.$i}',${'_'.$i})");
		}
	}
	// meme chose pour les archers au dela de 5
		// si il y a au moins 6 archers
		if($nb_poulie_confirm>5){
		for($i=6;$i<=$nb_poulie_confirm;$i++){
			// sil la valeur du champ ajouter un archer est 'ajouter archer'(valeur par defaut, donc pas de nouveau archers)
			if(${'poulie_confirm_nom_ajout_'.$i}=='ajouter archer'){	
			//met à jour le champ 'point' en ajoutant 1 point (atribuer automatiquement à tout participant)
			$morata->exec("UPDATE poulie_confirm SET point = point+1  WHERE nom ='${'poulie_confirm_nom_'.$i}'");
			}	
		//si la valeur du champ n'est pas 'ajouter archer' (valeur par defaut donc un nouvel archer)
		else{
			// ajout du nouvel archer et atribution des points
			$morata->exec("INSERT INTO poulie_confirm VALUES('${'poulie_confirm_nom_ajout_'.$i}',1)");
			}
		}
	}
	// fin de la table confirmé
		
		
//-------------------------fin des calcul des points-------------------------------
		

//-----------------actualisation des club ayant fait le morata---------------------
//recuperation du club qui envoi les résultats
	$nom_club=strip_tags($_POST['nom_club']);
	$morata->exec("INSERT INTO clubs VALUES ('','$nom_club')");	
		//----------------chargement de la page 'lecture_bdd' dans l'iframe
		header("location: lecture_bdd.php");
}
//fin:	
	
	?>
	
</body>
</html>