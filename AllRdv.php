<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
    <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="jquery.min.js"></script>
	<style>
		
	#titreRv
	{
		text-align:center;
		
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
	</style>
  </head>
  <body>


	 <?php 
	$date=$_GET['date'];
		$connect=new PDO("mysql:host=localhost;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM rdv where DateRdv='$date' AND etatRdv=0";
			$result=$connect->query($req);
			
				if($result->rowCount()>=1)
			{ echo"<h2 id='titreRv'>Rendez-vous du Jour_J </h2>";
				echo "<table class='table table-bordered'>";
				echo"<thead>";
				echo"<tr>";
                echo"<th>Prenom</th><th>Nom</th><th>Heure De Début</th><th>Heure De Fin</th>";
                echo'<th colspan="2">Etat</th>'; 
                echo"</tr>";	
				echo"</thead>";
				
               while($row=$result->fetch())
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
							
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$p</td><td>$nm</td><td>$hd</td><td>$hf</td>";
						
					}
							
							if($etat=='0')
							{
								//letat doit etre modifié car il permet de l'effacer cote citoyen
								echo "<td  id='desact'>";
								    echo '<span>ABSENT</span>';
                                   echo "</td>";
								   // echo '<td><a href="activer.php"><button class="btn btn-success">activer</button></a></td>';
								   echo '<td><a title="cliquez ici si la personne est presente" href="present.php?code='.$numCompte.'&date='.$date.'"><img id="presence" src="images/presence.png"></a></td>';
							}
							else
							{
								echo "<td  id='act'>";
							        echo '<span>Présent</span>';
                                echo "</td>";
								echo '<td><a href="absent.php?code='.$numCompte.'&date='.$date.'"><button id="btn" ><img id="absent" src="images/absent.png"  "></button></a></td>';
							}
						echo "</tr>";
						 echo "</tbody>";
				
				echo "</table>";
			
			}
			else
			{
				echo"Il n'ya pas de rdv affecté à cette date";
			}
		}
				
    ?>
	</div>
	<script>
		$('#presence').click(function () {
		if (!confirm('Etes-vous sure quil est présent ?')) {
			return false;
		}
	});
	</script>
  </body>
</html>
