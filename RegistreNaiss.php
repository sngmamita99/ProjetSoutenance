
<?php
$annee_registre=$_POST['annee_registre'];
$num_registre=$_POST["num_registre"];
$type_declaration=$_POST["type_declaration"];
$date_declaration=$_POST["date_declaration"];
$num_jugement=$_POST["num_jugement"];
$date_jugement=$_POST["date_jugement"];
$prenom_enfant=$_POST["prenom_enfant"];
$nom_enfant=$_POST["nom_enfant"];
$sexe_enfant=$_POST["sexe_enfant"];
$date_naissance_enfant=$_POST["date_naissance_enfant"];
$heure_naissance_enfant=$_POST["heure_naissance_enfant"];
$lieu_naissance_enfant=$_POST["lieu_naissance_enfant"];
$structure_naissance=$_POST["structure_naissance"];
$nbr_naissance=$_POST["nbr_naissance"];
$cni_pere=$_POST["cni_pere"];
$prenom_pere=$_POST["prenom_pere"];
$nom_pere=$_POST["nom_pere"];
$date_naissance_pere=$_POST["date_naissance_pere"];
$lieu_naissance_pere=$_POST["lieu_naissance_pere"];
$domicile_pere=$_POST["domicile_pere"];
$profession_pere=$_POST["profession_pere"];
$cni_mere=$_POST["cni_mere"];
$prenom_mere=$_POST["prenom_mere"];
$nom_mere=$_POST["nom_mere"];
$date_naissance_mere=$_POST["date_naissance_mere"];
$lieu_naissance_mere=$_POST["lieu_naissance_mere"];
$domicile_mere=$_POST["domicile_mere"];
$profession_mere=$_POST["profession_mere"];
$parent=$_POST["parent"];
$pere_mere=$_POST["pere_mere"];
$cni_declarant=$_POST["cni_declarant"];
$prenom_declarant=$_POST["prenom_declarant"];
$nom_declarant=$_POST["nom_declarant"];
$date_naissance_declarant=$_POST["date_naissance_declarant"];
$lieu_naissance_declarant=$_POST["lieu_naissance_declarant"];
$domicile_declarant=$_POST["domicile_declarant"];
$profession_declarant=$_POST["profession_declarant"];
$degre_parente=$_POST["degre_parente"];

$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="INSERT INTO registrenaissance(annee_registre,num_registre,type_declaration,date_declaration,num_jugement,date_jugement,prenom_enfant,nom_enfant,sexe_enfant,date_naissance_enfant,heure_naissance_enfant,structure_naissance,lieu_naissance_enfant,nbr_naissance,cni_pere,prenom_pere,nom_pere,date_naissance_pere,lieu_naissance_pere,domicile_pere,profession_pere,cni_mere,prenom_mere,nom_mere,date_naissance_mere,lieu_naissance_mere,domicile_mere,profession_mere,parent,pere_mere,cni_declarant,prenom_declarant,nom_declarant,date_naissance_declarant,lieu_naissance_declarant,domicile_declarant,profession_declarant,degre_parente) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
			$stmt = $connect->prepare($req);
			$stmt->bindParam(1, $annee_registre);
			$stmt->bindParam(2,$num_registre);
			$stmt->bindParam(3, $type_declaration);
			$stmt->bindParam(4, $date_declaration);
			$stmt->bindParam(5, $num_jugement);
			$stmt->bindParam(6, $date_jugement);
			$stmt->bindParam(7,$prenom_enfant);
			$stmt->bindParam(8, $nom_enfant);
			$stmt->bindParam(9, $sexe_enfant);
			$stmt->bindParam(10, $date_naissance_enfant);
			$stmt->bindParam(11, $heure_naissance_enfant);
			$stmt->bindParam(12,$structure_naissance);
			$stmt->bindParam(13, $lieu_naissance_enfant);
			$stmt->bindParam(14, $nbr_naissance);
			$stmt->bindParam(15, $cni_pere);
			$stmt->bindParam(16 ,$prenom_pere);
			$stmt->bindParam(17, $nom_pere);
			$stmt->bindParam(18,$date_naissance_pere);
			$stmt->bindParam(19, $lieu_naissance_pere);
			$stmt->bindParam(20, $domicile_pere);
			$stmt->bindParam(21, $profession_pere);
			$stmt->bindParam(22, $cni_mere);
			$stmt->bindParam(23,$prenom_mere);
			$stmt->bindParam(24, $nom_mere);
			$stmt->bindParam(25, $date_naissance_mere);
			$stmt->bindParam(26, $lieu_naissance_mere);
			$stmt->bindParam(27, $domicile_mere);
			$stmt->bindParam(28,$profession_mere);
			$stmt->bindParam(29, $parent);
			$stmt->bindParam(30, $pere_mere);
			$stmt->bindParam(31, $cni_declarant);
			$stmt->bindParam(32, $prenom_declarant);
			$stmt->bindParam(33,$nom_declarant);
			$stmt->bindParam(34, $date_naissance_declarant);
			$stmt->bindParam(35, $lieu_naissance_declarant);
			$stmt->bindParam(36, $domicile_declarant);
			$stmt->bindParam(37, $profession_declarant);
			$stmt->bindParam(38,$degre_parente);
			$stmt->execute();
		}
		else
		{
			echo"not ok";
		}

?>
