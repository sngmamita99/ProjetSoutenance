 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
    <head>
        <title>Demande de Declaration</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
	<body>
 <?php 
	
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect){ 
		
		    $req="SELECT * FROM declarationnaissance";
			$res=$connect->query($req);
			echo "<table class='table table-bordered'>";
			echo"<thead>";
				echo"<tr>";
                    echo"<th>Nom declarant</th><th>Prenom declarant</th><th>Sexe de l'enfant</th><th>Date de Naissance</th>";
                    echo"<th>Lien de Parenté</th><th>Certificat d'accouchement</th><th>Fixer un RDV</th>";
                echo"</tr>";	
			echo"</thead>";
               while($row=$res->fetch(PDO::FETCH_ASSOC))
				{

						$nD=$row['nomDeclarant'];
						
						
						$pD=$row['prenomDeclarant'];
						$sD=$row['sexeEnfant'];
                        $DNais=$row['dateDeNaissance'];
                        $lien=$row['lienDeParente'];
                       
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$nD</td><td>$pD</td><td>$sD</td><td>$DNais</td><td>$lien</td><td>xxx.png</td><td>Envoyer un email</td>";
							
							
						echo "</tr>";
						 echo "</tbody>";
					}
			echo "</table>";
		}
				
    ?>
	</body>
</html>
