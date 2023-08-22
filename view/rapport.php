<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				margin-top: 10px;
			}
			.space{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile-secretaire.php">Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="rapport.php" title="consulter le rapport des services">Rapport Service</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter(<?php
						echo $_SESSION['nom_complet'];
					?>) </a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexionBDD.php");
		require_once('../model/selection_secretariat.php');
	?>
		<div class="col-md-12 col-xd-12 space">
			<form method="get" action="">
				<div class="form-group">
					<label for="motcle" class="control-label">
						<p>Mot Clé:</p>
					</label>

				<div class="form-group">
					<input type="text" class="form-control" name="motcle" value="<?php echo ($mc) ?>" placeholder="Entrer le Nom à chercher...">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Rechercher</button>
					<a href="imprimer-Secretariat.php" class="btn btn-primary">Imprimer</a>
				</div>				
				</div>
			</form>
		</div>

		<div align="center" style="	padding-top: 150px;">

			<h1 style="font-size: 45px;">
				Bienvenue <?php echo $_SESSION['nom_complet']; ?> du Service de <?php echo $_SESSION['service']; ?>

			</h1>
		</div>

			<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						Liste des Patients de tous les services
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>FICHE</th><th>NOM-COMPLET</th><th>SEXE</th><th>TELEPHONE</th><th>AGE</th><th>CATEGORIE</th><th>ADRESSE</th><th>SYMPTOME</th><th>GS</th><th>SERVICE</th><th>TEMPERATURE</th><th>DATE</th><th>HOSPITALISATION</th><th>RAPPORT</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
								<td><?php  echo($et['Num_fiche'])?></td>
								<td><?php  echo($et['Nom_Complet'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td><?php  echo($et['telephone'])?></td>
								<td><?php  echo($et['age'])?></td>
								<td><?php  echo($et['categorie'])?></td>
								<td><?php  echo($et['adresse_complete'])?></td>
								<td><?php  echo($et['Symptome'])?></td>
								<td><?php  echo($et['Groupe_sanguin'])?></td>
								<td><?php  echo($et['Service_consulte'])?></td>
								<td><?php  echo($et['Temperature'])?></td>
								<td><?php  echo($et['date_consultation'])?></td>
								<td><?php  echo($et['Hospitaliation'])?></td>
								<td><?php  echo($et['Rapport'])?></td>
								<!--liens -->
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>

