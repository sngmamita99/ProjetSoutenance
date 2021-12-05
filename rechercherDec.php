<?php
if(isset($_POST['nom']))
{
	$nom=$_POST['nom'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from declarationnaissance where numDeclaration like '%$nom%' AND  etat = 0 AND etat_rejet =0";
			$result=$connect->query($req);
			if($result->rowCount()>=1)
			{
				
				echo'<br/>';
				echo"<div id='recuperation'></div>";
				echo "<table class='bordered highlight centered col s12 m12' id='l_naissance'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>N°Demande </th>";
                    echo"<th>Prénom</th><th>Nom</th><th>Lien de Parenté</th><th>Détails</th><th>Date de Soumission</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$result->fetch(PDO::FETCH_ASSOC))
				{
						$numDe=$row['numDeclaration'];	
                        $lien=$row['lienDeParente'];
						$date=$row['date_declaration'];
						$x=$row['numCompte'];
						$req1="select * from users where idUser=$x";
						$resultGood=$connect->query($req1);
						$ligne=$resultGood->fetch();
						$n=$ligne['nom'];	
						$p=$ligne['prenom'];	
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$numDe</td><td>$p</td><td>$n</td><td>$lien</td><td><a href='justificatif.php?code=$x'><img id='IconeEye' src='images/eye.png' alt='Icone details'/></a></td><td class='dateSoumission'>$date</td>";
								echo "<td>";
								    echo "<a href='rdv.php?code=$x&numDe=$numDe'><button class='valid'>Valider</button></a>";
									echo "<a href='annulerDemande.php?code=$x&numDe=$numDe'><button class='annuler'>Rejeter</button></a>";
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
			echo"</div>";
			}
			else
			{
				echo"Aucun élément correspondant trouvé";
			}
				
		}
}

?>
