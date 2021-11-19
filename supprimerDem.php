<?php
$idRegistre=$_GET["idRegistre"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="DELETE FROM  demandeactedenaissance WHERE numeroDeRegistre=$idRegistre";
			$result=$connect->exec($req);
			header("Location:traitementDemNaiss.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>