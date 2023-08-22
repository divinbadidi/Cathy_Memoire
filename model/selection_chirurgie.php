<?php
 		$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM patients WHERE Nom_complet  LIKE '%$mc%' AND Service_consulte='Chirurgie'";
			}
			else
			{
				$req="SELECT * FROM patients WHERE Service_consulte='Chirurgie' ";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	