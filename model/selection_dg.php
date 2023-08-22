<?php
 		$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM patients WHERE Nom_complet  LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM patients";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	