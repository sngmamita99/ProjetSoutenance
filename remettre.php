<?php

$numCompte=$_GET["numCompte"];
$numDemande=$_GET["numDemande"];
// echo"$numCompte $numDemande";
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="UPDATE demandeactedenaissance SET etat_retour=3 where numDemande=$numDemande";
			$result=$connect->exec($req);
			
			$req1="select users.nom ,users.prenom,adresse,numTel ,demandeactedenaissance.numDemande FROM users INNER JOIN demandeactedenaissance ON users.idUser=demandeactedenaissance.numCompte where numDemande=$numDemande";
			$result1=$connect->query($req1);
			if($result1->rowCount())
			{
				$ligne=$result1->fetch();
				$nom=$ligne['nom'];
				$prenom=$ligne['prenom'];
				$adresse=$ligne['adresse'];
				$numTel=$ligne['numTel'];
				$numDemande=$ligne['numDemande'];
				// echo" $nom $prenom $adresse $numTel $numDemande<br/>";
				$req="insert into livraison(numDemande,idUser,dateLivraison,etat,adresse,numTel,prenom,nom) values ($numDemande,$numCompte,null,0,'$adresse',$numTel,'$prenom','$nom')";
				$result=$connect->exec($req);
				header("location:traitementDemNaissParLivraison.php");
				
			
			}
			else
			{
				echo"Aucun element trouvé";
			}
			
			
	
	}
	
?>
