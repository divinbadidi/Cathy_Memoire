<?php
	session_start();
	//pour inclure un fichier dans un autre fichier on utilise la fonction require_once()
	require_once("../bdd/connexionBDD.php");
	require_once("../model/accueil.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HCRP</title>
	<!-- bootstrap framework CSS framework=aide lisungi ya CSS surtout pour ceux là qui vont utiiser le site dans le telephone, les tablettes, les ordinateurs mini-gros -->
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/style.css">
</head>
<body>
	<!-- Codes pour s'authentifier: droit d'accès pour se connecter -->
	<div class="contenair chris col-md-6 col-xd-12 col-md-offset-3" >
		<h2 align="center" style="font-weight: bold;">Bienvenue à l'app. HCRP Technology</h2>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 align="center" >SE CONNECTER</h3>
			</div>
			<div class="panel-body">
				<form method="post" action="">
					<div class="form-group">
						<label class="control-label" style="font-size:20px">Nom d'utilisateur</label>
						<input type="text" name="nom" required="required" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" style="font-size:20px">Password</label>
					</div>
					<div class="form-group">
						<input type="password" name="password" required="required" class="form-control">
					</div>
					<div class="form-group divin">
						<button type="submit" class="btn btn-primary" name="hermine">Connexion</button>
					</div>
				</form>
				<?php
					if (isset($erreur)) {
						echo "<font color='red'>".$erreur."</font>";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>