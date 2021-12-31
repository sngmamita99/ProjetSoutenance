<?php

require_once("headerCitoyen.php");

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
	#ok
	{
		background:#FF8800;
		color:white;
		text-align:center;
		
	}
	#nok
	{
		background:#007E33;
		color:white;
		text-align:center;
	}
	#ann
	{
		background:#FFC107;
		color:white;
		text-align:center;
		border:0px hidden #FFC107;
		
	}
	td a
	{
		color:white;
	}
	
	#l_naissance
	{
		
		width:30%;
		text-align:center;
		margin-left:2%;
	}
	#l_naissances
	{
		width:50%;
		margin-left:40%;
	
		
	}
	#fina
	{
		background:green;
		color:white;
		border-radius:10px 10px;
	}
	#nf
	{
		background:#FFC107;
		color:white;
	}
	#termine
	{
		background:green;
		color:white;
		text-align:center;
		border:0px hidden green;
		border-radius:10px 10px;
	}
	#payer
	{
		border:0px hidden red;
		background:yellow;
		color:white;
		text-align:center;
		border-radius:10px 10px;
	}
	#annuler
	{
		background:red;
		border:0px hidden red;
		text-align:center;
		border-radius:10px 10px;
	}
	</style>
</head>
<body>
<br/>
<br/>
 <?php
// require_once("headerCitoyen.php");
// $bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		// if($bdd)
		// {
			// $req="select * from demandeactedenaissance where numCompte=$idConnected ";
			// $result=$bdd->query($req);
			// if($result->rowCount())
			// {
				// echo"<br/><br/>";
			// echo'<table class="col s12 responsive-table striped " id="l_naissance">
			// <caption id="fina">Mes Demandes Finalisées</caption>
				// <thead>
					// <tr class="white darken-3 lighten-2 black-text center ">
						// <th>Numero de demande</th>
						// <th>Date de demande</th>	
					// </tr>
				// </thead>';
			// while($ligne=$result->fetch())
			// {
				// $num_dem=$ligne["numDemande"];
				// $date_dec=$ligne["date_demande"];
				// $etat_demande=$ligne["etat_demande"];
				// echo"<tr>
				// <td> $num_dem</td>
				// <td> $date_dec</td>";
				
			// }
			// }
			// else
			// {
				// echo"Vous n'avez validé aucun demande";
			// }
		// }
		// else
		// {
			// echo"Base de donnée non connectéé";
		// }
// ?>

<?php

$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
		{
			$req="select * from demandeactedenaissance where numCompte=$idConnected " ;
			$result=$bdd->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissances">
			<caption id="nf" >Mes Demandes En Cours de Traitement</caption>
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Numero de demande</th>
						<th>Date de demande</th>
						<th>Etat</th>
						<th></th>
					</tr>
				</thead>';
			while($ligne=$result->fetch())
			{
				$num_dem=$ligne["numDemande"];
				$_SESSION["numDemande"]=$num_dem;
				$date_dec=$ligne["date_demande"];
				$etat_demande=$ligne["etat_demande"];
				$etat_paiement=$ligne["etat_paiement"];
				echo"<tr>
				<td> $num_dem</td>
				<td> $date_dec</td>";
				if($etat_demande==0 AND $etat_paiement==0)
				{
					echo "<td>
						<button id='ann'>En Cours</button></td>
						";
						
						echo"<td>
						<a href='annulerDemandeActe.php?numDem=$num_dem'><button  id ='annuler'>Annuler</a></button></td>";
				}
				else if($etat_demande==1 AND $etat_paiement==0)
				{
						echo "<td>
						<button id='termine'>Termine</button>
						</td>";
						echo"<td>
						<a href='selectionnerModePaiement.php'><button  id ='payer'>Payer</button> </a></td>
						";	
				}
				else if($etat_demande==1 AND $etat_paiement==1)
				{
					echo"<td><span id='oui'>dejà payé</span></td>";
				
						echo"<td >
						<a href='acceuil_demande.php?numDem=$num_dem'><button id='termine'>Consulter livraison </button></a>
						";
						echo"</td>
						";
				}
				// else
				// {
					// echo"<td><span id='oui'>go</span></td>";
				
						// echo"<td id='termine'>
						// <a href='acceuil_demande.php'>go</a>
						// ";
						// echo"</td>
						// ";
				// }
			}
			}
			else
			{
				echo"Vous n'avez jamais fait de demande de declaration";
			}
		}
		else
		{
			echo"Base de donnée non connectéé";
		}
?>
<body>
</html>