<?php
$num_demande=$_GET["numDem"];
$annee_registre=$_GET["annDec"];
$numeroDeRegistre=$_GET["numReg"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req1="INSERT INTO transmettredeman (num_demande,annee_registre,numero_registre,etat_demande) values($num_demande,$annee_registre,$numeroDeRegistre,0)";
			$result1=$connect->exec($req1);
			$req="UPDATE demandeactedenaissance SET etat_transmission =1 where numDemande=$num_demande";
			$result=$connect->exec($req);
			header("Location:traitementDemNaissParLivraison.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>

