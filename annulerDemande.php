<?php

$numCompte=$_GET['code'];
$numDe=$_GET['numDe'];
 $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="UPDATE declarationnaissance SET etat_rejet =1 WHERE numDeclaration=$numDe AND numCompte=$numCompte";
			$result=$connect->exec($req);
			header("Location:Traitement_DemandeDecNaiss.php");
		}
?>