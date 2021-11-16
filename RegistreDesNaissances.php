 <?php
 require_once("heederOfficier.php");

$idConnected=$_SESSION['idConnected'];

?>

   <style>
   #impression
   {
	   width:30px;
	   height:30px;
   }
   </style>
	</head>
	<body >
  <?php 
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from registrenaissance ";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo"<br/><br/>";
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="purple darken-3 lighten-2 white-text center ">
						<th>N° Acte</th>
						<th>Date déclaration</th>	
						<th>Type déclaration</td>
						<th>Prénom </td>
						<th>Nom</td>
						<th>Date naissance</td>
						<th>Lieu naissance</td>
						<th>Pére et mére</td>
						
						<th></th>
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
					$idRegistre=$ligne["idRegistre"];
					$numActe=$ligne["num_registre"];
					$date_declaration=$ligne["date_declaration"];
					$type_declaration=$ligne["type_declaration"];
					$prenom=$ligne["prenom_enfant"];
					$nom=$ligne["nom_enfant"];
					$date_naissance=$ligne["date_naissance_enfant"];
					$lieuNaiss=$ligne["lieu_naissance_pere"];
					$prenom_pere=$ligne["prenom_pere"];
					$prenom_mere=$ligne["prenom_mere"];
					$nom_mere=$ligne["nom_mere"];
					$heure_naissance_enfant=$ligne["heure_naissance_enfant"];
					// $date= date("getHours([$heure_naissance_enfant])");
					// echo $date;
					echo"<tr>
					<td>$numActe</td>
					<td>$date_declaration</td>
					<td>$type_declaration</td>
					<td>$prenom</td>
					<td>$nom</td>
					<td>$date_naissance à $heure_naissance_enfant</td>
					<td>$lieuNaiss</td>
					<td>$prenom_pere & $prenom_mere $nom_mere</td>
					<td>
					<a href='modifier_enregistrement.php?idRegistre=$idRegistre'><img id='impression' src='https://previews.123rf.com/images/sulikns/sulikns1706/sulikns170600418/80878621-dessiner-modifier-stylo-crayon-%C3%A9crire-ic%C3%B4ne-vector-illustration-.jpg' alt='imprimerie'/>
					</a>
					</td>
					<td>
					<img id='impression' src='images/impression.png'alt='imprimerie'/><a href='impressionExtrait.php?idRegistre=$idRegistre'>Extrait</a><br/><img id='impression' src='images/impression.png' alt='imprimerie'/><a href='impressionCopieLitteral.php'>Copie littérale</a>
					</td>
					</tr>";
					
					// </td><td><img id='impression' src='https://previews.123rf.com/images/sulikns/sulikns1706/sulikns170600418/80878621-dessiner-modifier-stylo-crayon-%C3%A9crire-ic%C3%B4ne-vector-illustration-.jpg' alt='imprimerie'/><a href='impressionExtrait.php?idRegistre=$idRegistre'>Extrait de Naissance</a><br/><img id='impression' src='images/impression.png' alt='imprimerie'/><a href='impressionCopieLitteral.php'>Copie littérale</a></td></tr>";
					
				}
					echo"</table>";
			}
			else
			{
				echo"Il n'a aucune decaration de Naissance";
			}
			
		}
		else
		{
			echo"Base de donnée non connecté";
		}
?>
	</body>
</html>