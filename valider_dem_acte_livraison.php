<!DOCTYPE html>
<html>
	<head>
		<title>Liste des demandes d'actes</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/icones.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css1/formulaire.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style type="text/css">
#ta
{

	
	width:900px;
	margin-left:150px;
	border:2px solid white;
	
}
#btnSuccess
{
	background:green;
	color:white;
	border:0px hidden green;
	text-align:center;
	
}
#impression
   {
	   width:35px;
	   height:305x;
   }
   #btnWarnig
{
	background:orange;
	border:0px hidden orange;
	text-align:center;
	color:white;
}
 body
	{
		background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
	}
	#sup
	{
		background:#ff5252;
		color:white;
		border:0px hidden #ff5252;
		text-align:center;
	}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/materialize.min.js"></script>

<?php
require_once("heederOfficier.php");
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req=" select * from demandeactedenaissance where etat_transmission =1";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo'<h4 class="center col s12 m12 black-text">Liste des Demandeurs d\'Acte de Naissance</h4>';
				echo "<table id='ta' class='bordered highlight centered col s12 m12' >";
				echo"<thead>";
				echo"<tr><th>Numero Demande</th>";
                echo"<th>Annee de Declaration</th>"; 
                echo'<th>Numéro de Registre</th>'; 
				echo'<th></th>'; 
				echo'<th></th>'; 
                echo"</tr>";	
				echo"</thead>";
				while($ligne=$result->fetch())
				{
					$num_demande=$ligne["numDemande"];
					$annee_registre=$ligne["annee_registre"];
					$numero_registre=$ligne["numeroDeRegistre"];
					$etat_demande=$ligne["etat_demande"];
					$etat_transmission=$ligne["etat_transmission"];
					$etat_retour=$ligne["etat_retour"];
			
						 echo "<tbody>";
                        echo "<tr>";
                            echo"<td>$num_demande</td>";
							  echo"<td>$annee_registre</td>";
							  echo"<td>$numero_registre</td>";
							  echo"<td>
								
								 <a href='impressionExtraitL.php?idRegistre=$numero_registre'>
								 <img id='impression' src='images/impression.png'alt='imprimerie'/></a>
						
							</td>";
							if($etat_retour==0)
							{
								echo"<td>";
								echo"<a href='valider.php?
								numDem=$num_demande&annDec=$annee_registre
								&numReg=$numero_registre'><button  id='btnSuccess'>valider</button></a>";
								echo"</td>";
								
							}
							else
							{
							
								echo "<td>
								<button id='btnWarnig'>Demande finalisée</button>
								
								</td>";
								
								
							}
						
						  echo"</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
				
			}
			else
			{
				echo"Il n'y a pas de demande d'acte";
			}
		}
		else
		{
			echo"Base de donnée non connecté";
		}
	

?>