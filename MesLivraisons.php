<?php
require_once("headerLivreur.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Traitement</title>
	<style>
		 body
		{
			background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
		}
		</style>
		
</head>
<body>
<?php
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from livraison";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo'<br/>';
				echo"<br/>";
				echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
					<th>Numéro Demande</th>
						<th>Prenom</th>
						<th>Nom</th>	
						<th>Adresse</th>
						<th> Téléphone</th>
						
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
					$numDemande=$ligne["numDemande"];
					$prenom=$ligne["prenom"];
					$nom=$ligne["nom"];
					$adresse=$ligne["adresse"];
					$numTel=$ligne["numTel"];
					echo"<tr>
					<td>$numDemande</td>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$adresse</td>
					<td>$numTel</td>
					<td>
					<a href='demarrerLivraison.php'><button>
					Demarrer Livraison</buttton></a>
					</td>
					
					<td>
					<a href='demarrerLivraison.php'><button>
					Terminer Livraison</buttton></a>
					</td>
					
					</tr>";
				}
				echo"</table>";
			}
			else
			{
				echo"Aucun élément trouvé";
			}
		}
?>
</body>
	
