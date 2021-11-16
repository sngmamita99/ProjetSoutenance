<?php
require_once("headerAgent.php");
?>
<style>
#IconeEye
{
	width:30px;
	height:30px;
}
.annuler
{
	background:#dc3545;
	margin-left:10Px;
	color:white;

		
	border:0px 
}
.valid
{
	background:#28a745;
	border:0px 
}
</style>
<body>
      
 <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM declarationnaissance  where etat =0 ORDER by date_declaration";
			$res=$connect->query($req);
			if($res->rowCount()>=1)
			{
				echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>N°Demande </th>";
                    echo"<th>Lien de Parenté</th><th>Détails</th><th>Date de Soumission</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{
						$numDe=$row['numDeclaration'];	
						// $nD=$row['nomDeclarant'];	
						// $pD=$row['prenomDeclarant'];	
                        $lien=$row['lienDeParente'];
						$date=$row['date_declaration'];
						$x=$row['numCompte'];
						 echo "<tbody>";
						 // echo"$x";
                        echo "<tr>";
                            echo "<td>$numDe</td><td>$lien</td><td><a href='justificatif.php?code=$x'><img id='IconeEye' src='images/eye.png' alt='Icone details'/></a></td><td class='dateSoumission'>$date</td>";
								echo "<td>";
								    echo "<a href='rdv.php?code=$x'><button class='valid'>Valider</button></a>";
									echo '<a href="annulerDemande.php"><button class="annuler">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
			}
			else
			{
				echo"Il n'ya pas encore de declaration de naissance";
			}
				
			
		}
				
    ?>
</body>

</html>
 