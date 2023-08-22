<?php
 		$mc="";
	  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM rapport_md WHERE rapport LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM rapport_md";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
	