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
			#demLi
		{
			color:white;
			background:#ffb142;
			border:0px hidden #ffb142;
			border-radius: 10px 10px;
			margin-left: 40px;

		
			
		}
		#li
		{
			color:white;
		}
		#dem
		{
			background:green;
			border:0px hidden #ffb142;
			color: white;
			text-align: center;
			margin-left: 75px;
			border-radius: 10px 10px;


		}
		#Montitre
		{
			text-align: center;
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
				//echo"<h5 id='MonTitre'>Liste des demandeurs par Livraison</h5>";
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
					$etat=$ligne["etat"];
					echo"<tr>
					<td>$numDemande</td>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$adresse</td>
					<td>$numTel</td>";
					$req2="select *from demandeactedenaissance where numDemande=$numDemande";
					$result2=$connect->query($req2);
					$row=$result2->fetch();
					$etat_retour=$row["etat_retour"];
					//echo "$etat_retour";
					
					if($etat==0)
					{
						echo"<td><a id='li' href='demarrerLivraison.php?numDemande=$numDemande'><button  id='demLi'>
						Demarrer Livraison</buttton></a></td>";
					}
					else if($etat==1)
					{
						echo"
						<td>
						<button id='dem'>
						Demarré</buttton></td>
						<td><a  id='li' href='terminerLivraison.php?numDemande=$numDemande'><button id='demLi'>
						Terminer Livraison</buttton></a>
						</td>";
					}
					else
					{
						echo"
						<td>
						<button id='dem'>
						Demarré</buttton></td>
						<td><button id='dem'>
						Terminé</buttton></a>
						</td>";
					}

					/*if(($etat_retour==1) OR ($etat_retour==2) OR ($etat_retour==3))
					{
						echo"<td>
					<a  id='li' href='terminerLivraison.php?numDemande=$numDemande'><button id='demLi'>
					Terminer Livraison</buttton></a>
					</td>";
				}
					else
					{
						echo"
						<td>
						<button id='dem'>
						Terminer</buttton>
						</td>";
					}
					*/
					echo"</tr>";
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
	
