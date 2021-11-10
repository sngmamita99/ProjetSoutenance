
<!DOCTYPE html>
<html>
	<head>
		<title>Registre des naissances</title>
		<meta charset="utf-8">
<!--Import materialize.min.css-->
<link type="text/css" rel="stylesheet" href="css1/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css1/icones.css"  media="screen,projection"/>
   
    <link rel="stylesheet" type="text/css" href="css1/datatables.min.css"/> 
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js1/jquery.min.js"></script>
    <script type="text/javascript" src="js1/materialize.min.js"></script>
    <script type="text/javascript" src="js1/datatables.min.js"></script>
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
				
			echo'<table class="col s12 responsive-table striped " id="l_naissance">
				<thead>
					<tr class="grey darken-3 lighten-2 white-text center ">
						<th>N° Acte</th>
						<th>Date déclaration</th>	
						<th>Type déclaration</td>
						<th>Prénom </td>
						<th>Nom</td>
						<th>Date naissance</td>
						<th>Lieu naissance</td>
						<th>Pére et mére</td>
						
						<th></th>
					</tr>
				</thead>';
				while($ligne=$result->fetch())
				{
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
					echo"<tr><td>$numActe</td><td>$date_declaration</td><td>$type_declaration</td><td>$prenom</td><td>$nom</td><td>$date_naissance</td><td>$lieuNaiss</td><td>$prenom_mere & $prenom_mere $nom_mere</td><td><img id='impression' src='images/impression.png' alt='imprimerie'/><a href='impressionExtrait.php'>Extrait de Naissance</a></td></tr>";
					
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