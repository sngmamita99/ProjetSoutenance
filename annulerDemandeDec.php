<?php
$numDem=$_GET["numDem"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="DELETE FROM  declarationnaissance WHERE numDeclaration=$numDem";
			$result=$connect->exec($req);
			header("Location:suivi_demandeDec.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>