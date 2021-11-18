
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
			echo"$numDem";
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
