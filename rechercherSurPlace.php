<?php
if(isset($_POST['nom']))
{
	$nom=$_POST['nom'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from demandeactedenaissance where (prenom like '%$nom%' OR nom like '%$nom%') AND methode_paiement = 'Sur Place' ";
			$result=$connect->query($req);
			if($result->rowCount()>=1)
			{
				echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
					<th>Numéro de Registre </th>
						<th>Prenom</th>
						<th>Nom</th>	
						<th>Année de Declaration</th>
						
						<th>Nombre de Copies</th>
						<th>Demande de:</td>
						<th>Methode de Paiement</td>
						<th>Etat</th>
						<th></th>
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
					$numDemande=$ligne["numDemande"];
					$nom=$ligne["nom"];
					$prenom=$ligne["prenom"];
					$annee_registre=$ligne["annee_registre"];
					$numeroDeRegistre=$ligne["numeroDeRegistre"];
					$nbre_copie=$ligne["nbre_copie"];
					$typePapier=$ligne["typePapier"];
					$etat_demande=$ligne["etat_demande"];
					$methode_paiement=$ligne["methode_paiement"];
					
					echo"<tr>
					<td>$numeroDeRegistre</td>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$annee_registre</td>
					
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
					echo"<td>$methode_paiement</td>";
					if($etat_demande=='0')
							{
								echo "<td >";
								    echo '<span id="desact">En cours</span>';
									
                                   echo "</td>";
							}
							else
							{
								echo "<td>";
							        echo '<span id="act">Terminé</span>';
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
							    
                                echo "</td>";
							}
				
					echo"<td>";
				echo "<a href='supprimerDem.php?idRegistre=$numDemande'><img id='imd' src='images/sup.png' alt='valider'></a></td>";
				echo"</td>";
				}
				
			echo"</table>";
			}
			else
			{
				echo"Aucun élément correspondant trouvé";
			}
			
		}
}
?>