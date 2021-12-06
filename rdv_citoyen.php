<?php 
require_once("headerCitoyen.php");
?>
<!doctype html>
<head>
	<meta charset="utf-8"/>
	<title>rdv_citoyen</title>
	<style>
	body
{
	background-image:url("https://cdn.pixabay.com/photo/2018/04/07/08/28/notepad-3297994_1280.jpg");
}
table
	{
		width:50%;
		text-align:center;
		margin:auto;
	}
	</style>
</head>
<body>
 <?php 
					 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM rdv where numCompte=$idConnected AND etatRdv=0";
			$res=$connect->query($req);
			if($res->rowCount()>=1)
			{
				
					echo "<table class='table table-bordered'>";
					echo"<thead>";
						echo"<tr>";
						 echo"<th>Date de votre Rdv</th><th>Heure de Début</th><th>Heure de Fin</th>";
                echo"</tr>";	
				echo"</thead>";
			while($row=$res-> fetch())
			{
				
						$DR=$row['DateRdv'];
						$hdeb=$row['heureDebut'];
                        $hfin=$row['heureFin'];
						echo "<tbody>";
							echo "<tr>";
								echo "<td>$DR</td><td>$hdeb</td><td>$hfin</td>";
							echo "</tr>";
						echo "</tbody>";
			}
			}
			else
			{
				echo "Vous n'avez aucun rdv";
			}
			
		}
		else
		{
			echo"Base de donnée non connecté";
		}
		?>
</body>
</html>