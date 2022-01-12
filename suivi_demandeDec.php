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
		border:0px hidden red;
		border-radius:10px 10px;
		
	}
	#annR
	{
		background:orange;
		color:white;
		text-align:center;
		border:0px hidden red;
		
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
	margin-top: -10%;
		position: fixed;
		
		
		
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
require_once("headerCitoyen.php");
$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
		{
			$req="select * from declarationnaissance where numCompte=$idConnected AND etat=1";
			$result=$bdd->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
			<caption id="fina">Mes Demandes Finalisées</caption>
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Numero de demande</th>
						<th>Date de demande</th>	
					</tr>
				</thead>';
			while($ligne=$result->fetch())
			{
				$num_dem=$ligne["numDeclaration"];
				$date_dec=$ligne["date_declaration"];
				$etat_demande=$ligne["etat"];
				echo"<tr>
				<td> $num_dem</td>
				<td> $date_dec</td>";
				
			}
			}
			else
			{
				echo"Vous n'avez validé aucun demande";
			}
		}
		else
		{
			echo"Base de donnée non connectéé";
		}
?>

<?php

$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
		{
			$req="select * from declarationnaissance where numCompte=$idConnected AND etat=0" ;
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
				$num_dem=$ligne["numDeclaration"];
				$date_dec=$ligne["date_declaration"];
				$etat_demande=$ligne["etat"];
				$etat_rejet=$ligne["etat_rejet"];
				echo"<tr>
				<td> $num_dem</td>
				<td> $date_dec</td>";
				if($etat_rejet==0)
				{
					echo"<td>
					<a href='annulerDemandeDec.php?numDem=$num_dem'><button  id='ann'>Annuler</button></a></td>";
				}
				else
				{
					echo"<td >
					<a href='annulerDemandeDec.php?numDem=$num_dem'><button id='ann' >Demande rejetée</a></button></td>";
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
