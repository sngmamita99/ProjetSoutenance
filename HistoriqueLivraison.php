<?php
require_once("headerLivreur.php");
?>

<!DOCTYPE html3
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
	 body
	{
		background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
	}
	</style>
</head>
<body>

<?php

$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
			
		{
			$req="select * from livraison where  etat=2";
			$result=$bdd->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
			<caption id="fina">Demandes Finalisées</caption>
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Numero de demande</th>
						<th>Date de livraison</th>
						
					</tr>
				</thead>';
			while($ligne=$result->fetch())
			{
				$num_dem=$ligne["numDemande"];
				$date_dec=$ligne["dateLivraison"];
				echo"<tr>
				<td> $num_dem</td>
				<td> $date_dec</td>";
				
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