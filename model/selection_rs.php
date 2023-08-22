<?php
 		$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM rappor_sec WHERE rapport  LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM rappor_sec";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	