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
    </head>
    <body>
    <form method="post" action="TRCitoyen.php">
        <div id="recherche">
            <input type="search" id='rech' name="rechUser" placeholder="Rechercher un utilisateur"/>
            <input type="submit" id='su' value="Rechercher"/>
        </div>
    </form>
	<?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM users WHERE profil='citoyen'";
			$res=$connect->query($req);
			if($res->rowCount())
			{
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom</th><th>Prénom</th><th>Email</th>";
                    
                    echo'<th>Etat</th>'; 
					 echo'<th>Suppression</th>'; 
                echo"</tr>";	
			echo"</thead>";
            while($row=$res->fetch(PDO::FETCH_ASSOC)){
				
				$id=$row['idUser'];
				$nm=$row['nom'];
				$pnm=$row['prenom'];
				$adr=$row['adresse'];
                $email=$row['email'];
                 $ntl=$row['numTel'];
                        $etat=$row['etat'];
                        $login=$row['login'];
                    
                        $profil=$row['profil'];
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nm</td><td>$pnm</td><td>$email</td>";
							
							if($etat=='0')
							{
								// echo "<td>";
								    // echo '<span id="desact">Inactif</span>';
									echo "<td><a href='activer.php?code=$id'><button class='btn btn-success'>activer</button></a></td>";
                                   // echo "</td>";
							}
							else
							{
								// echo "<td>";
							        // echo '<span id="act">Actif</span>';
									echo "<td><a href='desactiver.php?code=$id'><button class='btn btn-warning'>désactiver</button></a></td>";
                                // echo "</td>";
							}
							echo"<td><a href='supprimerUser.php?code=$id'><button class='btn btn-danger'>supprimer</button></</a></td>";
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
			}
			else
			{
				echo"Il n'ya pas encore de citoyen inscrit sur la plateforme";
			}
		}
				
    ?>
  </body>
</html>
