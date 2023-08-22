<?php
	$requser=$pdo->prepare("SELECT * FROM rapport_md WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();
	if (isset($_POST['chrisolite'])) {
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE rapport_md SET rapport=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['rapport'],$_GET['id']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiées!')
			</script>
			<script>
				window.open('./profile-medecin-directeur.php','_self')
			</script>
			<?php

			exit();	
			}
			