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
	#l_naissance
	{
		
		width:50%;
		text-align:center;
		margin-left:26%;
	}
	</style>
</head>
<body>

<?php
require_once("headerCitoyen.php");
$bdd = new PDO ("mysql:host=localhost;dbname=ecivil","root", "");
		if($bdd)
		{
			$req="select * from declarationnaissance where numCompte=$idConnected";
			$result=$bdd->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white darken-3 lighten-2 black-text center ">
						<th>Numero de demande</th>
						<th>Date de demande</th>
						<th>Etat de demande</th>
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
				if($etat_demande==0)
				{
					
					
					echo"<td id='ok'>En cours de traitement</td>";
					
				}
				else
				{
					echo"<td id='nok'>Terminé</td>";
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