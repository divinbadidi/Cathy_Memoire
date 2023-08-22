<?php
	session_start();
	//pour inclure un fichier dans un autre fichier on utilise la fonction require_once()
	require_once("../bdd/connexionBDD.php");
	require_once("../model/update-md.php");
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
	<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile-medecin-directeur.php">Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter(<?php
						echo $_SESSION['nom_complet'];
					?>) </a>
				</li>
			</ul>
		</div>
	<!-- Codes pour s'authentifier: droit d'accès pour se connecter -->
	<div class="contenair chris col-md-6 col-xd-12 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="chrisolite">EDITION DU RAPPORT</h3>
			</div>
			<div class="panel-body">
				<form method="post" action="">
					<div class="form-group">
						<label class="control-label">Rapport</label>
						<textarea type="text" name="rapport" required="required" class="form-control"><?php echo $userinfo['rapport'] ?></textarea>
					</div>
					<div class="form-group divin">
						<button type="submit" class="btn btn-primary" name="chrisolite">Edition</button>
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