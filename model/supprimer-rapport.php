<?php
	//Récuperation du paramètre URL appelé code

	$id=$_GET['id'];

	require_once('../bdd/connexionBDD.php');

	$ps=$pdo->prepare("DELETE FROM rappor_sec WHERE id=?");

	$params=array($id);

	$ps->execute($params);
	
	header("location:".$_SERVER['HTTP_REFERER']);