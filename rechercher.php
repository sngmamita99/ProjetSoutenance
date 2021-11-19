<!DOCTYPE html>
<head>
	<meta charset=""/>
	<title>rechercher</title>
	<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script > 
</head>
<?php
// $rech=$_POST["Code_de_recherche"];
// echo "$rech";
if(isset($_POST["Code_de_recherche"]))
{	
	// echo"ok";
	$rech=$_POST["Code_de_recherche"];
	$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{
			$req="select * from demandeactedenaissance where numDemande=$rech";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				$ligne=$result->fetch();
				$etat_demande=$ligne["etat_demande"];
				if($etat_demande==0)
				{  
					echo"Votre demande est en cours de traitement";
						// echo '<script type="text/javascript">sweetAlert("Désolé !","Votre avis n\'a pas été pris en compte par notre équipe !","error")</script>';
				}
				else
				{
						echo"Votre demande est terminé";
					
				}
			}
			else
			{
				echo"Pas d'enregistrement";
			}
		}
		else
		{
			echo"Base de donnée non connecté";
		}
				

}
else
{
	echo " mot non ok";
}

?>