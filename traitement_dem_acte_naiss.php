
<?php
if(isset($_POST["registre"]) && isset($_POST["naissance"]) && isset($_POST["num_registre"]) && isset($_POST["annee_registre"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["nbr_copies"]))
{			$typeRegistre=$_POST["registre"];
			$naissances=$_POST["naissance"];
			$annee_registre=$_POST["annee_registre"];
			$num_registre=$_POST["num_registre"];
			$prenom=$_POST["prenom"];
			$nom=$_POST["nom"];
			$nbr_copies=$_POST["nbr_copies"];
			// $methode_paiement=$_POST["methode_paiement"];
			$etat=0;
			// echo"ok";		
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
					$req="insert into demandeactedenaissance(nom,prenom,numeroDeRegistre,annee_registre,etat_demande,nbre_copie,typePapier) value (?,?,?,?,?,?,?);";
					$stmt = $connect->prepare($req);
					$stmt->bindParam(1, $nom);
					$stmt->bindParam(2, $prenom);
					$stmt->bindParam(3, $num_registre);
					$stmt->bindParam(4, $annee_registre);
					$stmt->bindParam(5, $etat);
					$stmt->bindParam(6, $nbr_copies);
					$stmt->bindParam(7, $naissances);
					$stmt->execute();
					$numDem=$connect->lastInsertId();
					// on doit le renvoyer le numero de la demande sous format d'un popup
					echo"$numDem";
				}
				else
				{
					// on doit dire que les données ne correspondent pas a ceux de la BD
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
