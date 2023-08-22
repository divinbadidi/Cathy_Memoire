<?php
	if (isset($_POST['chrisolite'])) {
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO rappor_sec(rapport)VALUES(?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['rapport']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien enregistré!')
			</script>
			<script>
				window.open('./profile-secretaire.php','_self')
			</script>
			<?php

			exit();	
			}
			

