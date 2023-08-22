<?php
	if (isset($_POST['hermine'])) {

		$nom=htmlspecialchars($_POST['nom']);

		$password=md5($_POST['password']);

		if (!empty($nom) AND !empty($password)) {

			// Vérification si l'utilisateur existe vraiment
			$requiser=$pdo->prepare("SELECT * FROM agent WHERE nom_complet=? AND password=?");
			$requiser->execute(array($nom,$password));
			// rowCount permet de compter le nombre saisie par le user
			$userexist=$requiser->rowCount();
			if ($userexist==1) {
				$userinfo=$requiser->fetch();
				$_SESSION['matr_agent']=$userinfo['matr_agent'];
				$_SESSION['nom_complet']=$userinfo['nom_complet'];
				$_SESSION['service']=$userinfo['service'];
				$_SESSION['password']=$userinfo['password'];
				header("Location: profile.php");		
			}
			else
			{
				$erreur="Mauvais Pseudo ou mauvais mot de passe! ";
			}
			
		}
		else
		{
			$erreur="Tous les champs doivent etre completés";
		}

	
}