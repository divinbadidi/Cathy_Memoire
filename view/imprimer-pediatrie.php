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
	<?php 
	    require_once("../bdd/connexionBDD.php");
		require_once('../model/selection_pediatrie.php');
	?>
		<div align="center" style="	padding-top: 50px;">

			<h1 style="font-size: 45px;">
				VOICI L'HOMME HOSPITAL
			</h1>
		</div>

			<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading" style="font-size:30px;">
						Liste des Patients de <?php echo $_SESSION['service']; ?>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>FICHE</th><th>NOM-COMPLET</th><th>SEXE</th><th>TELEPHONE</th><th>AGE</th><th>CATEGORIE</th><th>ADRESSE</th><th>SYMPTOME</th><th>GS</th><th>TEMPERATURE</th><th>DATE</th><th>HOSPITALISATION</th><th>RAPPORT</th>
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
								<td><?php  echo($et['Temperature'])?></td>
								<td><?php  echo($et['date_consultation'])?></td>
								<td><?php  echo($et['Hospitaliation'])?></td>
								<td><?php  echo($et['Rapport'])?></td>
								<!--liens -->
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
						<div class="text-center">
							<button onclick="window.print();" class="btn btn-primary">Print</button>
						</div>	
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>