<?php
$numDem=$_GET["numDem"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="DELETE FROM  demandeactedenaissance WHERE numDemande=$numDem";
			$result=$connect->exec($req);
			header("Location:suivi_demande_Acte.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>