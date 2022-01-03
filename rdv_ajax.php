
<!doctype html>
<head>
<meta charset="utf-8"/>
<title> rechercher</title>
<style>
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
#noRdv
{
	text-align: center;
	color:green;
}
</style>
</head>

<?php
if(isset($_POST['jour_d']))
{
	$nom=$_POST['jour_d'];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="SELECT * FROM rdv where DateRdv='$nom'  AND type='Declaration de Naissance' AND etatRdv = 0";
			$result=$connect->query($req);
				if($result->rowCount())
				{
					echo'
					 <table class="col s8 m8 offset-s2 offset-m2">
                    <thead>
                        <tr style=color: #0d47a1">
                            <th data-field="" class="center">Numero de Compte</th>
                           
                             <th data-field="" class="center">Heure De Début</th>
                              <th data-field="" class="center">Heure De Fin</th>
                               <th data-field="" class="center" >Etat</th>
                        </tr>
                    </thead>';
                    
                
      
   
				/*echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="white-text center"  id="entete">
						<th>idRdv</th>
						<th>Date rdv</th>	
						<th>numCompte</td>
						<th>heure Debut</td>
						<th>heure Fin</td>
						
					</tr>
				</thead>';*/
					 while($row=$result->fetch())
				{
					
							
							$numCompte=$row['numCompte'];
							
							$idRdv=$row['idRdv'];
							$hd=$row['heureDebut'];
							$hf=$row['heureFin'];
							$etat=$row['etatRdv'];
							/*$req1="SELECT * from users where idUser=$numCompte";
							$result=$connect->query($req1);
							$resultat=$result->fetch();
							$nm=$resultat['nom'];
							$p=$resultat['prenom'];
							$req2="select * from rdv where numCompte = $numCompte  AND idRdv= $idRdv";
							$sql=$connect->query($req2);
							$sql2=$sql->fetch();*/
							
							
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$numCompte</td><td>$hd</td><td>$hf</td>";
                            if($etat==0)
							{
								echo "<td  id='desact'>";
								echo '<span>ABSENT</span>';
								echo "</td>";
								echo '<td><a title="cliquez ici si la personne est presente" href="present.php?code='.$numCompte.'"><img id="presence" src="images/presence.png"></a></td>';
							}
						
					}

							
							
							/*else
							{
								 echo "<td  id='act'>";
							     echo '<span>Présent</span>';
                                 echo "</td>";
								 echo '<td><a href="absent.php?code='.$numCompte.'">
								 <button id="btn" ><img id="absent" src="images/absent.png"  "></button></a></td>';
							 }*/
						echo "</tr>";
						 echo "</tbody>";
				
				echo "</table>";
			
				}
				else
				{
					//echo "$nom $etat";
					echo"<span style='margin-left:30%; font-size:20px;'>Il n'y a pas de rdv pour cette date</span>";
					
				}
					echo"</table>";
			}
			
		
	
}

?>
