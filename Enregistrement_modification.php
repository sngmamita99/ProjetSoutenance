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
// $parent=$_POST["parent"];
// $pere_mere=$_POST["pere_mere"];
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
				$req="UPDATE registrenaissance
				SET
				annee_registre='$annee_registre',
				num_registre=$num_registre,
				type_declaration='$type_declaration',
				date_declaration='$date_declaration',
				num_jugement='$num_jugement',
				date_jugement='$date_jugement',
				prenom_enfant='$prenom_enfant',
				nom_enfant='$nom_enfant',
				sexe_enfant='$sexe_enfant',
				date_naissance_enfant='$date_naissance_enfant',
				heure_naissance_enfant='$heure_naissance_enfant',
				lieu_naissance_enfant='$lieu_naissance_enfant',
				structure_naissance='$structure_naissance',
				nbr_naissance='$nbr_naissance',
				cni_pere=$cni_pere,
				prenom_pere='$prenom_pere',
				nom_pere='$nom_pere',
				date_naissance_pere='$date_naissance_pere',
				lieu_naissance_pere='$lieu_naissance_pere',
				domicile_pere='$domicile_mere',
				profession_pere='$profession_pere',
				cni_mere='$cni_mere',
				prenom_mere='$prenom_mere',
				nom_mere='$nom_mere',
				date_naissance_mere='$date_naissance_mere',
				lieu_naissance_mere='$lieu_naissance_mere',
				domicile_mere='$domicile_mere',
				profession_mere='$profession_mere',
				cni_declarant=$cni_declarant,
				prenom_declarant='$prenom_declarant',
				nom_declarant='$nom_declarant',
				date_naissance_declarant='$date_naissance_declarant',
				lieu_naissance_declarant='$lieu_naissance_declarant',
				domicile_declarant='$domicile_declarant',
				profession_declarant='$profession_declarant',
				degre_parente='$degre_parente'
				WHERE annee_registre='$annee_registre' AND num_registre=$num_registre";
				$result=$connect->exec($req);
				echo"Enregistrement réussi";
		}
		else
		{
			echo "Base de donnée non connecté";
		}
		

?>