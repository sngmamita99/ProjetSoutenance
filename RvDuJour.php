<?php
require_once("headerAgent.php");
	
	$date=$_SESSION['date'];
	$numCompte=$_SESSION['numCompte'];
	
	?>
<!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>-->

<!DOCTYPE html>
<html>
    <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="officier.css" rel="stylesheet">
	<link rel="stylesheet" href="calendrierP.css"/>
	<style>
	#titreRv
	{
		text-align:center;
		font-size:30px;
		
	}
	#nok
	{
		text-align:center;
		font-size:50px;
		font-weight:bold;
		margin-top:90px;
		
	}
	body
	{
		background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
	}
	table
	{
		width:50%;
		text-align:center;
		margin:auto;
	}
.BouttonAjout
{	display:block;
	width:55px;
	height:55px;
	line-height:55px;
	text-align:center;
	color:#FFF;
	font-size:30px;
	background-color: #00695c ;
	border-radius:50%;
	text-decoration:none;
	position:absolute;
	bottom:30px;
	right:30px;
	transition:transform 0.3s;
	
}
.BouttonAjout:hover
{
	text-decoration:none;
	color:#FFF;
	transform:scale(1.2);
}
	</style>
  </head>
  <body>

<!--<script  src="rechercher.js"></script>-->	
	 <?php 
	
		
		$_SESSION['date']=$_GET['date'];
		$date=$_SESSION['date'];
		$numDe=$_SESSION['numDe'];
		// echo "$date $numCompte";
		$_SESSION['numCompte']=$_GET['numCompte'];
		$numCompte=$_SESSION['numCompte'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM rdv WHERE DateRdv='$date' AND type='Declaration de Naissance' AND etatRdv=0";
			$res=$connect->query($req);
			// $req1="SELECT * from users where idUser=$numCompte";
			// $result=$connect->query($req1);
				if($res->rowCount()>=1)
					
			{  echo"<h2 id='titreRv'>Rendez-vous du $date </h2>";
				echo "<table class='table table-bordered '>";
				echo"<thead>";
				echo"<tr>";
                    echo"<th>Rdv N°:</th><th>Prénom</th><th>Nom</th>";
					echo"<th>Heure de Début";
					echo"<th>Heure de Fin</th>";
					
                echo"</tr>";	
				echo"</thead>";
				while($ligne=$res->fetch())
				{
					$n=$ligne['numCompte'];
					$req1="SELECT * from users where idUser=$n";
					$result=$connect->query($req1);
					$resultat=$result->fetch();
					$nm=$resultat['nom'];
					$p=$resultat['prenom'];
					 // echo" $p $nm <br/>";
					$req2="select * from rdv where numCompte = $n";
					$sql=$connect->query($req2);
					$sql2=$sql->fetch();
					$hd=$sql2['heureDebut'];
					$hf=$sql2['heureFin'];
					$numRdv=$sql2['idRdv'];
					// echo" $hd $hf <br/>";
		
						 echo "<tbody>";
                        echo "<tr>";
                            // echo "<td>$numRv</td><td>$p</td><td>$n</td><td>$hdeb</td><td>$hfin</td>";
							 echo "<td>$numRdv</td><td>$p</td><td>$nm</td><td>$hd</td><td>$hf</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
				}
				echo "</table>";
			
			}
			else
			{
				echo"<div id='nok'> Il n'ya pas encore de RDV affecté à cette date</div>";
			}		
			
			}
			
			
	
				
    ?>
	<?php 
	 
	// echo"
	// <a class='BouttonAjout' 
			// href='ajouterRdv/ajoutRdv.php?numCompte=$numCompte&numDe=$numDe'> + </a>";
			echo"
	<a class='BouttonAjout' 
			href='ajouterRdv/ajoutRdv.php'> + </a>";
		?>
		<script src="rdv.js">
</script>	
  </body>
</html>
