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
					$req="SELECT * FROM Users WHERE (nom like '%$nme%')or(prenom like '%$nme%')";
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
			
            <?php 
                echo"<br/>";
                    $connect=new PDO("mysql:host=localhost;port=3306;dbname=projetsoutenance","root","");
                    if($connect){                 
                        $sql2= "select * from users order by nom";
                        $stmt=$connect->query($sql2);
                        
                        echo "<table>";
                            echo"<tr>";
                                echo"<th>N°</th>";
                                echo"<th>Nom</th>";
                                echo"<th>Prénom</th>";
                                echo"<th>Adresse</th>";
                                echo"<th>Email</th>";
                                echo"<th>Numéro de téléphone</th>";
                                echo"<th>Etat</th>";
                                echo"<th>Login</th>";
                                echo"<th>Mot de Passe</th>";
                                echo"<th>Profil</th>";
                                echo"<th>Date création compte</th>";
                                
                                echo'<th colspan="2">changer l\'etat</th>'; 
                            echo"</tr>";								
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
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
                                    echo "<td>";
                                        echo $id;
                                    echo"</td>";
                                    echo"<td>";
                                        echo $nm;
                                    echo"</td>";
                                    echo"<td>";
                                         echo$pnm;
                                    echo"</td>";
                                    echo"<td>";
                                        echo$adr;
                                    echo"</td>";
                                    echo"<td>";
                                        echo $email;
                                    echo"</td>";
                                    echo "<td>";
									    echo $ntl;
                                    echo "</td>";
									echo "<td>";
									    echo$etat;
                                    echo "</td>";
									echo "<td>";
									    echo$login;
                                    echo "</td>";
									echo "<td>";
									    echo$mdp;
                                    echo "</td>";
									echo "<td>";
									    echo $profil;
                                    echo "</td>";
									echo "<td>";
									    echo$dtcr;
                                    echo "</td>";
				
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
//  echo "<form method='POST'  action='detail.php'>";
//  echo"<input type='hidden' name='detail' value='$c'/>";
//  echo "<input type='submit' name='voir' value='detail' />";
 // echo"<a href='detail.php?code=$c'><img src='$im'/> </p>";
 // echo "</form>";
 // echo "</td>";
 // echo "<td>";
 // echo"<form method='post' action='modification.php'>";
 // echo"<input type='hidden' name='modifie' value='$c'/>";
 // echo"<input type='hidden' name='modifim' value='$ID'/>";
 // echo "<input type='submit'id='btn' name='modifier' value='modifier'/>";
  // echo"</form>";
  // echo"</td>";
  // echo"<td>";
  // echo"<form method='post' action='produit.php'>";
  // echo "<input type='hidden' name='idSupr' value='$c' />";
 // echo "<input type='submit' name='supprimer' id='btn1' value='supprimer'/>";
 // echo "</form>";
 // echo "</td>";
  // echo "</tr>";
 

// }
// echo "</table>";

// if(isset($_POST['supprimer'])){
  // $b=$_POST['idSupr'];
 // $sql3="DELETE FROM  image  WHERE codeproduit=:cd";
  // $stmt=$connect->prepare($sql3);
  // $stmt->bindParam(':cd',$b,PDO::PARAM_INT);
  // $stmt->execute();

  // $req4="DELETE FROM  produit  WHERE code=:cod";
  // $stmt=$connect->prepare($req4);
  // $stmt->bindParam(':cod',$b,PDO::PARAM_INT);
  // $stmt->execute();
  // echo"suppression reussi";

 
   // } 
  


  
              // }

                   


 // $connect=new PDO("mysql:host=localhost;port=3306;dbname=commercial","baye","seck");

 // if($connect)
 // {

// }









// ?>
</section>



</body>
</html>