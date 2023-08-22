<?php
	session_start();
	require_once('securico.php');
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
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
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
		require_once('../model/selection_dg.php');
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
					<a href="imprimer-dg.php" class="btn btn-primary">Imprimer</a>
					<a href="ajout-Patient.php" class="btn btn-primary">Ajouter un Patient</a>
				</div>				
				</div>
			</form>
		</div>

		<div align="center" style="	padding-top: 150px;">

			<h1 style="font-size: 45px;">
				Bienvenue <?php echo $_SESSION['nom_complet']; ?> <?php echo $_SESSION['service']; ?>
			</h1>
		</div>

			<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						Liste des Patients de l'hôpital
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>FICHE</th><th>NOM-COMPLET</th><th>SEXE</th><th>TELEPHONE</th><th>AGE</th><th>CATEGORIE</th><th>ADRESSE</th><th>SYMPTOME</th><th>GS</th><th>SERVICE</th><th>TEMPERATURE</th><th>DATE</th><th>RAPPORT</th>
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
									<td><?php  echo($et['Rapport'])?></td>
									<!--liens -->
									<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-patient.php?id=<?php echo($et['Num_fiche'])?>" class="btn btn-danger">Supprimer</a></td>
									<td><a href="../view/editer-Patient.php?id=<?php echo($et['Num_fiche'])?>" class="btn btn-primary">Editer</a></td>
												</tr>	
										<?php } ?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>

