<?php
$idRegistre=$_GET["idRdv"];
$connect=new PDO("mysql:host=localhost;port=3306;dbname=ecivil","root","");
        if($connect)
		{ 
			$req="DELETE FROM rdv where idRdv=$idRegistre ";
			$result=$connect->exec($req);
			header("Location:AllRdvOk.php");
		}
		else
		{
			echo"Base de donnée";
		}
?>