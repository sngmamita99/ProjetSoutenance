<?php
require_once("heederOfficier.php");
?>
<!--link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>-->

<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	body
	{
		background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
	}
	#aucun
{
	text-align:center;
	font-size:25px;
}
table
	{
		width:50%;
		text-align:center;
		margin:auto;
	}
	button
{
	width:63%;
	text-align:center;
	
}
th,td
{
	text-align:center;
}
#act
{	color:white;
	font-weight:bold;
	background:green;
	
}
#desact
{
	color:black;
	font-weight:bold;
	
	
}
#presence
{
	width:20px;
	height:20px;
}
#absent
{
	width:25px;
	height:25px;
}
#btn
{
	background:white;
	border:0px white;
}
nav ul li a
{
	text-decoration:none;
	font-size:20px;
}
nav ul li a:hover
{
	text-decoration:none;
	color:white;
}
.brand-logo
{
	text-decoration:none;
}
#val
{
	width:20px;
	height:20px;
}
	</style>
  </head>
  <body>

<!--<script  src="rechercher.js"></script>-->	
	 <?php 
	 
		$date=$_GET['date'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="select*from rdv where DateRdv='$date' AND etatRdv=1 ORDER BY heureDebut AND heureFin";
			$result=$connect->query($req);
				if($result->rowCount()>=1)
			{ 
				echo "<table class='table table-bordered'>";
				echo"<thead>";
				echo"<tr>";
                echo"<th>Prenom</th><th>Nom</th><th>Heure De Début</th><th>Heure De Fin</th>";
                echo'<th></th>'; 
                echo"</tr>";	
				echo"</thead>";
               while($row=$result->fetch(PDO::FETCH_ASSOC))
				{
							$numCompte=$row['numCompte'];
							$req1="SELECT * from users where idUser=$numCompte";
							$result=$connect->query($req1);
							$resultat=$result->fetch();
							$nm=$resultat['nom'];
							$p=$resultat['prenom'];
							$req2="select * from rdv where numCompte = $numCompte";
							$sql=$connect->query($req2);
							$sql2=$sql->fetch();
							$hd=$sql2['heureDebut'];
							$hf=$sql2['heureFin'];
							$etat=$sql2['etatRdv'];
							$idRdv=$sql2['idRdv'];
							// $hdeb=$row['heureDebut'];
							// $hfin=$row['heureFin'];
						 echo "<tbody>";
                        echo "<tr>";
                            echo 
							"<td>$p</td>
							<td>$nm</td>
							<td>$hd</td>
							<td>$hf</td>
							<td><a href='supprimerRdv.php?idRdv=$idRdv'><img id='val' src='images/v.png' alt='image de validation'></a></td>";
							
							if($etat=='0')
							{
								echo "<td  id='desact'>";
								    echo '<span>ABSENT</span>';
                                   echo "</td>";
								 
								   echo '<td><a title="cliquez ici si la personne est presente" href="present.php?code='.$numCompte.'&date='.$date.'"><img id="presence" src="images/presence.png"></a></td>';
							}
							// else
							// {
								// echo "<td  id='act'>";
							        // echo '<span>Présent</span>';
                                // echo "</td>";
								// echo '<td><a href="absent.php?code='.$numCompte.'&date='.$date.'"><button id="btn" ><img id="absent" src="images/absent.png"  "></button></a></td>';
							// }
						echo "</tr>";
						 echo "</tbody>";
				}
				echo "</table>";
			
			}
			else
			{
				echo"<div id='aucun'>Il n'ya pas de rdv affecté à cette date</div>";
			}
		}
				
    ?>
	</div>
	
  </body>
</html>
