<!doctype html>
<head>
<meta charset="utf-8"/>
<title> rechercher</title>
<style>
#aucun
{
	text-align:center;
}
#entete
{
	background:#007D6C;
}
</style>
</head>

<?php
if(isset($_POST['nom']))
{
	$nom=$_POST['nom'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from demandeactedenaissance  where methode_paiement ='Livraison' AND numDemande like '%$nom%'";
			$result=$connect->query($req);
				if($result->rowCount())
				{
					echo"<h5 id='MonTitre'>Liste des demandeurs par Livraison</h5>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
					<th>Numéro de demande</th>
						<th>Prenom</th>
						<th>Nom</th>	
						<th>Année</th>
						<th> Copies</th>
						<th>Demande de:</th>
						<th></th>
						<th></th>
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
					$etat_paiement=$ligne["etat_paiement"];
					$etat_transmission=$ligne["etat_transmission"];
					$etat_retour=$ligne["etat_retour"];
					$numCompte=$ligne["numCompte"];
				
					echo"<tr>
					<td>$numDemande</td>
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
					
					
						if($etat_demande=='0')
							{
								echo "<td>";
								echo "<a href='accepter.php?idRegistre=$numDemande'><button id='acc'>Accepter</button></a></td>";
								echo "</td>";
							}
							else
								
							{	
								echo "<td>";
								echo"<button id='acc'>Dejà accepté</button>";
								
								echo "</td>";	

							}
					if(($etat_paiement==0) && ($etat_transmission==0))
					{
								echo "<td>";
								echo"<span>Non payé</span>";
								echo "</td>";	

					}
					else if(($etat_paiement==1) AND ($etat_transmission==0))
					{
								
								echo "<td>";
								echo"<button id='DejaPaye'>Déjà payé</button>";
								echo "<a href='Transmission.php?
								numDem=$numDemande&annDec=$annee_registre
								&numReg=$numeroDeRegistre'><button id='transmettre'>Transmettre</button></a>";
								echo "</td>";	
					}
					else
					{
								
								echo "<td>";
								echo"<span>demande transmise</span>";
								echo "</td>";	
					}
					
						if($etat_retour==0)
						{
									echo "<td>";
									echo"<button id='attente'>en attente</button>";
									echo "</td>";	
						}
						else if($etat_retour==1)
						{
							echo "<td>";
							echo"<a href='Notification.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>Notifier</button></a>";
							echo "</td>";	
						}
						else  if($etat_retour==2)
						{
							echo "<td>";
							echo"<button id='notifier'>Déja notifier</button>";
							 echo"<a href='remettre.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>Remettre</button></a>";
							echo "</td>";	
							
						}
						else
						{
							echo "<td>";
							echo"<button id='notifier'>Remis</button>";
							// echo"<a href='Notification.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>Notifier</button></a>";
							echo "</td>";	
						}
			
						
				
						}
				
					echo"</table>";
			
				}
				else
				{
					echo"<td colspan='8' id='aucun'>Aucun élement correspondant trouvé</td>";
					
				}
					
		}
			
}
	


?>
