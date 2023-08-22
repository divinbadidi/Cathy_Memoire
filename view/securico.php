<?php 
	if (!isset($_SESSION['nom_complet'])) {
		header('location:../index.php');
	}