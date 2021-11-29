<?php
$idRegistre=$_GET["idRegistre"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req1="UPDATE demandeactedenaissance SET etat_demande =1 where numeroDeRegistre=$idRegistre";
			$result1=$connect->exec($req1);
			header("Location:traitementDemNaissParLivraison.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>