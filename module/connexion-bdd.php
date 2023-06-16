<?php
// teste les instructions
	try{
	//création d'un objet ($morata) qui reprend les parametres de connexion à la base de donnée 'archersdpw001' en local 
	$morata= new PDO('mysql: host=localhost; dbname=archersdpw001;charset=utf8','archersdpw001','LkV13pNZ');
	//création d'un objet ($morata) qui reprend les parametres de conexion à la base de donnée 'archersdpw'(ovh) 
	//$morata= new PDO('mysql:host=archersdpw001.mysql.db; dbname=archersdpw001;charset=utf8','archersdpw001','LkV13pNZ');
	}
	// si il y à une erreur renvois le message avec l'erreur
	catch(Exception $e){
		echo('erreur'.$e->getMessage());
		
	}
	// fin connexion
?>