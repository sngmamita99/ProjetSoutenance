<?php
require_once("headerCitoyen.php");
$naissances=$_POST["naissance"];
$annee_registre=$_POST["annee_registre"];
$num_registre=$_POST["num_registre"];
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$nbr_copies=$_POST["nbr_copies"];
$methode_paiement=$_POST["methode_paiement"];
$etat=0;
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="insert into demandeactedenaissance(nom,prenom,numeroDeRegistre,annee_registre,methode_paiement,etat_demande,nbre_copie,typePapier) value (?,?,?,?,?,?,?,?);";
			$stmt = $connect->prepare($req);
			$stmt->bindParam(1, $nom);
			$stmt->bindParam(2, $prenom);
			$stmt->bindParam(3, $num_registre);
			$stmt->bindParam(4, $annee_registre);
			$stmt->bindParam(5, $methode_paiement);
			$stmt->bindParam(6, $etat);
			$stmt->bindParam(7, $nbr_copies);
			$stmt->bindParam(8, $naissances);
			$stmt->bindParam(9, $idConnected);
			$stmt->execute();
			echo"Demande envoyé avec succes";
			
		}
		else
		{
			echo"Base de donnée non connnecté";
		}

// echo "$naissances $annee_acte $num_acte $prenom $nom $nbr_copies $methode_paiement";


?>