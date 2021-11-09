<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
    <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	button
{
	width:63%;
	text-align:center;
	
}
th,td
{
	text-align:center;
}
#act
{	color:white;
	font-weight:bold;
	background:green;
	
}
#desact
{
	color:white;
	font-weight:bold;
	background:red;
	
}
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
	</style>
  </head>
  <body>

<!--<script  src="rechercher.js"></script>-->	
	 <?php 
	$date=$_GET['date'];
		$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
		
		    $req="select*from rdv where DateRdv='$date' AND etatRdv=1";
			$result=$connect->query($req);
				if($result->rowCount()>=1)
			{ 
				echo "<table class='table table-bordered'>";
				echo"<thead>";
				echo"<tr>";
                    echo"<th>N°:</th><th>Prenom</th><th>Nom</th>";
                    // echo"<th>Login</th><th>Profil</th>";
                    // echo'<th colspan="2">Etat</th>'; 
                echo"</tr>";	
				echo"</thead>";
				$i=0;
               while($row=$result->fetch(PDO::FETCH_ASSOC))
				{
					$i++;
							
						 echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$i</td><td>pnm</td><td>nom</td>";
							// echo "<td>$login</td><td>$profil</td>";
							
						echo "</tr>";
						 echo "</tbody>";
				}
				echo "</table>";
			
			}
			else
			{
				echo"Il n'ya pas de rdv affecté à cette date";
			}
		}
				
    ?>
	</div>
	
  </body>
</html>

