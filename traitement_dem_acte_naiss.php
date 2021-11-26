
<?php
		
if(isset($_POST["registre"]) && isset($_POST["naissances"]) && isset($_POST["num_registre"]) && isset($_POST["annee_registre"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["nbr_copies"]))
{			$typeRegistre=$_POST["registre"];
			$naissances=$_POST["naissances"];
			$annee_registre=$_POST["annee_registre"];
			$num_registre=$_POST["num_registre"];
			$prenom=$_POST["prenom"];
			$nom=$_POST["nom"];
			$nbr_copies=$_POST["nbr_copies"];
			$methode_paiement=$_POST["methode_paiement"];
			// echo"$naissances $annee_registre $num_registre $prenom $nom $nbr_copies";
			$etat=0;
					
			$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			if($typeRegistre=="Registre des naissances")
			{
				
				$req="select * from registrenaissance where num_registre=$num_registre AND annee_registre='$annee_registre' AND prenom_enfant='$prenom' AND nom_enfant='$nom' ";
				$result=$connect->query($req);
				if($result->rowCount()==1)
				{
					// echo "Il ya au moins un enregistrement";
					$req="insert into demandeactedenaissance(nom,prenom,numeroDeRegistre,annee_registre,etat_demande,nbre_copie,typePapier,methode_paiement) value (?,?,?,?,?,?,?,?);";
					$stmt = $connect->prepare($req);
					$stmt->bindParam(1, $nom);
					$stmt->bindParam(2, $prenom);
					$stmt->bindParam(3, $num_registre);
					$stmt->bindParam(4, $annee_registre);
					$stmt->bindParam(5, $etat);
					$stmt->bindParam(6, $nbr_copies);
					$stmt->bindParam(7, $naissances);
					$stmt->bindParam(8, $methode_paiement);
					$stmt->execute();
					$numDem=$connect->lastInsertId();
					echo"$numDem";
				}
				else
				{
					
					echo "le cas ou les donnees du formulaire ne sont pas dans la BD";
				}
			}
			else
			{
				echo"not ok";
			}
			
		}
		else
		{
			echo"Base de donnée non connnectée";
		}
}
else
{
	echo"Veuillez entrer tous les données du formulaires";
}

?>
