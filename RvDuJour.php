<?php
	session_start();
	$date=$_SESSION['date'];
	$numCompte=$_SESSION['numCompte'];
	// $nom=$_SESSION['nom'];
	// $prenom=$_SESSION['prenom'];
	?>
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
	<link href="officier.css" rel="stylesheet">
	<link rel="stylesheet" href="calendrierP.css"/>
	<style>
	#titreRv
	{
		text-align:center;
		
	}
	</style>
  </head>
  <body>

<!--<script  src="rechercher.js"></script>-->	
	 <?php 
	
		
		$_SESSION['date']=$_GET['date'];
		$date=$_SESSION['date'];
		// echo "$date $numCompte";
		$_SESSION['numCompte']=$_GET['numCompte'];
		$numCompte=$_SESSION['numCompte'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM rdv WHERE DateRdv='$date' AND type='Declaration de Naissance'";
			$res=$connect->query($req);
			// $req1="SELECT * from users where idUser=$numCompte";
			// $result=$connect->query($req1);
				if($res->rowCount()>=1)
					
			{ // echo"<h2 id='titreRv'>Rendez-vous du $date </h2>";
				echo "<table class='table table-bordered'>";
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
				echo"Il n'ya pas encore de RDV affecté à cette date";
			}		
			
			}
			
			
	
				
    ?>
	<?php 
	 
	echo"<a class='BouttonAjout' 
			href='ajouterRdv/ajoutRdv.php?numCompte=$numCompte'> + </a>";
		?>
		<script src="rdv.js">
</script>	
  </body>
</html>
