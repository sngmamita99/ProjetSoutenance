<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Traitement</title>
	<style>
	#desact
	{
		background:red;
		color:white;
		text-align:center;
		
	}
	#act
	{
		background:green;
		color:white;
		text-align:center;
		
	}
	#im
	{
		width:15px;
		height:15px;
	}
	#imd
	{
		width:20px;
		height:20px;
	}
	</style>
</head>
<body>

<?php
require_once("headerAgent.php");
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="select * from demandeactedenaissance  ";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Prenom</th>
						<th>Nom</th>	
						<th>Année de Declaration</td>
						<th>Numéro de Registre </td>
						<th>Nombre de Copies</td>
						<th>Demande de:</td>
						<th>Etat</td>
						<th></th>
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
					$nom=$ligne["nom"];
					$prenom=$ligne["prenom"];
					$annee_registre=$ligne["annee_registre"];
					$numeroDeRegistre=$ligne["numeroDeRegistre"];
					$nbre_copie=$ligne["nbre_copie"];
					$typePapier=$ligne["typePapier"];
					$etat_demande=$ligne["etat_demande"];
					// $methode_paiement=$ligne["methode_paiement"];
					
					echo"<tr>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$annee_registre</td>
					<td>$numeroDeRegistre</td>
					<td>$nbre_copie</td>";
					if($typePapier=='Extrait de naissance')
					{ 
				
						echo"<td>
						
						Extrait de naissance
						
						</td>";
						
					}
					else
					{
						
						echo"<td>";
								echo"<a href='index.php'>Copie Littérale</a>";
						echo"</td>";
					}
					
					if($etat_demande=='0')
							{
								echo "<td id='desact'>";
								    echo '<span id="desact">En cours</span>';
									// echo '<td><a href="activer.php?code='.$id.'"><button class="btn btn-success">activer</button></a></td>';
                                   echo "</td>";
							}
							else
							{
								echo "<td id='act'>";
							        echo '<span id="act">Terminé</span>';
									// echo '<td><a href="desactiver.php?code='.$id.'"><button class="btn btn-danger">désactiver</button></a></td>';
                                echo "</td>";
							}
								
					if($etat_demande=='0')
							{
								echo "<td>";
								 echo "<a href='impressionDemExtrait.php?idRegistre=$numeroDeRegistre'><img id='im' src='images/v.png' alt='valider'></a></td>";
                                   echo "</td>";
							}
							else
							{
								echo "<td>";
							       echo '<a href="activer.php"><img id="im" src="images/supprimer.png" alt="valider"></a></td>';
                                echo "</td>";
							}
				
					echo"<td>";
				echo "<a href='supprimerDem.php?idRegistre=$numeroDeRegistre'><img id='imd' src='images/sup.png' alt='valider'></a></td>";
				echo"</td>";
				}
				
					echo"</table>";
			}
			else
			{
				echo"Il n'a aucune decaration de Naissance";
			}
		}
		else
		{
			echo "Base de donnée non connecté";
		}
?>
</body>
</html>