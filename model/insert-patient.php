<?php
	if (isset($_POST['chrisolite'])) {
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO patients(Num_fiche,Nom_Complet,sexe,telephone,age,categorie,adresse_complete,Etat_civil,Symptome,service_consulte,Tension,Groupe_sanguin,Temperature,date_consultation,Hospitaliation,Rapport)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['Num_fiche'],$_POST['Nom_Complet'],$_POST['sexe'],$_POST['telephone'],$_POST['age'],$_POST['categorie'],$_POST['adresse_complete'],$_POST['Etat_civil'],$_POST['Symptome'],$_SESSION['service'],$_POST['Tension'],$_POST['Groupe_sanguin'],$_POST['Temperature'],$_POST['date_consultation'],$_POST['Hospitalisation'],$_POST['Rapport']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien enregistré!')
			</script>
			<script>
				window.open('./profile.php','_self')
			</script>
			<?php

			exit();	
			}
			

