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
	margin-left:10px;
	color:white;
	border:0px 
}
.valid
{
	background:#28a745;
	border:0px 
}
#icon_prefix
{
	width:300px;
	margin-left:72%;
}
#rech
{
	margin-left:120px;
	width:80%;
	text-align:center;
	
}

</style>
<body>
<br/>
<br/>
<br/>

 <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="SELECT * FROM declarationnaissance  where etat =0 ORDER by date_declaration";
			$res=$connect->query($req);
			if($res->rowCount()>=1)
			{
				echo"<div id='rech'>";
                    echo' <form method="POST" action="rechercher.php">';
                       echo' <input id="icon_prefix" placeholder="prenom ou nom figurant sur la demande" 
					   type="search" class="validate" name="Code_de_recherche">';
                echo'</form>'; 
				echo'<br/>';
				echo "<table class='bordered highlight centered col s12 m12'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>N°Demande </th>";
                    echo"<th>Prénom</th><th>Nom</th><th>Lien de Parenté</th><th>Détails</th><th>Date de Soumission</th><th>Actions</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
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
									echo '<a href="annulerDemande.php"><button class="annuler">Annuler</button></a>';
                                  echo "</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
			echo"</div>";
			}
			else
			{
				echo"Il n'ya pas encore de declaration de naissance";
			}
				
			
		}
				
    ?>
</body>

</html>
 