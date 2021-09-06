<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="administrateur.css?t=<?php echo time();?>">
        <title>Document</title>
    </head>
    <body>
	    <section>
		    <form method="post" action="">
            <div id="recherche">
                <input type="search" id='rech' name="rechUser" value= "<?php if(isset($_POST['Rechercher'])) echo $_POST['Rechercher']?>" placeholder="Rechercher un utilisateur"/>
                <input type="submit" id='su' value="Rechercher">
            </div>
            </form>
			<?php 
			    if(isset($_POST['rechUser'])){
					$nme=$_POST['rechUser'];
					$connect=new PDO("mysql:host=localhost;port=3306;dbname=projetsoutenance","root","");
                    if($connect){                 
					$req="SELECT * FROM Users WHERE (nom like '%$nme%' AND profil='agent')or(prenom like '%$nme%' AND profil='agent')";
					$res=$connect->query($req);
					echo "<table>";
                            echo"<tr>";
                                echo"<th>N°</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Email</th><th>Numéro de téléphone</th>";
                                echo"<th>Etat</th><th>Login</th><th>Mot de Passe</th><th>Date création compte</th>";
                                echo'<th colspan="2">changer l\'etat</th>'; 
                            echo"</tr>";								
                            while($row=$res->fetch(PDO::FETCH_ASSOC)){
								echo"<tr>";
                                $id=$row['idUser'];
                                $nm=$row['nom'];
                                $pnm=$row['prenom'];
                                $adr=$row['adresse'];
                                $email=$row['email'];
                                $ntl=$row['numTel'];
                                $etat=$row['etat'];
                                $login=$row['login'];
                                $mdp=$row['password'];
                                $dtcr=$row['created'];
                                // $dtmod=$row['modified'];
                                echo "<tr>";
                                    echo "<td> $id</td><td>$nm</td><td>$pnm</td><td>$adr</td><td>$email</td><td>$ntl</td><td>$etat</td>";
									echo "<td>$login</td><td>$mdp</td><td>$dtcr</td>";
									if($etat=='0'){
									    echo "<td>";
									        echo '<span id="desact">Inactif</span>';
											echo '<td><a href="activer.php?code='.$id.'"><button id="btn1">activer</button></a></td>';
                                        echo "</td>";
									}
									else{
									    echo "<td>";
									        echo '<span id="act">Actif</span>';
											echo '<td><a href="desactiver.php?code='.$id.'"><button id="btn2">désactiver</button></a></td>';
                                        echo "</td>";
									}
								echo "</tr>";
						}
						echo "</table>";
					}
				}
			?>
		</section>
		<section>
        <?php 
	        $connect=new PDO("mysql:host=localhost;port=3306;dbname=projetsoutenance","root","");
            if($connect){                 
		        $req="SELECT * FROM Users WHERE profil='agent'";
			    $res=$connect->query($req);
			    echo "<table>";
                    echo"<tr>";
                        echo"<th>N°</th><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Email</th><th>Numéro de téléphone</th>";
                        echo"<th>Etat</th><th>Login</th><th>Mot de Passe</th><th>Profil</th><th>Date création compte</th>";
                        echo'<th colspan="2">changer l\'etat</th>'; 
                    echo"</tr>";								
                    while($row=$res->fetch(PDO::FETCH_ASSOC)){
						echo"<tr>";
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
                            $dtcr=$row['created'];
                            // $dtmod=$row['modified'];
                        echo "<tr>";
                            echo "<td> $id</td><td>$nm</td><td>$pnm</td><td>$adr</td><td>$email</td><td>$ntl</td><td>$etat</td>";
							echo "<td>$login</td><td>$mdp</td><td>$profil</td><td>$dtcr</td>";
							if($etat=='0'){
							    echo "<td>";
							        echo '<span id="desact">Inactif</span>';
								    echo '<td><a href="activer.php?code='.$id.'"><button id="btn1">activer</button></a></td>';
                                echo "</td>";
							}
							else{
							    echo "<td>";
							        echo '<span id="act">Actif</span>';
     								echo '<td><a href="desactiver.php?code='.$id.'"><button id="btn2">désactiver</button></a></td>';
                                echo "</td>";
							}
						echo "</tr>";
					}
				echo "</table>";
			}
				
			?>
		</section>
</body>
</html>