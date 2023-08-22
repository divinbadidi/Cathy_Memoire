<?php
 		$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM patients WHERE Nom_complet  LIKE '%$mc%' AND Service_consulte='pediatrie'";
			}
			else
			{
				$req="SELECT * FROM patients WHERE Service_consulte='pediatrie' ";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	