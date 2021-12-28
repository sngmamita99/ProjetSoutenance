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
	#desact
	{
		background:red;
		color:white;
		text-align:center;
		
	}
	#acc
	{
		background:green;
		color:white;
		text-align:center;
		border:0px hidden green;
		
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
	#icon_prefix
{
	width:300px;
	margin-left:72%;
}
#DejaPaye
{
	background:#cd6133;
	color:white;
	border:0px hidden #cd6133;
}
#transmettre
{
	background:#34ace0;
	color:white;
	margin-left:10%;
	border-radius:2px 2px;
	border:0px hidden #34ace0;
}
#attente
{
	background:#ffb142;
	border:0px hidden #ffb142;
	color:white;
}
#notifier
{
	background:#40407a;
	border:0px hidden #40407a;
	color:white;
	border-radius: 20px 20px;
}
	</style>
</head>
<body>

<?php
require_once("headerAgent.php");
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			
			$req="select * from demandeactedenaissance  where methode_paiement='Livraison'";
			$result=$connect->query($req);
			if($result->rowCount())
			{echo'<br/>';
				echo"<div id='rech'>";
                    echo' <form method="POST" action="rechercher.php">';
                       echo' <input id="icon_prefix" placeholder="prenom ou nom figurant sur la demande" 
					   type="search" class="validate" name="Code_de_recherche">';
                echo'</form>'; 
				echo'<br/>';
				echo"<br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
					<th>Numéro</th>
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
					// $req1="select * from transmettredeman where num_demande=$numDemande";
					// $resulat=$connect->query($req1);
					// $row=$resulat->fetch();
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
					
					// if($etat_demande=='0')
							// {
								// echo "<td id='desact'>";
								    // echo '<span id="desact">En cours</span>';
									
                                   // echo "</td>";
							// }
							// else
							// {
								// echo "<td id='act'>";
							        // echo '<span id="act">Terminé</span>';
                                // echo "</td>";
							// }
							
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
								// echo"<span></span>";
								// echo "<a href='accepter.php?idRegistre=$numDemande'>Accepter</a></td>";
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
					// echo"<div id ='kk'>";
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
							 echo"<a href='Notification.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>Remettre</button></a>";
							echo "</td>";	
							
						}
						else
						{
							echo "<td>";
							echo"<a href='Notification.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>livrékk</button></a>";
							// echo"<a href='Notification.php?numCompte=$numCompte&numDemande=$numDemande''><button id='notifier'>Notifier</button></a>";
							echo "</td>";	
						}
			
						// echo"</div>";
						// if(!empty($row["etat_demande"]==0))
						// {
									// echo "<td>";
									// echo"<button>en attente</button>";
									// echo "</td>";	
						// }
						// else
						// {
							// echo "<td>";
								// echo"<a href='Notification.php'><button>Notifier</button></a>";
								// echo "</td>";	
						// }
				
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
<script>
// $("#kk").hide();
var transmettre=document.getElementById('transmettre');
transmettre.addEventListener('click', function(e){
	alert("ok");
	// $('#kk').show();
}, false);
 // function select_acte() {
        // var registre = $('.registre').val();
        // if (registre == "Registre des deces") {
            // $('#naissances').addClass('hide');
            // $('#mariages').addClass('hide');
            // $('#deces').removeClass('hide');
        // } else if (registre == "Registre des naissances") {
            // $('#deces').addClass('hide');
            // $('#mariages').addClass('hide');
            // $('#naissances').removeClass('hide');
        // } else if (registre == "Registre des mariages") {
            // $('#naissances').addClass('hide');
            // $('#deces').addClass('hide');
            // $('#mariages').removeClass('hide');
        // }
        // $('input').removeClass('hide');
        // $('label').removeClass('hide');
		 // $('#methode_paiement').removeClass('hide');
    // }


    // $('.registre').change(function() {
        // select_acte();
    // });
</script>
</html>