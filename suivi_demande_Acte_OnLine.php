<?php

require_once("headerCitoyen.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Traitement</title>
	<style>
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
		background:red;
		color:white;
		text-align:center;
		
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
		margin-top:-10%;
		
	}
	#fina
	{
		background:green;
		color:white;
		
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
	}
	#payer
	{
		background:yellow;
		color:white;
		text-align:center;
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
			// $req="select * from demandeactedenaissance where numCompte=$idConnected AND etat_demande=1";
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
			$req="select * from demandeactedenaissance where numCompte=$idConnected LIMIT 1" ;
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
						
						<td></td>
					</tr>
				</thead>';
			while($ligne=$result->fetch())
			{
				$num_dem=$ligne["numDemande"];
				$_SESSION["numDemande"]=$num_dem;
				$date_dec=$ligne["date_demande"];
				$etat_demande=$ligne["etat_demande"];
				$etat_paiement=$ligne["etat_demande"];
				echo"<tr>
				<td> $num_dem</td>
				<td> $date_dec</td>";
				if($etat_demande==0)
				{
						echo"<td id='ann'>
						<a href='annulerDemandeActe.php?numDem=$num_dem'>Annuler</a></td>";
				}
				else if($etat_demande==0 && $etat_paiement==0)
				{
						echo"<td id='termine'>
						<span>Termine</span></td>
						";
						echo"<td id ='payer'>
						<a href='paypal/formulaire.php'>Payer </a></td>
						";
						
				}
				else
				{
					echo"<td><span id='oui'>Paiment ok</span></td>";
				
						echo"<td id='termine'>
						<a href='acceuil_demande.php'>Suivre Mes Livraisons</a>
						";
						echo"</td>
						";
				}
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