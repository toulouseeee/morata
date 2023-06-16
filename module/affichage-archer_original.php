<?php
		// création du formulaire de saisie pour la cathégorie 10_an
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_10an" type="hidden" value="'.$nb_10an.'">Nombre d\'inscriptions : '.$nb_10an.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_10an;$i++){
			echo ('<p>'.$i.' : <select name="10nom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_10an_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="10nom_ajout'.$i.'"></p>');
		}
		// fin de création 10_an
		?>
		</div>
		<div class="cath">
	  	<h3>Jeune débutant - de 13 ans (15m)</h3>
		<?php
		// création du formulaire de saisie pour la cathégorie 13_an
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_13an" type="hidden" value="'.$nb_13an.'">Nombre d\'inscriptions : '.$nb_13an.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_13an;$i++){
			echo ('<p>'.$i.' :<select name="13nom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_13an_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="13nom_ajout'.$i.'"></p>');
		}
		// fin de création 13_an
		?>
		</div>
		<div class="cath">
		<h3>Junior - de 18 ans (18m)</h3>
		<?php
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_18an" type="hidden" value="'.$nb_18an.'">Nombre d\'inscriptions : '.$nb_18an.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_18an;$i++){
			echo ('<p>'.$i.' : <select name="18nom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_18an_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="18nom_ajout'.$i.'"></p>');
		}
		?>
		</div>
	</div>
		<h3>- Adulte -</h3>
		<div id="classique">
		<div class="cath">
	  	<h3>Débutant adulte (18m)</h3>
		<?php
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_debu" type="hidden" value="'.$nb_debu.'">Nombre d\'inscriptions : '.$nb_debu.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_debu;$i++){
			echo ('<p>'.$i.' : <select name="debunom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_debu_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="debunom_ajout'.$i.'"></p>');
		}
		?>
		</div>
		<div class="cath">
	  	<h3>Arc nu (18m)</h3>
		<?php
		// création du formulaire de saisie pour la cathégorie arc_nu
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_arc_nu" type="hidden" value="'.$nb_arc_nu.'">Nombre d\'inscriptions : '.$nb_arc_nu.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_arc_nu;$i++){
			echo ('<p>'.$i.' : <select name="arc_nunom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_arc_nu_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="arc_nunom_ajout'.$i.'"></p>');
		}
		// fin de création arc_nu
		?>
		</div>
		<div class="cath">
	  <h3>Confirmé (30m)</h3>
		<?php
		// création du formulaire de saisie pour la cathégorie confirmé
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_confirm" type="hidden" value="'.$nb_confirm.'">Nombre d\'inscriptions : '.$nb_confirm.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_confirm;$i++){
			echo ('<p>'.$i.' : <select name="confirmnom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_confirm_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="confirmnom_ajout'.$i.'"></p>');
		}
		// fin de création confirmé
		?>
		</div>
		<div class="cath">
	  <h3>Super confirmé (50m)</h3>
		<?php
		// création du formulaire de saisie pour la cathégorie super confirmé
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_super_confirm" type="hidden" value="'.$nb_super_confirm.'">Nombre d\'inscriptions : '.$nb_super_confirm.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_super_confirm;$i++){
			echo ('<p>'.$i.' : <select name="super_confirmnom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_super_confirm_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="super_confirmnom_ajout'.$i.'"></p>');
		}
		// fin de création super_confirmé
		?>
		</div>
		<div class="cath">
	  <h3>Ultra confirmé (70m)</h3>
		<?php
		// création du formulaire de saisie pour la cathégorie super confirmé
		
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) pour transmition et l'affiche pour vérification
        echo('<p><input name="nb_ultra_confirm" type="hidden" value="'.$nb_ultra_confirm.'">Nombre d\'inscriptions : '.$nb_ultra_confirm.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_ultra_confirm;$i++){
			echo ('<p>'.$i.' : <select name="ultra_confirmnom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_ultra_confirm_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="ultra_confirmnom_ajout'.$i.'"></p>');
		}
		// fin de création ultra_confirmé
		?>
		</div>
	</div>
		<h3>- Poulie -</h3>
		<div id="poulie">
		<div class="cath">
	  	<h3>Débutant (30m)</h3>
		<?php
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_poulie_debu" type="hidden" value="'.$nb_poulie_debu.'">Nombre d\'inscriptions : '.$nb_poulie_debu.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_poulie_debu;$i++){
			echo ('<p>'.$i.' : <select name="poulie_debunom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_poulie_debu_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="poulie_debunom_ajout'.$i.'"></p>');
		}
			// fin de création poulie débutant
		?>
		</div>
		<div class="cath">
	  	<h3>Confirmé (50-70m)</h3>
		<?php
		// récupere le nombre d'inscrit de la cathégorie dans un champ caché(hidden) et l'affiche pour vérification
        echo('<p><input name="nb_poulie_confirm" type="hidden" value="'.$nb_poulie_confirm.'">Nombre d\'inscriptions : '.$nb_poulie_confirm.'</p>');
		//boucle pour créer le nombre de champs 'liste' de formulaire pour les incris de la cathégorie '10_an'
		for($i=1;$i<=$nb_poulie_confirm;$i++){
			echo ('<p>'.$i.' : <select name="poulie_confirmnom_'.$i.'">');
				// boucle pour ecrire chaque nom de la cathegorie dans les liste et un champ texte pour ajouter un nouveau nom
				 while($donnees=${'liste_poulie_confirm_'.$i}->fetch()){echo('<option>'.$donnees['nom'].'</option>');}
			echo ('</select><br><input type="text" class="espace" value="ajouter archer" required="required" name="poulie_confirmnom_ajout'.$i.'"></p>');
		}
			// fin de création poulie confirmé
		?>