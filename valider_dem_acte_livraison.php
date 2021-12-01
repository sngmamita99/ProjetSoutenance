<?php
require_once("heederOfficier.php");
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req=" select * from demandeactedenaissance where etat_transmission=1";
			$result=$connect->query($req);
			if($result->rowCount())
			{
				echo"ya lign";
			// while($ligne=$resu)
			// {
			// }
			}
			else
			{
				echo"Il n'y a pas de demande d'acte";
			}
		}
		else
		{
			echo"Base de donnée non connecté";
		}
	

?>