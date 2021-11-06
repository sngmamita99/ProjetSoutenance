<?phpsession_start();?>
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
	 session_start();

		$_SESSION['date']=$_GET['date'];
		$_SESSION['numCompte']=$_GET['numCompte'];
		$date=$_SESSION['date'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM users WHERE profil='officier'";
			$res=$connect->query($req);
				if($res->rowCount())
			{ echo"<h2 id='titreRv'>Rendez-vous du $date </h2>";
				echo "<table class='table table-bordered'>";
				echo"<thead>";
				echo"<tr>";
                    echo"<th>Rdv N°:</th><th>Prénom</th><th>Nom</th><th>Description";
                    // echo"<th>Login</th><th>Profil</th>";
                     
                echo"</tr>";	
				echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$id=$row['idUser'];
						$nm=$row['nom'];
						$pnm=$row['prenom'];
						$adr=$row['adresse'];
                        $email=$row['email'];
                        $ntl=$row['numTel'];
                        $etat=$row['etat'];
                        $login=$row['login'];
                        $mdp=$row['password'];
                        $profil=$row['profil'];
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nm</td><td>$pnm</td><td>$adr</td><td>$email</td>";
						
							
						echo "</tr>";
						 echo "</tbody>";
				}
				echo "</table>";
			
			}
			else
			{
				echo"Il n'ya pas encore d'Officier inscrit sur la plateforme";
			}
		}
				
    ?>
	<?php 
	 // session_start();
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$num=$_SESSION['numCompte'];
				$req="SELECT * FROM users WHERE idUser=$num";
				$res=$connect->query($req);
				if($res->rowCount())
				{
					 while($row=$res->fetch(PDO::FETCH_ASSOC))
					{
						$_SESSION['nom']=$row['nom'];
						$_SESSION['prenom']=$row['prenom'];
						
					}

				}
		}
		else
		{
			echo"Erreur de la basede donnée";
		}
		
	echo'<a class="BouttonAjout"  
			href="ajouterRdv/ajoutRdv.php?"> + </a>';
		?>
		<script src="rdv.js">
</script>	
  </body>
</html>
