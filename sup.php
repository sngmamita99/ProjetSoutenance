<?php
$numDemande=$_GET["sup.php"]
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="delete frdemandeactedenaissance SET etat_retour=2 where numDemande=$numDemande";
			$result=$connect->exec($req);
			
			$req1="select users.nom ,users.prenom,adresse,numTel ,demandeactedenaissance.numDemande FROM users INNER JOIN demandeactedenaissance ON users.idUser=demandeactedenaissance.numCompte where numDemande=$numDemande";
				$result1=$connect->query($req1);
				$ligne=$result1->fetch();
				$nom=$ligne['nom'];
				$prenom=$ligne['prenom'];
				$numTel=$ligne['numTel'];
				
		}
?>