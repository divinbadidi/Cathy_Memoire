<?php
	session_start();
	//pour inclure un fichier dans un autre fichier on utilise la fonction require_once()
	require_once("../bdd/connexionBDD.php");
	require_once("../model/edit-patient.php");
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
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
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
				<h3 class="chrisolite">EDITION PATIENT</h3>
			</div>
			<div class="panel-body">
				<form method="post" action="">
					<div class="form-group">
						<label class="control-label">Num Fiche</label>
						<input type="text" name="Num_fiche" required="required" class="form-control" value="<?= $userinfo['Num_fiche'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Nom_Complet</label>
						<input type="Nom_Complet" name="Nom_Complet" required="required" class="form-control" value="<?= $userinfo['Nom_Complet'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Sexe</label>
						<select name="sexe" class="form-control" autocomplete="off" required="required" >
							<option value="M" <?php if($sexe=="M") echo "selected" ?>>
								M
							</option>
							<option value="F" <?php if($sexe=="F") echo "selected" ?>>
								F
							</option>
					</select>
					</div>
					<div class="form-group">
						<label class="control-label">Téléphone</label>
						<input type="text" name="telephone" required="required" class="form-control" value="<?= $userinfo["telephone"] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Age</label>
						<input type="text" name="age" required="required" class="form-control" value="<?= $userinfo['age'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Catégorie</label>
						<select name="categorie" class="form-control" autocomplete="off" required="required">
							<option value="Conventionné" <?php if($categorie=="Conventionné") echo "selected" ?>>
								Conventionné
							</option>
							<option value="Journalier" <?php if($categorie=="Journalier") echo "selected" ?>>
								Journalier
							</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Adresse</label>
						<input type="text" name="adresse_complete" required="required" class="form-control" value="<?= $userinfo['adresse_complete'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Etat Civil</label>
						<input type="text" name="Etat_civil" required="required" class="form-control"  value="<?= $userinfo['Etat_civil'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Symptôme</label>
						<input type="text" name="Symptome" required="required" class="form-control"  value="<?= $userinfo['Symptome'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Tension</label>
						<input type="number" name="Tension" required="required" class="form-control"  value="<?= $userinfo['Tension'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Groupe Sanguin</label>
						<input type="text" name="Groupe_sanguin" required="required" class="form-control"  value="<?= $userinfo['Groupe_sanguin'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Température</label>
						<input type="number" name="Temperature" required="required" class="form-control"  value="<?= $userinfo['Temperature'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">date Consultation</label>
						<input type="date" name="date_consultation" required="required" class="form-control"  value="<?= $userinfo['date_consultation'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Hospitalisation</label>
						<input type="text" name="Hospitalisation" required="required" class="form-control"  value="<?= $userinfo['Hospitaliation'] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Rapport</label>
						<textarea type="text" name="Rapport" required="required" class="form-control"><?= $userinfo['Rapport']?></textarea>
					</div>
					<div class="form-group divin">
						<button type="submit" class="btn btn-primary" name="chrisolite">Mettre à Jour</button>
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