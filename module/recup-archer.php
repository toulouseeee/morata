<?php
	//recupération des archers éyant déjà participés à un challenge et donc stoqués dans la BDD 'archersdpw001'
	// creation d'un tableau qui stoque les noms 
$liste_10an_=array();
//boucle qui permet de stoquer x fois les valeurs ($i) et les classe par ordre alphabétique des entrées du champ "nom"
	for($i=1;$i<=$nb_10an;$i++){
		$liste_10an_[$i]=$morata->query('SELECT nom FROM dix_ans ORDER BY nom');
	}
	
	// meme chose avec la  table 13_ans
$liste_13an_=array();
	for($i=1;$i<=$nb_13an;$i++){
		$liste_13an_[$i]=$morata->query('SELECT nom FROM treize_ans ORDER  BY nom');
	}
	// meme chose avec la  table 18_ans
$liste_18an_=array();
	for($i=1;$i<=$nb_18an;$i++){
		$liste_18an_[$i]=$morata->query('SELECT nom FROM dix_huit_ans ORDER  BY nom');
	}
	// meme chose avec la  table debu
$liste_debu_=array();
	for($i=1;$i<=$nb_debu;$i++){
		$liste_debu_[$i]=$morata->query('SELECT nom FROM debu ORDER BY nom');
	}
	// meme chose avec la  table arc_nu
$liste_arc_nu_=array();
	for($i=1;$i<=$nb_arc_nu;$i++){
		$liste_arc_nu_[$i]=$morata->query('SELECT nom FROM arc_nu ORDER BY nom');
	}
	// meme chose avec la table confirm
$liste_confirm_=array();
	for($i=1;$i<=$nb_confirm;$i++){
		$liste_confirm_[$i]=$morata->query('SELECT nom FROM confirm ORDER BY nom');
	}
	// meme chose avec la table super_confirm
$liste_super_confirm_=array();
	for($i=1;$i<=$nb_super_confirm;$i++){
		$liste_super_confirm_[$i]=$morata->query('SELECT nom FROM super_confirm ORDER BY nom');
	}
	// meme chose avec la table ultra_confirm
$liste_ultra_confirm_=array();
	for($i=1;$i<=$nb_ultra_confirm;$i++){
		$liste_ultra_confirm_[$i]=$morata->query('SELECT nom FROM ultra_confirm ORDER BY nom');
	}
	// meme chose avec la table poulie_debu
$liste_poulie_debu_=array();
	for($i=1;$i<=$nb_poulie_debu;$i++){
		$liste_poulie_debu_[$i]=$morata->query('SELECT nom FROM poulie_debu ORDER BY nom');
	}
	// meme chose avec la table poulie_confirm
$liste_poulie_confirm_=array();
	for($i=1;$i<=$nb_poulie_confirm;$i++){
		$liste_poulie_confirm_[$i]=$morata->query('SELECT nom FROM poulie_confirm ORDER BY nom');
	}

?>