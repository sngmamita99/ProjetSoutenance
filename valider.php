<?php
$num_demande=$_GET["numDem"];
$annee_registre=$_GET["annDec"];
$numeroDeRegistre=$_GET["numReg"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req1="UPDATE demandeactedenaissance SET etat_retour =1 where numDemande=$num_demande";
			$result1=$connect->exec($req1);
			
			header("Location:valider_dem_acte_livraison.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>
