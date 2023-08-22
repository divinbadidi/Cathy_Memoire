<?php
	// on vait rédiriger l'utilisateur vers la page d'accueil du site au niveau du dossier view
	//le code php pour la rédirection est header
	session_start();
	session_unset();
	session_destroy();
	header("location:view/accueil.php");

?>